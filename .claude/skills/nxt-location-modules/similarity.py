"""Pairwise text similarity between pages (nxt-location-modules).

Usage: python similarity.py URL1 URL2 [URL3 ...]
Prints visible word counts and a difflib ratio for every pair.
Target for sibling location pages: ratio <= 0.40.
"""
import difflib
import itertools
import re
import sys
import urllib.request


def words(url: str) -> list[str]:
    req = urllib.request.Request(url, headers={"User-Agent": "Mozilla/5.0 (nxt-similarity)"})
    html = urllib.request.urlopen(req, timeout=60).read().decode("utf-8", "ignore")
    html = re.sub(r"(?is)<(script|style|noscript|svg|nav|footer|header)\b.*?</\1>", " ", html)
    text = re.sub(r"<[^>]+>", " ", html)
    text = re.sub(r"&[a-z#0-9]+;", " ", text)
    return text.split()


def main(urls: list[str]) -> int:
    if len(urls) < 2:
        print(__doc__)
        return 2
    pages = {u: words(u) for u in urls}
    for u, w in pages.items():
        print(f"{len(w):6d} words  {u}")
    worst = 0.0
    for a, b in itertools.combinations(urls, 2):
        r = difflib.SequenceMatcher(None, pages[a], pages[b], autojunk=False).ratio()
        worst = max(worst, r)
        flag = "OK " if r <= 0.40 else "HIGH"
        print(f"{flag} {r:.2f}  {a}  <->  {b}")
    return 0 if worst <= 0.40 else 1


if __name__ == "__main__":
    sys.exit(main(sys.argv[1:]))
