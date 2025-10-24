<section class="pt-7 pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="main-container">
    <div class="text-center space-y-3 mb-14 md:mb-[70px]">
      <h2 data-ns-animate="" data-delay="0.2">
        Our latest
        <span class="text-primary-500 inline-block">Success Stories</span>
      </h2>
      <p class="max-w-[738px] mx-auto">
        Discover how our clients overcame challenges and achieved remarkable results through our tailored solutions.
      </p>
    </div>

    <!-- Success Stories Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
      @foreach($stories as $story)
      <article class="group bg-background-2 dark:bg-background-6 rounded-[20px] overflow-hidden shadow-md hover:shadow-xl transition-all duration-500">
        <!-- Image -->
        <figure class="w-full h-[250px] overflow-hidden">
          <img src="{{ asset($story->photo) }}"
               alt="{{ $story->title }}"
               class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
        </figure>

        <!-- Content -->
        <div class="p-6 space-y-3">
          @if($story->service)
          <span class="badge badge-white font-medium dark:!bg-accent/10 dark:!text-accent/60">
            {{ $story->service->title }}
          </span>
          @endif

          <h3 class="text-heading-5 line-clamp-2">
            <a href="{{ route('success-stories.detail', $story->href) }}" class="hover:text-primary-500 transition-colors">
              {{ $story->title }}
            </a>
          </h3>

          @if($story->problem)
          <p class="text-tagline-2 line-clamp-3 text-secondary/70 dark:text-accent/70">
            {{ Str::limit(strip_tags($story->problem), 120) }}
          </p>
          @endif

          <div class="pt-2">
            <a href="{{ route('success-stories.detail', $story->href) }}"
               class="btn btn-md btn-white hover:btn-primary dark:btn-transparent inline-block">
              <span>Read Story</span>
            </a>
          </div>
        </div>
      </article>
      @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-14">
      {{ $stories->links('pagination::tailwind') }}
    </div>
  </div>
</section>
