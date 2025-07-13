<?php

add_action('rest_api_init', 'testimonialRoutes');

function testimonialRoutes() {
  register_rest_route('/wp/v1/', 'testimonial', array(
    'methods' => 'POST',
    'callback' => 'createTestimonial'
  ));
}

function createTestimonial($data) {
  try {
    wp_insert_post(array(
      'post_type' => 'testimonial',
      'post_status' => 'pending',
      'post_title' => $data['website_title'],
      'meta_input' => array(
        'website_title' => $data['website_title'],
        'website_url' => $data['website_url'],
        'name' => $data['name'],
        'your_testimonial' => $data['your_testimonial'],
        'rating' => $data['rating'],
      )
    ));

    wp_send_json_success([
      'message' => 'Testimonial submitted successfully',
    ]);
  } catch(e) {
    wp_send_json_error(['message' => 'Failed to create testimonial']);
  }
}