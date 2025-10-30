<style>
.whatsapp-float {
  position: fixed;
  bottom: 25px;
  right: 25px;
  background-color: #25D366;
  color: #fff;
  border-radius: 50%;
  text-align: center;
  font-size: 28px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  width: 55px;
  height: 55px;
  line-height: 55px;
  z-index: 9999;
  transition: all 0.3s ease;
}
.whatsapp-float:hover {
  background-color: #1ebd5a;
  transform: scale(1.1);
}
.whatsapp-float i {
  vertical-align: middle;
}
</style>

<footer class="footer footer-three bg-white dark:bg-background-8 dark:bg-background-6 relative overflow-hidden">
  <div class="main-container">
    <!-- footer bg-img  -->

    <figure data-ns-animate="" data-delay="0.7" data-offset="100" data-direction="right" class="footer-gradient-visible absolute overflow-hidden hidden {=$bg-gradient-class}" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
      <img src="{=$bg-gradient-img}" alt="gradient-img" class="w-full h-full object-cover">
    </figure>

    <div class="grid grid-cols-12 lg:gap-x-8 xl:gap-x-0 gap-x-0 gap-y-16 xl:pt-[100px] pt-16 pb-16 justify-between">
      <div class="lg:col-span-4 col-span-12">
        <div data-ns-animate="" data-delay="0.3" class="xl:max-w-[306px]" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
          <figure class="flex flex-col items-start">
            <!-- Logo -->
            <img src="{{ asset('images/shared/logo.png') }}" class="dark:hidden" alt="NextSass">
            <img src="{{ asset('images/shared/logo.png') }}" class="hidden dark:block" alt="NextSass">

            <!-- Flags below logo -->
            <div class="flex items-center gap-3 mt-4">
              <!-- USA Flag -->
              <div class="w-8 h-8 rounded-full overflow-hidden border border-gray-300 shadow-sm flex items-center justify-center bg-white">
                <img src="https://flagcdn.com/us.svg" alt="USA Flag"
                    class="w-10 h-10 object-cover object-center scale-125">
              </div>

              <!-- Canada Flag -->
              <div class="w-8 h-8 rounded-full overflow-hidden border border-gray-300 shadow-sm flex items-center justify-center bg-white">
                <img src="https://flagcdn.com/ca.svg" alt="Canada Flag"
                    class="w-10 h-10 object-cover object-center scale-125">
              </div>
            </div>
          </figure>

          <p class="mt-4 mb-7 text-secondary dark:text-accent">
            We aim to shape the future by combining human creativity with intelligent technology to make life simpler, smarter, and more connected.
          </p>
          <div class="flex items-center gap-3">
            <a href="{{ $contact_info->facebook ?? '#' }}" target="_blank" class="footer-social-link">
              <span class="sr-only">Facebook</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="7" height="16" viewBox="0 0 7 16" fill="none">
                <path d="M2.25 15C2.25 15.4142 2.58579 15.75 3 15.75C3.41421 15.75 3.75 15.4142 3.75 15H2.25ZM3.75 7C3.75 6.58579 3.41421 6.25 3 6.25C2.58579 6.25 2.25 6.58579 2.25 7H3.75ZM6 1.75C6.41421 1.75 6.75 1.41421 6.75 1C6.75 0.585786 6.41421 0.25 6 0.25V1.75ZM3 4H2.25H3ZM2.25 7C2.25 7.41421 2.58579 7.75 3 7.75C3.41421 7.75 3.75 7.41421 3.75 7H2.25ZM3 6.25C2.58579 6.25 2.25 6.58579 2.25 7C2.25 7.41421 2.58579 7.75 3 7.75V6.25ZM5 7.75C5.41421 7.75 5.75 7.41421 5.75 7C5.75 6.58579 5.41421 6.25 5 6.25V7.75ZM3 7.75C3.41421 7.75 3.75 7.41421 3.75 7C3.75 6.58579 3.41421 6.25 3 6.25V7.75ZM1 6.25C0.585786 6.25 0.25 6.58579 0.25 7C0.25 7.41421 0.585786 7.75 1 7.75V6.25ZM3 15H3.75V7H3H2.25V15H3ZM6 1V0.25C3.92893 0.25 2.25 1.92893 2.25 4H3H3.75C3.75 2.75736 4.75736 1.75 6 1.75V1ZM3 4H2.25V7H3H3.75V4H3ZM3 7V7.75H5V7V6.25H3V7ZM3 7V6.25H1V7V7.75H3V7Z" class="fill-secondary dark:fill-accent"></path>
              </svg>
            </a>

            <div class="h-5 w-px bg-stroke-1 dark:bg-stroke-8"></div>

            <a href="{{ $contact_info->instagram ?? '#' }}" target="_blank" class="footer-social-link">
              <span class="sr-only">Instagram</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11 1H5C2.79086 1 1 2.79086 1 5V11C1 13.2091 2.79086 15 5 15H11C13.2091 15 15 13.2091 15 11V5C15 2.79086 13.2091 1 11 1Z" class="stroke-secondary dark:stroke-accent" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8C11 8.79565 10.6839 9.55871 10.1213 10.1213C9.55871 10.6839 8.79565 11 8 11Z" class="stroke-secondary dark:stroke-accent" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <rect x="11" y="5" width="2" height="2" rx="1" transform="rotate(-90 11 5)" class="fill-secondary dark:fill-accent"></rect>
                <rect x="11.5" y="4.5" width="1" height="1" rx="0.5" transform="rotate(-90 11.5 4.5)" class="stroke-secondary dark:stroke-accent" stroke-linecap="round"></rect>
              </svg>
            </a>

            <div class="h-5 w-px bg-stroke-1 dark:bg-stroke-8"></div>

            <a href="{{ $contact_info->linkedin ?? '#' }}" target="_blank" class="footer-social-link">
              <span class="sr-only">LinkedIn</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="11" viewBox="0 0 13 11" fill="none">
                <path d="M2.25 4C2.25 3.58579 1.91421 3.25 1.5 3.25C1.08579 3.25 0.75 3.58579 0.75 4H2.25ZM0.75 10C0.75 10.4142 1.08579 10.75 1.5 10.75C1.91421 10.75 2.25 10.4142 2.25 10H0.75ZM10.75 10C10.75 10.4142 11.0858 10.75 11.5 10.75C11.9142 10.75 12.25 10.4142 12.25 10H10.75ZM5.5 7H4.75H5.5ZM4.75 10C4.75 10.4142 5.08579 10.75 5.5 10.75C5.91421 10.75 6.25 10.4142 6.25 10H4.75ZM2.25 1C2.25 0.585786 1.91421 0.25 1.5 0.25C1.08579 0.25 0.75 0.585786 0.75 1H2.25ZM0.75 2C0.75 2.41421 1.08579 2.75 1.5 2.75C1.91421 2.75 2.25 2.41421 2.25 2H0.75ZM1.5 4H0.75V10H1.5H2.25V4H1.5ZM11.5 10H12.25V7H11.5H10.75V10H11.5ZM11.5 7H12.25C12.25 4.92893 10.5711 3.25 8.5 3.25V4V4.75C9.74264 4.75 10.75 5.75736 10.75 7H11.5ZM8.5 4V3.25C6.42893 3.25 4.75 4.92893 4.75 7H5.5H6.25C6.25 5.75736 7.25736 4.75 8.5 4.75V4ZM5.5 7H4.75V10H5.5H6.25V7H5.5ZM1.5 1H0.75V2H1.5H2.25V1H1.5Z" class="fill-secondary dark:fill-accent"></path>
              </svg>
            </a>

            <div class="h-5 w-px bg-stroke-1 dark:bg-stroke-8"></div>

            <a href="{{ $contact_info->youtube ?? '#' }}" target="_blank" class="footer-social-link">
              <span class="sr-only">YouTube</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" viewBox="0 0 22 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.668 15.0028C18.9724 15.0867 20.91 13.29 21 10.9858V5.01982C20.91 2.71569 18.9724 0.918929 16.668 1.00282H5.332C3.02763 0.918929 1.08998 2.71569 1 5.01982V10.9858C1.08998 13.29 3.02763 15.0867 5.332 15.0028H16.668Z" class="stroke-secondary dark:stroke-accent" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.508 5.17711L13.669 7.32511C13.8738 7.44468 13.9997 7.66398 13.9997 7.90111C13.9997 8.13824 13.8738 8.35754 13.669 8.47711L10.508 10.8271C9.908 11.2341 9 10.8871 9 10.2511V5.75111C9 5.11811 9.909 4.77011 10.508 5.17711Z" class="stroke-secondary dark:stroke-accent" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </a>

            <div class="h-5 w-px bg-stroke-1 dark:bg-stroke-8"></div>
            {{-- <a href="#" class="footer-social-link">
              <span class="sr-only">Dribbble</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.81146 14.7617C6.69789 15.5957 3.41731 14.1957 1.86521 11.3707C0.313116 8.54567 0.890795 5.02595 3.26447 2.84524C5.63814 0.66452 9.19411 0.386619 11.8777 2.1721C14.5614 3.95759 15.6788 7.34483 14.5845 10.3767C13.8079 12.532 12.0248 14.1702 9.81146 14.7617Z" class="stroke-secondary dark:stroke-accent" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M9.06142 14.7162C9.03653 15.1297 9.35153 15.485 9.765 15.5099C10.1785 15.5348 10.5338 15.2198 10.5587 14.8063L9.06142 14.7162ZM6.84286 0.874373C6.64188 0.512186 6.18534 0.381502 5.82315 0.582483C5.46097 0.783464 5.33028 1.24 5.53126 1.60219L6.84286 0.874373ZM13.2187 2.9035C13.3591 2.5138 13.157 2.08408 12.7673 1.94368C12.3776 1.80328 11.9479 2.00537 11.8075 2.39506L13.2187 2.9035ZM7.74006 7.03428L7.54644 6.30971L7.54546 6.30997L7.74006 7.03428ZM1.89802 5.05032C1.58158 4.78304 1.10838 4.82289 0.841101 5.13932C0.573819 5.45576 0.613667 5.92896 0.930105 6.19624L1.89802 5.05032ZM2.77955 13.0958C2.63901 13.4855 2.84095 13.9153 3.23059 14.0558C3.62023 14.1963 4.05003 13.9944 4.19057 13.6048L2.77955 13.0958ZM8.25822 8.96384L8.06412 8.23939L8.25822 8.96384ZM14.1013 10.9494C14.4178 11.2166 14.891 11.1766 15.1582 10.8601C15.4254 10.5435 15.3854 10.0703 15.0688 9.80317L14.1013 10.9494ZM9.81006 14.7613L10.5587 14.8063C10.7186 12.1509 10.1178 9.27114 9.32769 6.78072C8.53534 4.28333 7.53363 2.11922 6.84286 0.874373L6.18706 1.23828L5.53126 1.60219C6.17449 2.76135 7.13628 4.83373 7.89793 7.23434C8.66179 9.64192 9.20557 12.3216 9.06142 14.7162L9.81006 14.7613ZM12.5131 2.64928L11.8075 2.39506C11.1142 4.31922 9.52233 5.7817 7.54644 6.30971L7.74006 7.03428L7.93369 7.75886C10.3844 7.10397 12.3588 5.29004 13.2187 2.9035L12.5131 2.64928ZM7.74006 7.03428L7.54546 6.30997C5.57029 6.84064 3.46046 6.37005 1.89802 5.05032L1.41406 5.62328L0.930105 6.19624C2.86801 7.83311 5.48485 8.41679 7.93467 7.75859L7.74006 7.03428ZM3.48506 13.3503L4.19057 13.6048C4.88464 11.6805 6.47642 10.2177 8.45232 9.68829L8.25822 8.96384L8.06412 8.23939C5.614 8.89585 3.64019 10.7097 2.77955 13.0958L3.48506 13.3503ZM8.25822 8.96384L8.45232 9.68829C10.4282 9.15889 12.5381 9.62992 14.1013 10.9494L14.5851 10.3763L15.0688 9.80317C13.1305 8.16701 10.5142 7.58293 8.06412 8.23939L8.25822 8.96384Z" class="fill-secondary dark:fill-accent"></path>
              </svg>
            </a>
            <div class="h-5 w-px bg-stroke-1 dark:bg-stroke-8"></div>
            <a href="#" class="footer-social-link">
              <span class="sr-only">Behance</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1 7V1H4C5.65685 1 7 2.34315 7 4C7 5.65685 5.65685 7 4 7C5.65685 7 7 8.34315 7 10C7 11.6569 5.65685 13 4 13H1V7Z" class="stroke-secondary dark:stroke-accent" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10H15Z" class="stroke-secondary dark:stroke-accent" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M1 6.25C0.585786 6.25 0.25 6.58579 0.25 7C0.25 7.41421 0.585786 7.75 1 7.75V6.25ZM4 7.75C4.41421 7.75 4.75 7.41421 4.75 7C4.75 6.58579 4.41421 6.25 4 6.25V7.75ZM9.75 9.99998C9.74999 9.58577 9.41419 9.24999 8.99998 9.25C8.58577 9.25001 8.24999 9.58581 8.25 10L9.75 9.99998ZM10.9295 12.8024L10.6619 13.5031L10.9295 12.8024ZM14.795 12.5C15.0712 12.1913 15.0447 11.7172 14.736 11.441C14.4273 11.1648 13.9532 11.1913 13.677 11.5L14.795 12.5ZM14 5.75C14.4142 5.75 14.75 5.41421 14.75 5C14.75 4.58579 14.4142 4.25 14 4.25V5.75ZM10 4.25C9.58579 4.25 9.25 4.58579 9.25 5C9.25 5.41421 9.58579 5.75 10 5.75V4.25ZM1 7V7.75H4V7V6.25H1V7ZM9 10L8.25 10C8.25004 11.5548 9.20948 12.9483 10.6619 13.5031L10.9295 12.8024L11.1971 12.1018C10.3257 11.7689 9.75002 10.9328 9.75 9.99998L9 10ZM10.9295 12.8024L10.6619 13.5031C12.1143 14.0578 13.7584 13.6588 14.795 12.5L14.236 12L13.677 11.5C13.0551 12.1953 12.0686 12.4347 11.1971 12.1018L10.9295 12.8024ZM14 5V4.25H10V5V5.75H14V5Z" class="fill-secondary dark:fill-accent"></path>
              </svg>
            </a> --}}
          </div>
        </div>
      </div>
      <div class="lg:col-span-8 col-span-12 grid grid-cols-12 gap-x-0 gap-y-8">
        <div class="col-span-12 md:col-span-6">
          <div data-ns-animate="" data-delay="0.4" class="space-y-8" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
            <p class="sm:text-heading-6 text-tagline-1 font-normal text-secondary dark:text-accent">
              Company
            </p>
            <ul class="space-y-5">
              <li>
                <a href="/services" class="footer-link-v2"> Services </a>
              </li>
              <li>
                <a href="/success-stories" class="footer-link-v2"> Success Stories </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-span-12 md:col-span-6">
          <div data-ns-animate="" data-delay="0.5" class="space-y-8" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
            <p class="sm:text-heading-6 text-tagline-1 font-normal text-secondary dark:text-accent">
              Support
            </p>
            <ul class="space-y-5">
              <li>
                <a href="/about-us" class="footer-link-v2"> About Us </a>
              </li>
              <li>
                <a href="/contact-us" class="footer-link-v2"> Contact Us </a>
              </li>
            </ul>
          </div>
        </div>
        {{-- <div class="col-span-12 md:col-span-4">
          <div data-ns-animate="" data-delay="0.6" class="space-y-8" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
            <p class="sm:text-heading-6 text-tagline-1 font-normal text-secondary dark:text-accent">
              Legal Policies
            </p>
            <ul class="space-y-5">
              <li>
                <a href="#" class="footer-link-v2">
                  Terms &amp; Conditions
                </a>
              </li>
              <li>
                <a href="#" class="footer-link-v2"> Privacy Policy </a>
              </li>
              <li>
                <a href="#" class="footer-link-v2"> Refund Policy </a>
              </li>
            </ul>
          </div>
        </div> --}}
      </div>
    </div>
    <div class="pt-6 pb-[60px] text-center relative overflow-hidden">
      <div class="footer-divider absolute top-0 left-0 right-0 w-0 origin-center mx-auto h-px bg-stroke-2 dark:bg-accent/5" style="width: 100%;"></div>
      <p data-ns-animate="" data-delay="0.7" data-offset="10" data-start="top 105%" class="text-secondary dark:text-accent/60" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
        Copyright © ZataarTech – All Rights Reserved.
      </p>
    </div>
  </div>
    <!-- =========================
    Theme Toggle Button
    ===========================-->
    {{-- <button id="theme-toggle" aria-label="Theme toggle button" class="size-12 bg-background-8 !z-[9999] dark:bg-white rounded-l-2xl cursor-pointer flex items-center justify-center fixed right-0 bottom-5">
      <span id="dark-theme-icon" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 stroke-black">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"></path>
        </svg>
      </span>
      <span id="light-theme-icon" class="hidden">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-6 stroke-white">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z"></path>
        </svg>
      </span>
    </button> --}}
    @if (!empty($contact_info->phone2))
        <a href="https://wa.me/{{ $contact_info->phone2 }}" 
          target="_blank" 
          class="whatsapp-float" 
          aria-label="Chat on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    @else
        <a href="#" class="whatsapp-float">
            <i class="fab fa-whatsapp"></i>
        </a>
    @endif



  <script src="{{asset('vendor/swiper.min.js')}}"></script>
  <script src="{{asset('vendor/leaflet.min.js')}}"></script>
  <script src="{{asset('vendor/vanilla-infinite-marquee.min.js')}}"></script>
  <script src="{{asset('vendor/split-text.min.js')}}"></script>
  <script src="{{asset('vendor/gsap.min.js')}}"></script>
  <script src="{{asset('vendor/scroll-trigger.min.js')}}"></script>
  <script src="{{asset('vendor/draw-svg.min.js')}}"></script>
  <script src="{{asset('vendor/scroll-trigger.min.js')}}"></script>
  <script src="{{asset('vendor/motionpathplugin.min.js')}}"></script>
  <script src="{{asset('vendor/lenis.min.js')}}"></script>
  <script src="{{asset('vendor/springer.min.js')}}"></script>
  <script src="{{asset('vendor/number-counter.js')}}"></script>
  <script src="{{asset('vendor/stack-card.min.js')}}"></script>


  <script src="{{asset('assets/main.js')}}"></script>
</footer>