<section class="relative pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] dark:bg-background-6 pb-24 md:pb-36 lg:pb-44 xl:pb-[200px]">
  <div class="main-container flex flex-col gap-[70px] max-[426px]:gap-10">
    <div class="flex flex-col items-center text-center">
      <span class="badge badge-yellow mb-5">{{$home->reviews_tag ?? "Customer Success"}}</span>
      <h2 class="max-w-[750px] mx-auto mb-4">{{ $home->reviews_heading ?? "Real apps. Real results."}}</h2>
      <p class="max-w-[490px] max-[426px]:text-tagline-2 max-[426px]:max-w-[320px]">
        {{ $home->reviews_desc ?? "Hear what our clients say about their experience working with Zataar Tech."}}
      </p>
    </div>

    <div class="relative">
      <div class="swiper reviews-swiper">
        <div class="swiper-wrapper">
          @foreach($testimonials as $testimonial)
            <div class="swiper-slide">
              <div class="bg-background-2 dark:bg-background-5 rounded-[20px] relative overflow-hidden p-8 flex flex-col gap-y-8 z-0 mx-1 sm:mx-0 border" style="border:1.5px solid #149bff;">

                
                <!-- Gradient overlay -->
                <div class="absolute w-full h-full -z-10 opacity-0 transition-opacity duration-300 gradient-overlay">
                  <img src="{{ asset('images/gradient/gradient-9.png') }}" alt="Decorative gradient" class="-rotate-[90deg]">
                </div>

                <figure class="inline-block size-14 rounded-full bg-linear-[156deg,_#FFF_32.92%,_#83E7EE_91%] overflow-hidden relative">
                  @if($testimonial->photo)
                    <img src="{{ asset( $testimonial->photo ) }}" alt="{{ $testimonial->client_name }}" class="max-w-full">
                  @else
                    <img src="{{ asset('images/avatar/default.png') }}" alt="Default avatar" class="max-w-full">
                  @endif
                </figure>

                <p class="text-secondary/60 dark:text-accent/60 review-text">
                  "{{ strip_tags($testimonial->review) }}"
                </p>

                <div>
                  <p class="text-secondary dark:text-accent font-medium text-lg leading-[1.5] review-name">
                    {{ $testimonial->client_name }}
                  </p>
                  <p class="text-secondary/60 dark:text-accent/60 text-tagline-2 review-title">
                    {{ $testimonial->designation ?? 'Client' }}
                  </p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>

    {{-- <div class="text-center">
      <a href="#" class="btn btn-md btn-secondary dark:btn-transparent hover:btn-white w-full sm:w-auto">
        <span>View all reviews</span>
      </a>
    </div> --}}
  </div>
</section>
