<section class="bg-background-3 dark:bg-background-7 py-[100px]">
  <div class="main-container">
    <div class="max-w-[620px] text-center mx-auto mb-[70px]">
      <span class="badge badge-cyan mb-5">Our Team</span>
      <h2 class="mb-3">Our innovative, dynamic, and talented team</h2>
      <p>Our innovative, dynamic, and talented team is the driving force behind our success.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 justify-center mb-14">
      @foreach($teams as $team)
      <div class="w-[298px] h-[312px] space-y-[34px] mx-auto">
        <!-- team image -->
        <figure class="size-[156px] rounded-full bg-[#d5dbe3] flex items-center justify-center overflow-hidden mx-auto">
          <img src="{{ asset($team->photo ) }}" 
               class="object-cover size-full" alt="{{ $team->name }}" loading="lazy">
        </figure>

        <!-- info -->
        <div class="space-y-[27px] text-center">
          <h3 class="text-heading-5">{{ $team->name }}</h3>
          <p class="text-tagline-2">{{ $team->designation }}</p>

          <!-- social links -->
          <div class="flex items-center justify-center gap-2.5">
            @if($team->facebook)
              <a href="{{ $team->facebook }}" target="_blank" class="size-10 group p-2.5 rounded-full border flex items-center justify-center hover:bg-primary-500 hover:border-primary-500 transition-all">
                <i class="fa-brands fa-facebook-f text-white group-hover:text-white"></i>
              </a>
            @endif

            @if($team->twitter)
              <a href="{{ $team->twitter }}" target="_blank" class="size-10 group p-2.5 rounded-full border flex items-center justify-center hover:bg-primary-500 hover:border-primary-500 transition-all">
                <i class="fa-brands fa-twitter text-white group-hover:text-white"></i>
              </a>
            @endif

            @if($team->linkedin)
              <a href="{{ $team->linkedin }}" target="_blank" class="size-10 group p-2.5 rounded-full border flex items-center justify-center hover:bg-primary-500 hover:border-primary-500 transition-all">
                <i class="fa-brands fa-linkedin-in text-white group-hover:text-white"></i>
              </a>
            @endif

            @if($team->instagram)
              <a href="{{ $team->instagram }}" target="_blank" class="size-10 group p-2.5 rounded-full border flex items-center justify-center hover:bg-primary-500 hover:border-primary-500 transition-all">
                <i class="fa-brands fa-instagram text-white group-hover:text-white"></i>
              </a>
            @endif
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
