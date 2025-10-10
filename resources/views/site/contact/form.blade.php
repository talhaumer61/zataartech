<section class="pt-7 pb-14 md:pb-16 lg:pb-20 xl:pb-[100px]" aria-label="Contact Information and Form">
  <div class="main-container">
    <div class="space-y-[70px]">
      <!-- heading  -->
      <div class="max-w-[680px] mx-auto text-center space-y-3">
        <h2 data-ns-animate="" data-delay="0.2" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">Reach out to our support team for help.</h2>
        <p data-ns-animate="" data-delay="0.3" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
          Whether you have a question, need technical assistance, or just want some guidance, our
          support team is here to help. We're available around the clock to provide quick and
          friendly support.
        </p>
      </div>

      <div class="flex lg:items-start flex-col justify-center items-center gap-10 lg:flex-row lg:gap-8 xl:gap-[70px]">
        <!-- contact info cards  -->
        <div data-ns-animate="" data-delay="0.4" class="flex flex-col gap-8 md:flex-row lg:flex-col" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
          <!-- contact info one  -->
          <div class="bg-secondary dark:bg-background-6 rounded-[20px] p-11 space-y-6 w-full md:max-w-[371px] text-center relative overflow-hidden">
            <!-- bg overlay  -->
            <figure class="absolute select-none pointer-events-none size-[350px] overflow-hidden top-[-187px] left-[174px] -rotate-[78deg]">
              <img src="{{asset('images/gradient/gradient-22.png')}}" alt="Decorative gradient overlay" class="size-full object-cover">
            </figure>
            <figure class="size-10 overflow-hidden mx-auto">
              <img src="{{asset('images/icons/home.svg')}}" alt="Office location icon" class="size-full object-cover">
            </figure>

            <div class="space-y-2.5">
              <p class="text-heading-6 text-accent">Our Address</p>
              <p class="text-accent/60">2464 Royal Ln. Mesa, New Jersey 45463</p>
            </div>
          </div>

          <!-- contact info two  -->
          <div class="card-item bg-secondary dark:bg-background-6 rounded-[20px] p-11 w-full md:max-w-[371px] text-center relative overflow-hidden">
            <!-- bg overlay  -->
            <figure class="absolute size-[350px] select-none pointer-events-none overflow-hidden top-[-206px] left-[-36px] rotate-[62deg]">
              <img src="{{asset('images/gradient/gradient-17.png')}}" alt="Decorative gradient overlay" class="size-full object-cover">
            </figure>

            <div class="space-y-6">
              <figure class="size-10 overflow-hidden mx-auto">
                <img src="{{asset('images/icons/mail-open.svg')}}" alt="Email icon" class="size-full object-cover">
              </figure>

              <div class="space-y-2.5">
                <p class="text-heading-6 text-accent">Email Us</p>
                <p class="text-accent/60">
                  <a href="mailto:hello@nextsaaS.com">hello@nextsaaS.com</a>
                </p>
              </div>
            </div>
          </div>

          <!-- contact info three  -->
          <div class="bg-secondary dark:bg-background-6 rounded-[20px] p-11 w-full md:max-w-[371px] text-center relative overflow-hidden">
            <!-- bg-overlay  -->
            <figure class="size-[450px] top-[-264px] left-[-255px] absolute select-none pointer-events-none">
              <img src="{{asset('images/gradient/gradient-6.png')}}" alt="Decorative gradient overlay">
            </figure>

            <div class="space-y-6">
              <figure class="size-10 overflow-hidden mx-auto">
                <img src="{{asset('images/icons/phone-right.svg')}}" alt="Phone icon" class="size-full object-cover">
              </figure>

              <div class="space-y-2.5">
                <p class="text-heading-6 text-accent">Call Us</p>
                <p class="text-accent/60">
                  <a href="tel:+391035256845933">+391 (0)35 2568 4593</a>
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- contact form  -->
        <div data-ns-animate="" data-delay="0.3" class="max-w-[847px] w-full mx-auto bg-white dark:bg-background-6 rounded-4xl p-6 md:p-8 lg:p-11" style="opacity: 1; filter: blur(0px); translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
          <form action="/" method="POST" class="space-y-8">
            <!-- name and phone number  -->
            <div class="flex items-center flex-col md:flex-row gap-8 justify-between">
              <!--  name -->
              <div class="space-y-2 lg:max-w-[364px] w-full">
                <label for="fullname" class="block text-tagline-2 text-secondary dark:text-accent font-medium">Your name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter your name" required="" autocomplete="name" class="w-full px-[18px] dark:focus-visible:border-stroke-4/20 dark:border-stroke-7 py-3 h-[48px] xl:h-[41px] rounded-full dark:bg-background-6 border border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:outline-none focus:border-secondary placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent placeholder:font-normal font-normal">
              </div>

              <!-- number -->
              <div class="space-y-2 max-w-[364px] w-full">
                <label for="number" class="block text-tagline-2 text-secondary dark:text-accent font-medium">Your number</label>
                <input type="text" id="number" name="number" placeholder="Enter your number" required="" autocomplete="tel" class="w-full px-[18px] dark:focus-visible:border-stroke-4/20 dark:border-stroke-7 py-3 h-[48px] xl:h-[41px] rounded-full dark:bg-background-6 border border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:outline-none focus:border-secondary placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent placeholder:font-normal font-normal">
              </div>
            </div>

            <!-- email  -->
            <div class="space-y-2">
              <label for="email" class="block text-tagline-2 text-secondary dark:text-accent font-medium">Email address</label>
              <input type="email" id="email" name="email" placeholder="Enter your email" required="" autocomplete="email" class="w-full px-[18px] dark:focus-visible:border-stroke-4/20 dark:border-stroke-7 py-3 h-[48px] xl:h-[41px] rounded-full dark:bg-background-6 border border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:outline-none focus:border-secondary placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent placeholder:font-normal font-normal">
            </div>

            <!-- subject  -->
            <div class="space-y-2">
              <label for="subject" class="block text-tagline-2 text-secondary dark:text-accent font-medium">Subject</label>
              <input type="text" id="subject" name="subject" placeholder="Enter your subject" required="" class="w-full px-[18px] dark:focus-visible:border-stroke-4/20 dark:border-stroke-7 py-3 h-[48px] xl:h-[41px] rounded-full dark:bg-background-6 border border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:outline-none focus:border-secondary placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent placeholder:font-normal font-normal">
            </div>

            <!-- message -->
            <div class="space-y-2">
              <label for="message" class="block text-tagline-2 text-secondary dark:text-accent font-medium">Write message</label>
              <textarea id="message" name="message" rows="7" placeholder="Enter your messages" required="" class="w-full px-[18px] py-3 rounded-xl border dark:bg-background-6 dark:border-stroke-7 border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:outline-none focus:border-secondary dark:focus-visible:border-stroke-4/20 placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent placeholder:font-normal font-normal"></textarea>
            </div>

            <!-- terms checkbox -->
            <fieldset class="flex items-center gap-2 mb-4">
              <label for="terms" class="flex items-center gap-x-3">
                <input id="terms" type="checkbox" class="sr-only peer" required="">
                <span class="size-4 rounded-full border border-stroke-3 dark:border-stroke-7 relative after:absolute after:size-2.5 after:bg-primary-500 after:rounded-full after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:opacity-0 peer-checked:after:opacity-100 peer-checked:border-primary-500 cursor-pointer"></span>
              </label>
              <label for="terms" class="text-tagline-3 cursor-pointer text-secondary/60 dark:text-accent/60">
                I agree with the
                <a href="#" class="text-primary-500 underline text-tagline-3">terms and conditions</a>
              </label>
            </fieldset>

            <!-- submit button -->
            <button type="submit" class="btn btn-md btn-secondary w-full hover:btn-primary dark:btn-accent before:content-none first-letter:uppercase">
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>