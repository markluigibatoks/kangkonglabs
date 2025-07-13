<div class="bg-secondary/70 relative">
    <div class="absolute top-0 left-0 w-full h-full bg-secondary/70 z-10"></div>
    <div class="max-w-[1920px] w-full h-[300px] lg:h-[560px] mx-auto absolute top-0 left-1/2 -translate-x-1/2 -z-10">
        <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('full', array('class' => 'w-full h-full object-cover')); 
            }
        ?>
    </div>
    <div class="wrapper">
        <div class="text-white h-[300px] lg:h-[560px] relative">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10">
                <h2 class="text-2xl md:text-4xl lg:text-6xl font-unbounded mb-5"><?php echo get_the_title()?></h2>
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb('<p id="breadcrumbs">','</p>');
                    }
                ?>
            </div>
        </div>
    </div>
</div>