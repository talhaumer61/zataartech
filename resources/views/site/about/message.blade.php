<section class="max-lg:mt-12 overflow-hidden px-[70px] py-[60px]">
  <div class="main-container">
    <div data-ns-animate="" data-delay="0.1" class="flex flex-col items-center relative overflow-hidden bg-background-2 dark:bg-background-6 rounded-4xl py-[100px]" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
      <!-- gradient bg  -->
      <div data-ns-animate="" data-delay="0.2" data-direction="left" data-offset="100" class="absolute select-none pointer-events-none -top-[90%] md:-top-[73%] lg:-top-[70%] -left-[65%] max-[376px]:-left-[76%] md:-left-[30%] lg:-left-[21%] xl:-left-[15%] rotate-[34deg] w-[500px] h-[600px]" style="opacity: 1; filter: blur(0px); transform: rotate(33.9998deg); translate: none; rotate: none; scale: none;">
        <img src="{{asset('images/gradient/gradient-6.png')}}" alt="Decorative gradient background overlay" class="w-full h-full object-cover">
      </div>

      <figure class="space-y-4 flex flex-col items-center justify-center">
        <img src="{{asset( $about->ceo_photo )}}" alt="Avatar" class="size-10 bg-ns-yellow ring-2 ring-white rounded-full object-cover">
        <figcaption class="text-tagline-2 font-medium dark:text-accent">From our CEO</figcaption>
      </figure>

      <p class=" container mt-6 mb-4 text-xl max-w-[626px] text-center mx-auto max-sm:text-tagline-2 max-sm:px-2">
        {!! strip_tags($about->ceo_message) !!}
      </p>

      {{-- <strong class="text-lg leading-[1.5] font-medium dark:text-accent">
        Daniel Carter, CEO &amp; Co-Founder
      </strong> --}}
    </div>
  </div>
</section>