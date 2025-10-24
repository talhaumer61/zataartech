<section class="py-14 md:py-16 lg:py-[88px] xl:py-[100px] pt-[100px]">
  <div class="main-container">
    <div class="text-center space-y-5 mb-[70px]">
      <span data-ns-animate="" data-delay="0.2" class="badge badge-yellow-v2" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">Our Services</span>
      <div class="space-y-3">
        <h2 data-ns-animate="" data-delay="0.3" class="max-w-[878px] mx-auto" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
          Leading companies around the globe rely on Zataar Tech.
        </h2>
        {{-- <p data-ns-animate="" data-delay="0.4" class="max-w-[700px] mx-auto" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
          Until recently, the prevailing view assumed lorem ipsum was born as a nonsense text. It's
          not Latin, though it looks like it, and it actually has no meaning.
        </p> --}}
      </div>
    </div>
    <div class="grid grid-cols-12 xl:gap-8 md:gap-8 gap-y-5">
            @foreach ($global_services as $service)
                <div data-ns-animate data-delay="0.5" 
                     class="col-span-12 md:col-span-6 xl:col-span-4"
                     style="opacity: 1; filter: blur(0px); transform: translate(0px, 0px);">
                    <div class="px-6 py-8 rounded-[20px] bg-background-3 dark:bg-background-7 space-y-6 text-center grid items-center justify-center hover:translate-y-[-10px] transition-transform duration-500 ease-in-out">
                        
                        {{-- Service Icon or Photo --}}
                        <div class="flex items-center justify-center">
                            @if($service->icon)
                                <img src="{{ asset($service->icon) }}" alt="{{ $service->title }}" class="w-20 h-20 object-cover rounded-full">
                            @else
                                <span class="ns-shape-47 text-[52px] text-secondary dark:text-accent"></span>
                            @endif
                        </div>

                        {{-- Title + Overview --}}
                        <div class="space-y-2">
                            <h3 class="text-heading-5">{{ $service->title }}</h3>
                            <p class="max-w-[361px] mx-auto text-secondary/70">
                                {{ Str::limit($service->overview, 100) }}
                            </p>
                        </div>

                        {{-- Read More Button --}}
                        <div>
                            <a href="{{ url('services/' . $service->href) }}" 
                               class="btn btn-white dark:btn-transparent dark:hover:btn-accent hover:btn-secondary btn-md">
                                <span>Read more</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
  </div>
</section>