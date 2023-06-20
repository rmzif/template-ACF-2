<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>


<!--   en je moet de  footer aanpassen, en de profiel maken -->


<div class="grid grid-cols-6  mt-32 lg:mt-20">
    <div class="ml-12 lg:ml-24 grid col-span-6 lg:col-span-3">
        <div class="">
            <a class="text-xl lg:text-sm text-grey ">- CONTACT</a>
            <h1 class="text-3xl lg:text-base h-24 lg:h-16 ">BRANDS</h1>
            <h1 class="text-3xl lg:text-base">SERVICES</h1>
        </div>
        <div class="ml-2 ml-0 flex items-center">
            
            <img class="w-24 h-24" src="http://localhost/wordpress/wp-content/uploads/2023/06/ProfileBanner.png"></img>
            <a class="ml-4 text-sm">Random Name</a>
           
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

 
<?php get_footer(); ?>