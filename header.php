<?php wp_head(); ?>

<header class="bg-white">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img class="h-8 w-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/svg/Logo.svg" alt="header-logo">
      </a>
    </div>

    <div class="gap-8 flex flex-1 justify-end">
      <a href="#" class="text-small leading-6 text-black">CONTACT</a>
      <a href="#" class="text-small leading-6 text-black">WORK</a>
      <a href="#" class="text-small lg:text-small leading-6 text-black">
        <span class="bg-green w-4 h-9" aria-hidden="true">
          GET IN TOUCH
        </span>

      </a>
    </div>
  </nav>
</header>