import Drawer from "./scripts/Drawer"
import TestimonialForm from "./scripts/TestimonialForm";
import StarRating from "./scripts/StarRating";

document.addEventListener('DOMContentLoaded', function () {
  new Drawer('#drawer', '#drawer-toggle', '#drawer-close')

  const testimonialFormEl = document.querySelector('#testimonial-form');
  if (testimonialFormEl) {
    new TestimonialForm('#testimonial-form');

    new StarRating('#star-rating', "#testimonial-rating-field");
  }
});



