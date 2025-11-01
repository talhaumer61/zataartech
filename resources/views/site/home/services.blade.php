<section class="py-28 lg:py-[156px] dark:bg-background-6">
  <div class="main-container">
    <!-- Service Header Section-->
    <div class="text-center mb-[70px] max-w-[880px] mx-auto">
      <span data-ns-animate="" data-delay="0.1" class="badge badge-yellow-v2 mb-5" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
        {{$home->services_tag?? "Our Services"}}
      </span>
      <h2 data-ns-animate="" data-delay="0.2" class="mb-3" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
        {{$home->services_heading ?? "Leading companies around the globe rely on Zataar Tech."}}
      </h2>
      <p data-ns-animate="" data-delay="0.3" class="mb-14 lg:max-w-[600px] mx-auto" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
        {{$home->services_desc ?? "Until recently, the prevailing view assumed lorem ipsum was born as a nonsense text. It's
        not Latin, though it looks like it"}}
      </p>
      <div data-ns-animate="" data-delay="0.4" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
        <a href="/services" class="btn btn-primary hover:btn-secondary dark:hover:btn-white btn-md text-tagline-2 w-[90%] md:w-auto mx-auto md:mx-0">
          <span>Explore all services</span>
        </a>
      </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      @forelse($services as $service)
        <div data-ns-animate data-delay="0.5" class="opacity-100">
          <div class="px-6 py-8 rounded-[20px] bg-background-2 dark:bg-background-5 flex flex-col items-center justify-center gap-6 hover:translate-y-[-10px] transition-transform duration-500 ease-in-out">
            
            {{-- Icon or image --}}
            @if($service->icon)
              <div>
                <img src="{{ asset( $service->icon ) }}" alt="{{ $service->title }}" class="w-16 h-16 object-contain rounded-full">
              </div>
            @endif

            {{-- Title and description --}}
            <div class="text-center">
              <h5 class="mb-2">{{ $service->title }}</h5>
              <p class="text-secondary/60 dark:text-accent/60">
                {{ Str::limit($service->short_description, 80) }}
              </p>
            </div>

            {{-- View button --}}
            <a href="{{ url('/services/' . $service->href) }}" class="btn btn-white hover:btn-secondary btn-md dark:btn-transparent dark:hover:btn-accent w-[90%] md:w-auto mx-auto md:mx-0">
              <span>View Details</span>
            </a>

          </div>
        </div>
      @empty
        <p class="col-span-3 text-center text-gray-500">No services available at the moment.</p>
      @endforelse
    </div>

  </div>
</section>