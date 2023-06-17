

<?php

$svgCode = file_get_contents(get_template_directory_uri() . '/svg/logosGrid.svg');

?>

<div class="grid grid-cols-8 mt-16">
    <div class="ml-16 grid col-span-8 lg:col-span-3">
        <a class="text-2xl lg:text-1xl ">- OUR CLIENTS</a>
    </div>
    <div class="mt-12 lg:mt-0 grid col-span-8 lg:col-span-5 mr-16 ml-16">
        <div>
        <?php echo $svgCode; ?>
    </div>
</div>
 