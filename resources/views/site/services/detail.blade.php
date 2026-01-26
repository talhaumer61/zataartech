<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-24 md:pb-36 lg:pb-44 xl:pb-[200px]">
    <div class="main-container">

        {{-- TITLE + OVERVIEW + IMAGE --}}
        <div class="w-full mb-[72px]">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20">

                {{-- LEFT --}}
                <div class="space-y-4">
                    <p data-ns-animate data-delay="0.4" class="text-white/80 leading-relaxed font-bold">
                        {{ $service->overview }}
                    </p>
                </div>

                {{-- RIGHT IMAGE --}}
                <figure data-ns-animate data-delay="0.6"
                        class="rounded-xl overflow-hidden w-full max-w-[420px] mx-auto"
                        style="aspect-ratio: 3 / 2;">
                    <img src="{{ asset($service->photo) }}"
                         alt="service-details"
                         style="width:100%; height:100%; display:block;" />
                </figure>
                <!-- <figure data-ns-animate data-delay="0.6"
                      class="rounded-xl overflow-hidden w-full max-w-[420px] h-[430px] mx-auto">
                  <img src="{{ asset($service->photo) }}" 
                      alt="service-details"
                      style="width:100%; aspect-ratio:1/1; object-fit:cover; display:block;" />
              </figure> -->

            </div>
        </div>

        @php
            $hasSec1 = !empty($service->sec1_title) && !empty($service->sec1_content);
            $hasSec2 = !empty($service->sec2_title) && !empty($service->sec2_content);
            $hasAnyMainSection = $hasSec1 || $hasSec2;
        @endphp

        <div class="flex flex-col lg:flex-row items-start lg:gap-[72px]">

            {{-- LEFT MAIN CONTENT --}}
            @if($hasAnyMainSection)
                <div class="w-full lg:max-w-[1024px]">

                    {{-- SECTION 1 --}}
                    @if($hasSec1)
                        <div class="mb-16 space-y-6">
                            <h2 data-ns-animate data-delay="0.1">
                                {{ $service->sec1_title }}
                            </h2>

                            <div data-ns-animate data-delay="0.2" class="prose prose-invert max-w-none text-white [&_ul]:list-disc [&_ul]:ml-5 [&_li]:text-white">
                                @php
                                    $desc = $service->sec1_content ?? "";
                                @endphp

                                {!! preg_replace(
                                    '/<ul>/', 
                                    '<ul style="list-style-type: disc; margin-left: 1.25rem; color: white;">', 
                                    $desc
                                ) !!}
                                {{-- {!! $service->sec1_content !!} --}}
                            </div>
                        </div>
                    @endif

                    {{-- SECTION 2 --}}
                    @if($hasSec2)
                        <div class="mb-16 space-y-6">
                            <h2 data-ns-animate data-delay="0.2">
                                {{ $service->sec2_title }}
                            </h2>

                            <div data-ns-animate data-delay="0.3" class="text-white [&_ul]:list-disc [&_ul]:ml-5 [&_li]:text-white">
                                @php
                                    $desc = $service->sec2_content ?? "";
                                @endphp

                                {!! preg_replace(
                                    '/<ul>/', 
                                    '<ul style="list-style-type: disc; margin-left: 1.25rem; color: white;">', 
                                    $desc
                                ) !!}
                                {{-- {!! $service->sec2_content !!} --}}
                            </div>
                        </div>
                    @endif

                    {{-- TESTIMONIAL --}}
                    @if($testimonial)
                        <div class="mt-[70px] space-y-14" id="live-data-insights">

                            <div class="space-y-3">
                                <h4 data-ns-animate data-delay="0.1" class="text-heading-2">
                                    What our users say
                                </h4>
                                {{-- <p data-ns-animate data-delay="0.2" class="text-tagline-1 text-white/80">
                                    “Zataar Tech delivered our entire platform ahead of schedule—flawless execution and real partnership.”
                                </p> --}}
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
            @endif

            {{-- OTHER SERVICES --}}
            @if($otherServices->count() > 0)
                <aside class="w-full {{ $hasAnyMainSection ? 'lg:max-w-[449px] lg:sticky lg:top-20' : '' }} mt-10 lg:mt-0">

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
