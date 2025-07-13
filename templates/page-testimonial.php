<?php
/*
 * Template Name: Testimonials Page
 */
    get_header();
    get_template_part('components/page-banner');

    $testimonial_query = new WP_Query(array(
        'post_type' => 'testimonial',
        'posts_per_page' => -1,
        'post_status' => 'publish'
    ))
?>

<div class="relative px-6">
    <div class="wrapper">
        <div class="py-5">
            <h2 class="text-2xl md:text-4xl lg:text-6xl font-unbounded mb-10">Loved by many worldwide</h2>
            
            <div class="w-full" data-masonry='{ "itemSelector": ".grid-item", "stagger": 30, "gutter": 12, "percentPosition": true, "columnWidth": ".grid-sizer" }'>
                <div class="grid-sizer sm:w-[calc(50%-10px)] md:w-[calc(33.333%-20px)] lg:w-[calc(25%-30px)]"></div>
                
                <?php
                    if($testimonial_query->have_posts()) {
                        while($testimonial_query->have_posts()) {
                            $testimonial_query->the_post();

                            $website_title = get_field('website_title');
                            $website_url = get_field('website_url');
                            $name = get_field('name');
                            $your_testimonial = get_field('your_testimonial');
                            $rating = get_field('rating');
                ?>
                <div class="grid-item w-full sm:w-[calc(50%-10px)] md:w-[calc(33.333%-20px)] lg:w-[calc(25%-30px)] shadow-lg px-4 py-6 mb-3">
                    <div class="flex gap-1 text-xl mb-5">
                        <?php
                            $value = (int) $rating;

                            for($i = 1; $i <= 5; $i ++) {
                                if($i <= $value) {
                        ?>
                                    <i class="fa-solid fa-star text-tertiary"></i>
                        <?php
                                }
                                else {
                        ?>
                                    <i class="fa-solid fa-star"></i>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <h3 class="text-lg font-bold"><?php echo esc_html($website_title)?></h3>
                    <a href="#" target="_blank" class="mb-5 block font-black underline text-black hover:no-underline break-all"><?php echo esc_html($website_url)?></a>
                    <blockquote>
                        <p class="text-2xl font-semibold">"<?php echo esc_html($your_testimonial)?>"</p>
                    </blockquote>
                </div>

                <?php
                        }
                    }

                    wp_reset_postdata();
                    get_template_part('components/dummy-testimonials')
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>