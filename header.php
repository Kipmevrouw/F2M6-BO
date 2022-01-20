<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head() ?>
</head>

<!-- <body <?php body_class(); ?>>
<div class="container">
<?php
    $args = [
        'theme_location' => 'main-menu',
        'container_class' => 'main-menu',
        'menu_id' => 'main-menu',
        'container' => 'nav'
    ];
    wp_nav_menu($args)
    ?> -->
    <body <?php body_class('bg-primary-0'); ?>>
    <div class="sticky top-0 z-40">
        <nav class="bg-primary-200 p-2 lg:max-w-lg lg:mx-auto max-w-full py-3 mx-4 mt-4 lg:mt-0" id="main-menu">
            <div class="flex flex-row">
                <div class="flex-none color-primary-100"><button id="menu-button" class="transition transform hover: motion-reduce:transition-none motion-reduce:transform-none hover:scale-x-125"><i id="menu-icon-open" class="fal fa-grip-lines fa-lg"></i></button></div>
                <div class="flex-grow">
                    <?php
                        
                    ?>
                </div>
                <div class="flex-none color-primary-100"><button class="transition transform hover: motion-reduce:transition-none motion-reduce:transform-none hover:scale-110"><i class="fal fa-search fa-md"></i></button></div>
            </div>
            <div class="h-0 transition-all ease-out duration-1000" id="menu-open">
                <div class="hidden flex flex-row justify-center" id="time-menu">
                    <div class="border rounded-full hover:rounded-none my-4 px-4 py-1 text-sm font-primary-normal color-primary-100">open vandaag 10:00-17:00</div>
                </div>
                <?php wp_nav_menu(array('theme_location' => 'sub-menu', 'menu_class' => 'hidden mx-6 py-4', 'walker' => new CustomMenuWalker_2(), 'items_wrap' => '<nav id="sub-menu-1" class="%2$s">%3$s</nav>')); ?>
                <?php wp_nav_menu(array('theme_location' => 'main-menu', 'menu_class' => 'hidden mx-6 py-2', 'walker' => new CustomMenuWalker_2(), 'items_wrap' => '<nav id="sub-menu-2" class="%2$s">%3$s</nav>')); ?>
                <?php wp_nav_menu(array('theme_location' => 'socials-menu', 'menu_class' => 'hidden flex flex-row justify-center py-8', 'walker' => new CustomMenuSocials(), 'items_wrap' => '<nav id="socials-menu-1" class="%2$s">%3$s</nav>')); ?>
            </div>
        </nav>
        <?php wp_nav_menu(array('theme_location' => 'sub-menu', 'menu_class' => 'flex flex-row pt-1 lg:max-w-lg lg:mx-auto max-w-full mx-4 lg:mt-0 color-primary-0', 'walker' => new CustomMenuWalker(), 'items_wrap' => '<nav id="sub-menu-3" class="%2$s">%3$s</nav>')); ?>
    </div>
</div>