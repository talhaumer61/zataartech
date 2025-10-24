<section class="pb-[112px] pt-[112px] dark:bg-background-6">
  <div class="main-container">
    <div class="space-y-[70px]">
      <!-- heading  -->
      <div class="text-center">
        <span data-ns-animate="" data-delay="0.1" class="badge badge-yellow-v2 mb-5" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
          Financial blog tips and tricks
        </span>
        <h2 data-ns-animate="" data-delay="0.2" class="mb-3" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">Our recent news &amp; insights</h2>
        <p data-ns-animate="" data-delay="0.3" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
          Our recent news &amp; insights highlight the latest developments and trends shaping our
          industry.
        </p>
      </div>

      <!-- blog section  -->
      <div class="grid grid-cols-12 gap-y-8 lg:gap-x-8 justify-center">
          @foreach($stories as $key => $story)
              @if($key == 0)
                  <!-- Big card (first story) -->
                  <article class="lg:col-span-5 xl:col-span-6 col-span-12 group relative">
                      <div class="bg-background-2 dark:bg-background-5 space-y-7 md:space-y-10 rounded-[20px] scale-100 group-hover:scale-[101%] transition-transform duration-500">
                          <a href="{{ url('/success-stories/' . $story->href) }}" class="absolute inset-0"></a>

                          <figure class="rounded-[20px] w-full overflow-hidden xl:max-w-[629px] lg:h-[352px] xl:h-[367px]">
                              <img src="{{ asset( $story->photo ) }}" alt="{{ $story->title }}" class="size-full object-cover" loading="lazy">
                          </figure>

                          <div class="px-5 sm:px-8 pb-8">
                              <div class="mb-7 space-y-4">
                                  <div class="flex items-center">
                                      <div class="flex items-center gap-2">
                                          <time datetime="{{ $story->created_at->format('Y-m-d') }}" class="text-tagline-2 text-secondary/60 dark:text-accent/60">
                                              {{ $story->created_at->format('d.m.Y') }}
                                          </time>
                                      </div>
                                  </div>

                                  <h3 class="text-heading-6 xl:text-heading-5">
                                      <a href="{{ url('/success-stories/' . $story->href) }}">
                                          {{ $story->title }}
                                      </a>
                                  </h3>
                              </div>

                              <div>
                                  <a href="{{ url('/success-stories/' . $story->href) }}" class="btn btn-white hover:btn-secondary btn-md dark:btn-transparent dark:hover:btn-accent w-[90%] md:w-auto mx-auto md:mx-0">
                                      <span>Read more</span>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </article>
              @else
                  <!-- Small cards (2nd & 3rd story) -->
                  @if($key == 1)
                      <div class="lg:col-span-7 xl:col-span-6 col-span-12">
                          <div class="flex flex-col gap-y-8">
                  @endif

                              <article class="group relative">
                                  <div class="bg-background-2 dark:bg-background-5 rounded-[20px] flex flex-col md:flex-row items-center xl:gap-8 gap-4 scale-100 group-hover:scale-[101%] transition-transform duration-500">
                                      <a href="{{ url('/success-stories/' . $story->href) }}" class="absolute inset-0"></a>

                                      <figure class="w-full rounded-[20px] overflow-auto inline-block lg:max-w-[296px]">
                                          <img src="{{ asset( $story->photo ) }}" alt="{{ $story->title }}" class="size-full object-cover" loading="lazy">
                                      </figure>

                                      <div class="xl:py-8 py-4 px-5 sm:px-4 xl:px-0">
                                          <div class="mb-7 space-y-4">
                                              <div class="flex items-center gap-2">
                                                  <time datetime="{{ $story->created_at->format('Y-m-d') }}" class="text-tagline-2 text-secondary/60 dark:text-accent/60">
                                                      {{ $story->created_at->format('d.m.Y') }}
                                                  </time>
                                              </div>

                                              <h3 class="text-heading-6 xl:text-heading-5">
                                                  <a href="{{ url('/success-stories/' . $story->href) }}">
                                                      {{ $story->title }}
                                                  </a>
                                              </h3>
                                          </div>

                                          <div>
                                              <a href="{{ url('/success-stories/' . $story->href) }}" class="btn btn-white hover:btn-secondary btn-md dark:btn-transparent dark:hover:btn-accent w-[90%] md:w-auto mx-auto md:mx-0">
                                                  <span>Read more</span>
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                              </article>

                  @if($key == 2)
                          </div>
                      </div>
                  @endif
              @endif
          @endforeach
    </div>

    </div>
  </div>
</section>