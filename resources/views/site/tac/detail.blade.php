<section class="pb-14 md:pb-16 lg:pb-[88px] xl:pb-[200px] pt-[30px]">
  <div class="main-container">

    <article class="terms-conditions-body">

      @forelse($terms as $index => $term)
        <div data-ns-animate data-delay="0.4" class="space-y-6 mb-8">
          <h3>{{ $index + 1 }}. {{ $term->title }}</h3>

          {{-- Allow HTML from admin (CKEditor) --}}
          <div class="prose max-w-none">
            {!! $term->content !!}
          </div>
        </div>
      @empty
        <div class="text-center py-10">
          <h4 class="text-gray-500">No terms & conditions found.</h4>
        </div>
      @endforelse

    </article>

  </div>
</section>
