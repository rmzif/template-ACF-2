<?php wp_head(); ?>

 


<header class="sticky top-0 bg-white">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="/wordpress" class="-m-1.5 p-1.5">
        <span class="sr-only">Company Name</span>
        <img class="lg:h-8 h-20 w-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/svg/Logo.svg" alt="header-logo">
      </a>
    </div>

    <div class="gap-8 flex flex-1 justify-end items-center">  
      <a href="/wordpress/clients" class="text-xl lg:text-sm relative font-medium text-black before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-left before:scale-x-0 before:bg-green before:transition hover:before:scale-100">
        WORK
      </a>

      <a class="group relative inline-flex items-center overflow-hidden bg-green px-8 py-1 text-black focus:outline-none focus:ring active:bg-black" href="/wordpress/contact">
        <span class="absolute -start-full transition-all group-hover:start-4">
          <svg class="h-5 w-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </span>

        <span class="text-xl lg:text-sm font-medium transition-all group-hover:ms-4">
          CONTACT US
        </span>
      </a>
    </div>
  </nav>
</header>