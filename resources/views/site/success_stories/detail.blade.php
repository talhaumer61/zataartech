<style>
  /* Case Study Wrapper */
  .case-study-section {
    padding-top: 4rem;
    padding-bottom: 4rem;
  }

  /* Headings spacing */
  .case-study-section h3 {
    margin-bottom: 0.75rem;
    line-height: 1.3;
  }

  /* Paragraph content inside rich text */
  .case-study-section p {
    margin-bottom: 1rem;
    line-height: 1.7;
  }

  /* Lists inside rich text (problem / solution / results) */
  .case-study-section ul {
    list-style: disc;              /* ← THIS IS THE MISSING PIECE */
    list-style-position: outside;
    margin-left: 1.25rem;
    margin-bottom: 1rem;
  }

  .case-study-section ul li::marker {
    color: white; /* cyan / accent */
  }

  .case-study-section ul li {
    margin-bottom: 0.5rem;
  }

  /* Images */
  .case-study-section img {
    display: block;
    max-width: 100%;
  }

  /* Testimonial block */
  .case-study-testimonial {
    margin-top: 2rem;
  }

  /* Small screen adjustments */
  @media (max-width: 640px) {
    .case-study-section {
      padding-top: 3rem;
      padding-bottom: 3rem;
    }
  }


</style>
<section class="case-study-section py-16 bg-black text-white">

  <div class="max-w-4xl mx-auto px-4 space-y-12">

    <!-- Cover Image -->
    <div class="w-full h-[320px] overflow-hidden rounded-xl">
      <img
        src="{{ asset($story->photo) }}"
        alt="{{ $story->title }}"
        class="w-full h-full object-cover"
      >
    </div>

    <!-- Company Info -->
    <ul class="space-y-2 text-gray-300">
      @if($story->service)
        <li><span class="font-semibold text-white">Service:</span> {{ $story->service->title }}</li>
      @endif
      @if($story->company_name)
        <li><span class="font-semibold text-white">Company:</span> {{ $story->company_name }}</li>
      @endif
      @if($story->industry)
        <li><span class="font-semibold text-white">Industry:</span> {{ $story->industry }}</li>
      @endif
      @if($story->team_size)
        <li><span class="font-semibold text-white">Team Size:</span> {{ $story->team_size }}</li>
      @endif
      @if($story->headquarters)
        <li><span class="font-semibold text-white">Headquarters:</span> {{ $story->headquarters }}</li>
      @endif
    </ul>

    <!-- Challenge -->
    @if($story->problem)
    <div>
      <h3 class="text-2xl font-bold mb-3">The Challenge</h3>
      <div class="text-gray-300 leading-relaxed">
        {!! $story->problem !!}
      </div>
    </div>
    @endif

    <!-- Solution -->
    @if($story->solution)
    <div>
      <h3 class="text-2xl font-bold mb-3">The Solution</h3>
      <div class="text-gray-300 leading-relaxed">
        {!! $story->solution !!}
      </div>
    </div>
    @endif

    <!-- Results -->
    @if($story->results)
    <div>
      <h3 class="text-2xl font-bold mb-3">The Results</h3>
      <div class="text-gray-300 leading-relaxed">
        {!! $story->results !!}
      </div>
    </div>
    @endif

    <!-- Key Features -->
    @if($story->features)
    <div>
      <h3 class="text-2xl font-bold mb-4">Key Features Used</h3>
      <ul class="list-disc pl-6 space-y-2 text-gray-300 marker:text-white">
        @foreach(json_decode($story->features) as $feature)
          <li>{{ $feature }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <!-- Testimonial -->
    @if($testimonial)
    <div class="border border-white/20 rounded-xl p-6 space-y-4 case-study-testimonial">

      <p class="italic text-gray-300">
        “{{ strip_tags($testimonial->review) }}”
      </p>

      <div class="flex items-center gap-4">
        <img
          src="{{ asset($testimonial->photo) }}"
          class="w-12 h-12 rounded-full object-cover"
          alt="{{ $testimonial->client_name }}"
        >
        <div>
          <p class="font-semibold">{{ $testimonial->client_name }}</p>
          @if($testimonial->designation)
            <p class="text-sm text-gray-400">{{ $testimonial->designation }}</p>
          @endif
        </div>
      </div>
    </div>
    @endif

  </div>
</section>
