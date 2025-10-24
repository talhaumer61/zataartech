<header>
    <div
        class="header-one opacity-0 rounded-full lp:!max-w-[1290px] xl:max-w-[1140px] lg:max-w-[1140px] md:max-w-[720px] sm:max-w-[540px] min-[500px]:max-w-[450px] min-[425px]:max-w-[375px] max-w-[320px] mx-auto w-full fixed left-1/2 -translate-x-1/2 z-50 top-5 flex items-center justify-between px-2.5 xl:py-0 py-2.5 bg-white/60 backdrop-blur-[25px] dark:bg-background-7 dark:border dark:border-stroke-7 max-[400px]:max-w-[340px]"
        data-ns-animate="" data-direction="up" data-offset="100">
        <div>
        <a href="/">
            <span class="sr-only">Home</span>
            <figure class="lg:max-w-[198px] lg:block hidden">
            <img src="{{asset('images/shared/logo.png')}}" alt="Zataar Tech">
            {{-- <img src="{{asset('images/shared/logo.png')}}" alt="Zataar Tech" class="dark:invert"> --}}
            </figure>
            <figure class="max-w-[120px] lg:hidden block">
            <img src="{{asset('images/shared/logo.png')}}" alt="Zataar Tech" class="w-full dark:hidden block">
            <img src="{{asset('images/shared/logo.png')}}" alt="Zataar Tech" class="w-full dark:block hidden">
            </figure>
        </a>
        </div>
        <nav class="hidden lg:flex items-center">
        <ul class="flex items-center">
            <li class="py-2.5">
                <a href="/"
                    class="flex items-center gap-1 px-4 py-2 border border-transparent hover:border-stroke-2 dark:hover:border-stroke-7 rounded-full text-tagline-1 font-normal text-secondary/60 hover:text-secondary transition-all duration-200 dark:text-accent/60 dark:hover:text-accent {=$nav-item-class}">
                    Home
                </a>
            </li>
            <li class="relative nav-item cursor-pointer py-2.5 group">
                <a href="#" class="nav-item-link flex items-center gap-1 px-4 py-2 border border-transparent rounded-full text-tagline-1 font-normal text-secondary/60 hover:text-secondary transition-all duration-200 dark:text-accent/60 dark:hover:text-accent">
                    <span>Services</span>
                    <span class="nav-arrow block origin-center transition-all duration-300 translate-y-px">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                        </svg>
                    </span>
                </a>

                <div class="absolute left-1/2 -translate-x-1/2 top-full mt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                    <div class="bg-white dark:bg-background-6 rounded-[20px] px-[60px] py-[50px] border border-stroke-1 dark:border-stroke-6 shadow-xl min-w-[280px] w-full">
                        <ul class="space-y-5">
                            @foreach($global_services as $service)
                                <li>
                                    <a href="{{ url('services/' . $service->href) }}"
                                    class="text-secondary/60 dark:text-accent/60 dark:hover:text-accent flex items-center gap-1 font-normal text-tagline-1 hover:text-secondary transition-all duration-200 group/item">
                                        <span>{{ $service->title }}</span>
                                        <span class="opacity-0 group-hover/item:opacity-100 group-hover/item:translate-x-2 transition-all duration-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M8 12L12 8L8 4" class="stroke-secondary dark:stroke-accent" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </li>


            {{-- <li class="py-2.5">
                <a href="/services"
                    class="flex items-center gap-1 px-4 py-2 border border-transparent hover:border-stroke-2 dark:hover:border-stroke-7 rounded-full text-tagline-1 font-normal text-secondary/60 hover:text-secondary transition-all duration-200 dark:text-accent/60 dark:hover:text-accent {=$nav-item-class}">
                    Services
                </a>
            </li> --}}
            <li class="py-2.5">
                <a href="/success-stories"
                    class="flex items-center gap-1 px-4 py-2 border border-transparent hover:border-stroke-2 dark:hover:border-stroke-7 rounded-full text-tagline-1 font-normal text-secondary/60 hover:text-secondary transition-all duration-200 dark:text-accent/60 dark:hover:text-accent {=$nav-item-class}">
                    Success Stories
                </a>
            </li>
            <li class="py-2.5">
                <a href="/about-us"
                    class="flex items-center gap-1 px-4 py-2 border border-transparent hover:border-stroke-2 dark:hover:border-stroke-7 rounded-full text-tagline-1 font-normal text-secondary/60 hover:text-secondary transition-all duration-200 dark:text-accent/60 dark:hover:text-accent {=$nav-item-class}">
                    About Us
                </a>
            </li>
            <li class="py-2.5">
                <a href="/contact-us"
                    class="flex items-center gap-1 px-4 py-2 border border-transparent hover:border-stroke-2 dark:hover:border-stroke-7 rounded-full text-tagline-1 font-normal text-secondary/60 hover:text-secondary transition-all duration-200 dark:text-accent/60 dark:hover:text-accent {=$nav-item-class}">
                    Contact Us
                </a>
            </li>
        </ul>
        </nav>

        <div class="lg:flex hidden items-center justify-center">
        <a href="/contact-us#contactForm"
            class="btn btn-md btn-secondary dark:btn-accent dark:hover:btn-white-dark hover:btn-white">
            <span>Get started</span>
        </a>
        </div>
        <div class="lg:hidden block">
        <button
            class="nav-hamburger flex flex-col gap-[5px] size-12 bg-background-4 dark:bg-background-6 rounded-full items-center justify-center cursor-pointer">
            <span class="sr-only">Menu</span>
            <span class="block w-6 h-0.5 bg-stroke-9 dark:bg-stroke-1"></span>
            <span class="block w-6 h-0.5 bg-stroke-9 dark:bg-stroke-1"></span>
            <span class="block w-6 h-0.5 bg-stroke-9 dark:bg-stroke-1"></span>
        </button>
        </div>
    </div>
    <!-- =========================
    Mobile Menu
    ===========================-->

    <aside
        class="sidebar fixed top-0 right-0 w-full sm:w-1/2 translate-x-full transition-all duration-300 h-screen bg-white dark:bg-background-7 xl:hidden z-[999] scroll-bar">
        <div class="lg:p-9 sm:p-8 p-5 space-y-4">
        <div class="flex items-center justify-between">
            <a href="/">
            <span class="sr-only">Home</span>
            <figure class="max-w-[120px]">
                <img src="{{asset('images/shared/logo.png')}}" alt="Zataar Tech" class="w-full dark:hidden block">
                <img src="{{asset('images/shared/logo.png')}}" alt="Zataar Tech" class="w-full dark:block hidden">
            </figure>
            </a>
            <button
            class="nav-hamburger-close flex flex-col gap-1.5 size-10 bg-background-4 dark:bg-background-9 rounded-full items-center justify-center cursor-pointer relative">
            <span class="sr-only">Close Menu</span>
            <span class="block w-4 h-0.5 bg-stroke-9/60 dark:bg-stroke-1 rotate-45 absolute"></span>
            <span class="block w-4 h-0.5 bg-stroke-9/60 dark:bg-stroke-1 -rotate-45 absolute"></span>
            </button>
        </div>
        <div class="h-[85vh] w-full overflow-y-auto overflow-x-hidden pb-10 scroll-bar">
            <ul>
                <!-- home menu  -->
                <li class="relative space-y-0">
                    <a href="/" class="sub-menu text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left flex items-center justify-between cursor-pointer">
                        <span>Home</span>
                    </a>
                </li>
                <li class="relative space-y-0">
                    <button class="sub-menu text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left flex items-center justify-between cursor-pointer">
                        <span>Services</span>
                        <span class="sub-menu-arrow transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                            <path d="M8 12L12 8L8 4" class="stroke-secondary dark:stroke-accent" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        </span>
                    </button>
                    <div class="hidden ml-3.5 transition-all duration-300 w-full bg-white dark:bg-background-7 max-h-[500px] overflow-y-auto scroll-bar">
                        <ul>
                        <li>
                            <a href="#" class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                            Services 01
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                            Services 02
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                            Services 03
                            </a>
                        </li>
                        </ul>
                    </div>
                </li>
                <li class="relative space-y-0">
                    <a href="/success-stories" class="sub-menu text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left flex items-center justify-between cursor-pointer">
                        <span>Success Stories</span>
                    </a>
                </li>
                <li class="relative space-y-0">
                    <a href="/about-us" class="sub-menu text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left flex items-center justify-between cursor-pointer">
                        <span>About Us</span>
                    </a>
                </li>
                <li class="relative space-y-0">
                    <a href="/contact-us" class="sub-menu text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left flex items-center justify-between cursor-pointer">
                        <span>Contact Us</span>
                    </a>
                </li>

            </ul>
        </div>
        </div>
    </aside>

</header>

<main>
    {{-- @include('site.sessionMsg') --}}
