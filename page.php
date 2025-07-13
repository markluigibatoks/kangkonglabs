<?php
    get_header();
    get_template_part('components/page-banner');
?>

<div class="relative px-6">
    <div class="wrapper">
        <div class="py-5">
            <?php
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</div>

<?php get_footer() ?>