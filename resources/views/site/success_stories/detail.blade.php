<section class="pt-7 pb-24 md:pb-28 lg:pb-32 xl:pb-[200px]">
  <div class="main-container">
    <div class="space-y-[70px]">

      <!-- Heading -->
      {{-- <h2 data-ns-animate data-delay="0.2" class="text-heading-3 max-w-[884px]" id="client-overview">
        {{ $story->title }}
      </h2> --}}

      <!-- Cover Image -->
      <figure data-ns-animate data-delay="0.3" class="max-w-[1290px] overflow-hidden rounded-4xl">
        <img src="{{ asset($story->photo ) }}"
             alt="{{ $story->title }}"
             class="size-full object-cover">
      </figure>

      <div class="space-y-[72px] max-w-[950px] mx-auto case-study-details">

        <!-- Company Information -->
        <ul aria-label="Company Information" class="space-y-2" data-ns-animate data-delay="0.4">
          @if($story->service)
            <li class="text-accent/60 dark:!text-accent/60">
              <strong class="text-secondary dark:!text-accent">Service: </strong>
              {{ $story->service->title }}
            </li>
          @endif

          @if($story->company_name)
          <li class="text-accent/60 dark:!text-accent/60">
            <strong class="text-secondary dark:!text-accent">Company: </strong>
            {{ $story->company_name }}
          </li>
          @endif

          @if($story->industry)
          <li class="text-accent/60 dark:!text-accent/60">
            <strong class="text-secondary dark:!text-accent">Industry: </strong>
            {{ $story->industry }}
          </li>
          @endif

          @if($story->team_size)
          <li class="text-accent/60 dark:!text-accent/60">
            <strong class="text-secondary dark:!text-accent">Team Size: </strong>
            {{ $story->team_size }}
          </li>
          @endif

          @if($story->headquarters)
          <li class="text-accent/60 dark:!text-accent/60">
            <strong class="text-secondary dark:!text-accent">Headquarters: </strong>
            {{ $story->headquarters }}
          </li>
          @endif

          @if($story->use_case)
          <li class="text-accent/60 dark:!text-accent/60">
            <strong class="text-secondary dark:!text-accent">Use Case: </strong>
            {{ $story->use_case }}
          </li>
          @endif
        </ul>

        <!-- Problem -->
        @if($story->problem)
        <div>
          <h3 class="text-heading-4 mb-3">The Challenge</h3>
          <div class="prose dark:prose-invert">{!! $story->problem !!}</div>
        </div>
        @endif

        <!-- Solution -->
        @if($story->solution)
        <div>
          <h3 class="text-heading-4 mb-3">The Solution</h3>
          <div class="prose dark:prose-invert text-white">{!! $story->solution !!}</div>
        </div>
        @endif

        <!-- Results -->
        @if($story->results)
        <div>
          <h3 class="text-heading-4 mb-6" id="results">The Results</h3>
          <div class="prose dark:prose-invert" style="color: white !important">{!! $story->results !!}</div>
        </div>
        @endif

        {{-- Testimonial Section --}}
        @if($testimonial)
        <section>
          <div class="max-w-[950px] mx-auto">
            <div class="space-y-14">
              <!-- heading -->
              <div class="space-y-3">
                <h4 class="text-heading-2" id="testimonials-title">
                  What our client says
                </h4>
              </div>

              <!-- testimonial card -->
              <div class="bg-secondary dark:bg-background-6 p-8 rounded-[20px] space-y-6 max-w-[950px]">
                <figure class="size-14 rounded-full overflow-hidden">
                  <img src="{{ asset( $testimonial->photo ) }}"
                      class="size-full object-cover"
                      alt="{{ $testimonial->client_name }}">
                </figure>
                <blockquote>
                  <p class="text-white dark:text-accent/60">
                    “{{ strip_tags($testimonial->review) }}”
                  </p>
                </blockquote>

                <div class="pb-4">
                  <p class="text-white text-lg font-medium leading-[150%]">
                    {{ $testimonial->client_name }}
                  </p>
                  @if($testimonial->designation)
                  <p class="text-tagline-2 text-accent/60">
                    {{ $testimonial->designation }}
                  </p>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </section>
        @endif


        <!-- Key Features -->
        @if($story->features)
        <div class="space-y-6">
          <h5 class="text-heading-4" id="key-features">Key Features Used</h5>
          <ul class="list-disc list-inside space-y-2">
            @foreach(json_decode($story->features) as $feature)
              <li class="text-secondary/60 dark:!text-accent/60">{{ $feature }}</li>
            @endforeach
          </ul>
        </div>
        @endif

      </div>
    </div>
  </div>
</section>