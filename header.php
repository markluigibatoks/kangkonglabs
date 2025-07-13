<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>

    <?php
        $header_classlist = "relative bg-secondary";

        if(!is_front_page() && !is_single()) {
            $header_classlist = "absolute top-0 left-0 w-full bg-none z-20";
        }
    ?>

    <header class="px-6 <?php echo $header_classlist; ?>">
        <div class="wrapper">
            <div class="py-6 flex gap-10 justify-between items-center">
                <a href="/">
                    <div class="max-w-[197px] w-full">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="Kangkong Labs Logo">
                    </div>
                </a>

                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => 'nav',
                        'container_class' => 'hidden lg:block',
                        'menu_class' => 'primary_nav flex gap-11',
                        'menu' => 'primary'
                    ));
                ?>

                <button type="button" id="drawer-toggle" class="lg:hidden text-white border-none bg-none cursor-pointer text-3xl" aria-label="Open navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>

        <div id="drawer" class="translate-y-full px-6 fixed top-0 left-0 w-screen h-screen bg-secondary/90 text-white transition-transform ease-in z-50 backdrop-blur-lg">
            <div class="wrapper">
                <div class="py-5">
                    <div class="flex justify-between gap-4">
                        <a href="/">
                            <div class="max-w-[197px] w-full">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="Kangkong Labs Logo">
                            </div>
                        </a>
                        <button type="button" id="drawer-close" class="bg-none border-none text-white text-3xl cursor-pointer" aria-label="Close navigation">
                            <i class="fa-solid fa-close"></i>
                        </button>
                    </div>

                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => 'nav',
                            'container_class' => 'mt-10',
                            'menu_class' => 'text-3xl',
                        ));
                    ?>
                </div>
            </div>
        </div>
</header>