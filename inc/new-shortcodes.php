<?php
    function render_testimonial_form_shortcode() {
        ob_start();
        get_template_part('components/testimonial-form');
        return ob_get_clean();
    }
    
    add_shortcode('testimonial_form', 'render_testimonial_form_shortcode');

    function site_title() {
        return get_bloginfo('name');
    }
    add_shortcode('site_title', 'site_title');