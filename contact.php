<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>


<!-- je moet tekst in die bar doen wanneer iemadn iets invult, en je moet een button maken, en je moet de  footer aanpassen, en de margin aanpasse op de teksten -->


<div class="grid grid-cols-6  mt-32 lg:mt-20">
    <div class="ml-12 grid col-span-6 lg:col-span-3">
        <div class="">
            <a class="text-xl lg:text-sm text-grey">- CONTACT</a>
            <h1 class="text-3xl lg:text-base">BRANDS</h1>
            <h1 class="text-3xl lg:text-base ">SERVICES</h1>
        </div>
        <div class="  ">
            profiel?
        </div>
    </div>
    <!-- CONTACT FORM -->
    <div class="grid col-span-6 lg:col-span-3 ">
        <div class="w-11/12 lg:w-3/5 mt-6 mx-auto p-6 ">
            <form action="#" method="POST" class="space-y-12 lg:space-y-6">
                <div>
                    <input type="text" id="name" placeholder="Name" name="name" class="placeholder:text-grey border-2 border-black block w-full p-12 lg:p-2.5 text-sm">
                </div>
                <div>
                    <input type="email" id="email" placeholder="Email" name="email" class="placeholder:text-grey border-2 border-black block w-full p-12 lg:p-2.5 text-sm">
                </div>
                <div>
                    <textarea id="message" placeholder="Your Message" name="message" rows="4" class="placeholder:text-grey border-2 border-black block w-full p-20 lg:p-2.5 text-sm"></textarea>
                </div>
                <div>
                    <button type="submit" class="py-6 lg:py-2 px-24 text-sm font-medium text-black bg-green">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="grid grid-cols-1">
    <div class="grid col-span-1 bg-green">
        
    </div>
</div>
<?php get_footer(); ?>