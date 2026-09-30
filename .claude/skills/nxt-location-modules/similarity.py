"""Pairwise text similarity between pages (nxt-location-modules).

Usage: python similarity.py URL1 URL2 [URL3 ...]

For each pair it prints two ratios (difflib, 0..1):
  content  the page's own content: site chrome removed (header, nav,
           footer, pop-up forms, the Ask NXT AI panel, sitewide link rails),
           which Google treats as boilerplate. This is the one that counts.
  full     all visible text, for reference.
Target for sibling location pages: content <= 0.40. Exit code 1 if any
content pair is above that.
"""
import difflib
import itertools
import sys
import urllib.request
from html.parser import HTMLParser

SKIP_TAGS = {"script", "style", "noscript", "svg", "header", "nav", "footer", "template"}
# Sitewide chrome on nxtutors.com, by id or class fragment.
CHROME = ("nxAskAISection", "nx-modal", "nx-chips--rail", "tutorModal", "demoModal", "locationModal")
VOID = {"area", "base", "br", "col", "embed", "hr", "img", "input", "link", "meta", "source", "track", "wbr"}


class Text(HTMLParser):
    def __init__(self, strip_chrome: bool):
        super().__init__(convert_charrefs=True)
        self.strip_chrome = strip_chrome
        self.stack: list[bool] = []  # True when this element is skipped
        self.words: list[str] = []

    def _skipping(self) -> bool:
        return any(self.stack)

    def handle_starttag(self, tag, attrs):
        if tag in VOID:
            return
        a = dict(attrs)
        mark = f"{a.get('id', '')} {a.get('class', '')}"
        skip = tag in SKIP_TAGS or (self.strip_chrome and any(c in mark for c in CHROME))
        self.stack.append(skip)

    def handle_endtag(self, tag):
        if tag in VOID or not self.stack:
            return
        self.stack.pop()

    def handle_data(self, data):
        if not self._skipping():
            self.words.extend(data.split())


def fetch(url: str) -> str:
    req = urllib.request.Request(url, headers={"User-Agent": "Mozilla/5.0 (nxt-similarity)"})
    return urllib.request.urlopen(req, timeout=60).read().decode("utf-8", "ignore")


def words(html: str, strip_chrome: bool) -> list[str]:
    p = Text(strip_chrome)
    p.feed(html)
    return p.words


def ratio(a: list[str], b: list[str]) -> float:
    return difflib.SequenceMatcher(None, a, b, autojunk=False).ratio()


def main(urls: list[str]) -> int:
    if len(urls) < 2:
        print(__doc__)
        return 2
    html = {u: fetch(u) for u in urls}
    content = {u: words(h, True) for u, h in html.items()}
    full = {u: words(h, False) for u, h in html.items()}
    for u in urls:
        print(f"{len(content[u]):6d} content words ({len(full[u])} with chrome)  {u}")
    worst = 0.0
    for a, b in itertools.combinations(urls, 2):
        rc, rf = ratio(content[a], content[b]), ratio(full[a], full[b])
        worst = max(worst, rc)
        print(f"{'OK ' if rc <= 0.40 else 'HIGH'} content {rc:.2f} · full {rf:.2f}  {a}  <->  {b}")
    return 0 if worst <= 0.40 else 1


if __name__ == "__main__":
    sys.exit(main(sys.argv[1:]))
