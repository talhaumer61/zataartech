<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-24 md:pb-36 lg:pb-44 xl:pb-[200px]">
  <div class="main-container">
    <div class="flex items-start lg:gap-[72px]">
      @php
          $width = $otherServices->count() <= 0 ? "lg:max-w-[1024px]" : "lg:max-w-[767px]";
      @endphp
      <div class=" {{ $width }} max-w-full w-full">
        <div class="services-details-content mb-[72px]">
          <div style="display:flex; align-items:center;">
          <div>
            <h2 data-ns-animate="" data-delay="0.3" id="track-conversions" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">{{ $service->title }}</h2>
            <p data-ns-animate="" data-delay="0.4" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
              {{ $service->overview }}
            </p>
          </div>
          <figure data-ns-animate="" data-delay="0.6" data-instant="" class="rounded-xl overflow-hidden max-w-[767px]" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
            <img src="{{asset( $service->photo )}}" alt="service-details" class="size-full object-cover">
          </figure>
        </div>
          <div style="display:flex; justify-content: space-around;">
            <div>
              <h2 data-ns-animate="" data-delay="0.1" id="sales-management" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">What’s included</h2>
              <p data-ns-animate="" data-delay="0.2" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);" class="use_cases_para">
                <div style="color:white !important;">
                  {!! (html_entity_decode($service->whats_included)) !!}
                </div>
              </p>
            </div>
              <div>
                <h2 data-ns-animate="" data-delay="0.2" id="use-cases" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">Use cases</h2>
                <p data-ns-animate="" data-delay="0.3" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                  <div style="color:white !important;">
                    {!! (html_entity_decode($service->use_cases)) !!}
                  </div>
                </p>
              </div>
          </div>

          <h2 data-ns-animate="" data-delay="0.2" id="real-time-analytics" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
            Description
          </h2>
          <p data-ns-animate="" data-delay="0.3" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
            <div style="color:white !important;">
              {!! (html_entity_decode($service->description)) !!}
            </div>
          </p>

        </div>
        @if($testimonial)
          <div class="mt-[70px] space-y-14" id="live-data-insights">
            <div class="space-y-3">
              <h4 data-ns-animate="" data-delay="0.1" class="text-heading-2" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">What our users say</h4>
              <p data-ns-animate="" data-delay="0.2" class="text-tagline-1" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                “Zataar Tech delivered our entire platform ahead of schedule—flawless execution and real
                partnership.”
              </p>
            </div>
            <div data-ns-animate="" data-delay="0.1" class="bg-secondary p-8 rounded-[20px] space-y-6" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
              <figure class="size-16 rounded-full overflow-hidden bg-linear-[180deg,#ffffff_0%,#83e7ee_100%]">
                <img class="size-full object-cover" src="{{ asset( $testimonial->photo ) }}" alt="avatar">
              </figure>
              <blockquote>
                <p data-ns-animate="" data-delay="0.3" class="text-white" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                  ““{{ strip_tags($testimonial->review) }}””
                </p>
              </blockquote>
              <div>
                <p data-ns-animate="" data-delay="0.4" class="text-lg font-medium text-white" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                  {{ $testimonial->client_name }}
                </p>
                @if($testimonial->designation)
                  <p data-ns-animate="" data-delay="0.5" class="text-tagline-2 font-normal text-accent/60" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                    {{ $testimonial->designation }}
                  </p>
                @endif
              </div>
            </div>
          </div>
        @endif
      </div>
      <!-- Table of Contents -->
      @if($otherServices->count() > 0)
        <div class="table-of-contents lg:max-w-[449px] w-full lg:block lg:sticky lg:top-20 mt-10 lg:mt-0">
          <div class="p-11 rounded-[20px] bg-background-1 dark:bg-background-6 space-y-4 w-full">
            <h3 class="text-heading-5">Other Services</h3>
            <ul class="table-of-list w-full">
              @foreach($otherServices as $item)
              <li>
                <a href="{{ route('services.detail', $item->href) }}"
                  class="py-4 flex items-center justify-between border-b border-b-stroke-4 dark:border-b-stroke-7 hover:text-primary transition">
                  <span class="text-lg leading-[27px] font-normal text-secondary/60 dark:text-accent/60 hover:text-primary">
                    {{ $item->title }}
                  </span>
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                      <path d="M10 8.5L14 12.5L10 16.5" class="stroke-secondary dark:stroke-accent" stroke-opacity="0.6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </span>
                </a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      @endif
    </div>
  </div>
</section>