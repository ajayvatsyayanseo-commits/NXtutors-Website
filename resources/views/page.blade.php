<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>NXTutors</title>
 @include('include.header')
 <style>
   .gen-load-more {
  text-align: center;
  margin-top: 30px;
}

.gen-load-btn {
  padding: 12px 26px;
  border-radius: 6px;
  border: 1px solid #111;
  background: #111;
  color: #fff;
  cursor: pointer;
}
 </style>
<main class="main">
  <section class="gen-wrap">
    <div class="gen-head">
      <h1 class="gen-title">Find Tutors in Your Area</h1>
      <p class="gen-sub">Discover verified home tutors across major cities and neighborhoods across India</p>
    </div>

    <div class="gen-grid" id="pageGrid">
      @include('pages.partials.page-cards', ['pages' => $pages])
    </div>

    @if($pages->hasMorePages())
      <div class="gen-load-more">
        <button id="loadMoreBtn"
                data-next-page="{{ $pages->currentPage() + 1 }}"
                class="gen-load-btn">
          Load More
        </button>
      </div>
    @endif

    @if($pages->count() === 0)
      <div class="gen-empty">No pages generated yet.</div>
    @endif

  </section>
</main>
  
   @include('include.footer')

   <script>
document.addEventListener('DOMContentLoaded', function () {
  const btn = document.getElementById('loadMoreBtn');
  if (!btn) return;

  btn.addEventListener('click', function () {
    const nextPage = this.dataset.nextPage;
    this.disabled = true;
    this.innerText = 'Loading...';

    fetch(`{{ route('page') }}?page=${nextPage}`, {
      headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
    .then(res => res.text())
    .then(html => {
      if (html.trim() === '') {
        btn.remove();
        return;
      }

      document.getElementById('pageGrid')
        .insertAdjacentHTML('beforeend', html);

      btn.dataset.nextPage = parseInt(nextPage) + 1;
      btn.disabled = false;
      btn.innerText = 'Load More';
    })
    .catch(() => {
      btn.innerText = 'Try Again';
      btn.disabled = false;
    });
  });
});
</script>