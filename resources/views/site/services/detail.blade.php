<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-24 md:pb-36 lg:pb-44 xl:pb-[200px]">
    <div class="main-container">

        {{-- TITLE + OVERVIEW + IMAGE (FULL ROW 50/50) --}}
        <div class="w-full mb-[72px]">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                {{-- LEFT SIDE: TEXT --}}
                <div class="space-y-4">
                    <h2 data-ns-animate data-delay="0.3" class="text-white">
                        {{ $service->title }}
                    </h2>

                    <p data-ns-animate data-delay="0.4" class="text-white/80 leading-relaxed">
                        {{ $service->overview }}
                    </p>
                </div>

                {{-- RIGHT SIDE: IMAGE --}}
                {{-- <figure data-ns-animate data-delay="0.6"
                        class="rounded-xl overflow-hidden w-full max-w-[480px] h-[480px] mx-auto">
                    <img src="{{ asset($service->photo) }}" 
                         alt="service-details" 
                         class="w-full h-full object-cover" />
                </figure> --}}
              <figure data-ns-animate data-delay="0.6"
                      class="rounded-xl overflow-hidden w-full max-w-[420px] h-[430px] mx-auto">
                  <img src="{{ asset($service->photo) }}" 
                      alt="service-details"
                      style="width:100%; aspect-ratio:1/1; object-fit:cover; display:block;" />
              </figure>


            </div>
        </div>

        <div class="flex flex-col lg:flex-row items-start lg:gap-[72px]">

            {{-- LEFT MAIN CONTENT --}}
            <div class="w-full lg:max-w-[1024px]">

                {{-- WHAT'S INCLUDED --}}
                <div class="mb-16 space-y-6">
                    <h2 data-ns-animate data-delay="0.1">What’s Included</h2>
                    <div data-ns-animate data-delay="0.2"
                         class="prose prose-invert max-w-none text-white">
                        {!! html_entity_decode($service->whats_included) !!}
                    </div>
                </div>

                {{-- USE CASES --}}
                <div class="mb-16 space-y-6">
                    <h2 data-ns-animate data-delay="0.2">Use Cases</h2>

                    <div data-ns-animate data-delay="0.3"
                         class="prose prose-invert max-w-none text-white">
                        {!! html_entity_decode($service->use_cases) !!}
                    </div>
                </div>

                {{-- TESTIMONIAL --}}
                @if($testimonial)
                    <div class="mt-[70px] space-y-14" id="live-data-insights">

                        <div class="space-y-3">
                            <h4 data-ns-animate data-delay="0.1" class="text-heading-2">What our users say</h4>
                            <p data-ns-animate data-delay="0.2" class="text-tagline-1 text-white/80">
                                “Zataar Tech delivered our entire platform ahead of schedule—flawless execution and real partnership.”
                            </p>
                        </div>

                        <div data-ns-animate data-delay="0.1"
                             class="bg-secondary p-8 rounded-[20px] space-y-6">
                            <figure class="size-16 rounded-full overflow-hidden">
                                <img src="{{ asset($testimonial->photo) }}"
                                     class="size-full object-cover" alt="avatar" />
                            </figure>

                            <blockquote>
                                <p class="text-white text-lg leading-relaxed">
                                    “{{ strip_tags($testimonial->review) }}”
                                </p>
                            </blockquote>

                            <div>
                                <p class="text-lg font-medium text-white">
                                    {{ $testimonial->client_name }}
                                </p>

                                @if($testimonial->designation)
                                    <p class="text-tagline-2 text-white/60">
                                        {{ $testimonial->designation }}
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            {{-- SIDEBAR BELOW WHATS INCLUDED --}}
            @if($otherServices->count() > 0)
                <aside class="w-full lg:max-w-[449px] lg:sticky lg:top-20 mt-10 lg:mt-0">

                    <div class="p-11 rounded-[20px] bg-background-1 dark:bg-background-6 space-y-4 w-full">
                        <h3 class="text-heading-5">Other Services</h3>

                        <ul class="table-of-list">
                            @foreach($otherServices as $item)
                                <li>
                                    <a href="{{ route('services.detail', $item->href) }}"
                                       class="py-4 flex items-center justify-between border-b border-b-stroke-4 dark:border-b-stroke-7 hover:text-primary transition">

                                        <span class="text-lg font-normal text-secondary/60 dark:text-accent/60 hover:text-primary">
                                            {{ $item->title }}
                                        </span>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" fill="none">
                                            <path d="M10 8.5L14 12.5L10 16.5"
                                                  class="stroke-secondary dark:stroke-accent"
                                                  stroke-opacity="0.6"
                                                  stroke-width="1.5"
                                                  stroke-linecap="round"
                                                  stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </aside>
            @endif

        </div>
    </div>
</section>
