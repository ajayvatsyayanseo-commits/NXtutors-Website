{{-- Shared styling for the legal pages. Scoped to .nxlegal, built on the
     design-system tokens so these pages stop shipping their own blue theme. --}}
<style>
body.page .nxlegal{
  display: grid;
  grid-template-columns: minmax(0, 1fr);
  gap: var(--nxt-s5);
  align-items: start;
  padding-block: var(--nxt-s6) var(--nxt-s7);
}

@media (min-width: 992px){
  body.page .nxlegal{
    grid-template-columns: 240px minmax(0, 1fr);
    gap: var(--nxt-s6);
  }
}

/* ---- Table of contents ---- */
body.page .nxlegal-toc{
  padding: var(--nxt-s4);
  border: 1px solid var(--nxt-line);
  border-radius: var(--nxt-r-md);
  background: var(--nxt-surface);
}

@media (min-width: 992px){
  body.page .nxlegal-toc{
    position: sticky;
    top: var(--nxt-s5);
    max-height: calc(100vh - 2 * var(--nxt-s5));
    overflow-y: auto;
  }
}

body.page .nxlegal-toc__label{
  margin: 0 0 var(--nxt-s3);
  font-size: var(--nxt-t-micro);
  font-weight: 700;
  letter-spacing: .12em;
  text-transform: uppercase;
  color: var(--nxt-text-faint);
}

body.page .nxlegal-toc__list{
  margin: 0;
  padding: 0 0 0 1.1em;
  display: grid;
  gap: 2px;
  font-size: var(--nxt-t-sm);
}

body.page .nxlegal-toc__list li::marker{ color: var(--nxt-text-faint); }

body.page .nxlegal-toc__list a{
  display: inline-block;
  padding: 5px 0;
  color: var(--nxt-text-dim);
  text-decoration: none;
  line-height: 1.4;
}

body.page .nxlegal-toc__list a:hover{ color: var(--nxt-accent); }

/* ---- Document body ---- */
body.page .nxlegal-body{ min-width: 0; }

body.page .nxlegal-updated{
  display: inline-flex;
  align-items: center;
  gap: 7px;
  margin: 0 0 var(--nxt-s5);
  padding: 6px 12px;
  border: 1px solid var(--nxt-line);
  border-radius: 999px;
  background: var(--nxt-surface);
  font-size: var(--nxt-t-xs);
  color: var(--nxt-text-dim);
}

body.page .nxlegal-updated svg{ color: var(--nxt-accent); flex: 0 0 auto; }

body.page .nxlegal-section{
  padding-block: var(--nxt-s4);
  border-top: 1px solid var(--nxt-line);
  scroll-margin-top: var(--nxt-s6);
}

body.page .nxlegal-section:first-of-type{ border-top: 0; padding-top: 0; }

body.page .nxlegal-section__head{
  margin: 0 0 6px;
  font-family: var(--nxt-font-display);
  font-size: var(--nxt-t-h3);
  font-weight: 700;
  letter-spacing: -.012em;
  color: var(--nxt-text);
}

body.page .nxlegal-section__body{
  margin: 0;
  max-width: 74ch;
  font-size: var(--nxt-t-body);
  line-height: 1.75;
  color: var(--nxt-text-dim);
}

/* Fallback path: unparsed stored HTML still needs readable typography. */
body.page .nxlegal-raw{ max-width: 74ch; color: var(--nxt-text-dim); line-height: 1.75; }
body.page .nxlegal-raw h2,
body.page .nxlegal-raw h3{ color: var(--nxt-text); margin: var(--nxt-s5) 0 var(--nxt-s2); }
body.page .nxlegal-raw p{ margin: 0 0 var(--nxt-s4); }
body.page .nxlegal-raw ul,
body.page .nxlegal-raw ol{ margin: 0 0 var(--nxt-s4); padding-left: 1.3em; }
body.page .nxlegal-raw li{ margin-bottom: 6px; }
body.page .nxlegal-raw a{ color: var(--nxt-accent); }
body.page .nxlegal-raw img{ max-width: 100%; height: auto; border-radius: var(--nxt-r-md); }

/* ---- Help footer ---- */
body.page .nxlegal-help{
  margin-top: var(--nxt-s6);
  padding: var(--nxt-s5);
  border: 1px solid var(--nxt-accent-line);
  border-radius: var(--nxt-r-lg);
  background: var(--nxt-accent-soft);
}

body.page .nxlegal-help__head{
  margin: 0 0 6px;
  font-size: var(--nxt-t-h4);
  font-weight: 700;
  color: var(--nxt-text);
}

body.page .nxlegal-help__text{
  margin: 0 0 var(--nxt-s4);
  max-width: 62ch;
  font-size: var(--nxt-t-sm);
  line-height: 1.65;
  color: var(--nxt-text-dim);
}

body.page .nxlegal-help__actions{
  display: flex;
  flex-wrap: wrap;
  gap: var(--nxt-s3);
}

@media (max-width: 559px){
  body.page .nxlegal-help__actions .nxbtn{ width: 100%; justify-content: center; }
}
</style>
