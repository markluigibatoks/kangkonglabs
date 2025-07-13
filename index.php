<?php get_header(); ?>

<?php
    $posts_page_id = get_option('page_for_posts');
    if (has_post_thumbnail($posts_page_id)) {
        $src = wp_get_attachment_image_src(get_post_thumbnail_id($posts_page_id), 'large') ;
?>

    <div class="bg-secondary/70 relative">
        <div class="absolute top-0 left-0 w-full h-full bg-secondary/70 z-10"></div>
        <div class="max-w-[1920px] w-full h-[300px] lg:h-[560px] mx-auto absolute top-0 left-1/2 -translate-x-1/2 -z-10">
            <img class="w-full h-full block object-cover" src="<?php echo $src[0]; ?>" />
        </div>
        <div class="wrapper">
            <div class="text-white h-[300px] lg:h-[560px] relative">
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10">
                    <h2 class="text-2xl md:text-4xl lg:text-6xl font-unbounded mb-5"><?php echo the_archive_title()?></h2>
                    <?php
                        if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb('<p id="breadcrumbs">','</p>');
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<div class="relative px-6">
    <div class="wrapper">
        <div class="py-10">
            <div class="lg:mt-20 mt-10 flex flex-wrap sm:gap-5 gap-10 justify-center">
                <?php
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post();

                            $first_img_url = null;
                            $content = get_the_content();
                            $content_no_img = preg_replace('/<img[^>]+src=["\']([^"\']+)["\'][^>]*>/i', '', $content, 1);
                            if (preg_match('/<img[^>]+src=["\']([^"\']+)["\']/i', $content, $matches)) {
                                $first_img_url = $matches[1];
                            }
                ?>
                        
                            <div class="sm:w-[calc(50%-16px)] sm:max-w-[484px]">
                                <?php
                                    if(isset($first_img_url)) {
                                ?>
                                    <div class="w-full h-[300px] md:h-[385px]">
                                        <img class="rounded-[45px] object-cover w-full h-full" src="<?php echo esc_url($first_img_url)?>" alt="group making website plans" />
                                    </div>
                                <?php
                                    }
                                    else {
                                ?>
                                    <div class="flex justify-center items-center w-full h-[385px] bg-secondary rounded-4xl p-6">
                                        <img class="object-contain max-w-[200px] w-full h-full" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="Kangkong Labs Logo">
                                    </div>
                                <?php
                                    }
                                ?>
                                
                                <h3 class="lg:mt-[52px] mt-5 lg:mb-6 font-unbounded font-medium">
                                    <a class="no-underline text-inherit hover:underline" href="<?php the_permalink() ?>"><?php the_title()?></a>
                                </h3>
                                <p><?php echo wp_trim_words($content_no_img, 18)?> <a class="text-secondary font-bold no-underline hover:underline" href="<?php the_permalink()?>">Read More</a></p>
                            </div>
                        
                <?php
                        }
                    } else {
                        echo "No posts found";
                    }
                ?>
            </div>

            <?php the_posts_pagination(); ?>
        </div>
    </div>
</div>

<?php get_footer() ?>