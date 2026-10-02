{{-- FAQ accordion: native details/summary (keyboard and screen-reader friendly). Mirrors the FAQPage schema. Expects $faqs. --}}
@if(count($faqs))
  <section class="nx-sec nxj-faq" aria-labelledby="faqTitle">
    <div class="nx-sec__head"><h2 class="nx-sec__title" id="faqTitle">Questions from tutors</h2></div>
    <div class="nx-faq">
      @foreach($faqs as $f)<details class="nx-faq__item" @if($loop->first) open @endif><summary>{{ $f[0] }}</summary><p>{{ \App\Support\JobsContent::rich($f[1]) }}</p></details>@endforeach
    </div>
  </section>
@endif
