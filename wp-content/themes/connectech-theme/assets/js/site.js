'use strict';

$ = require('jquery');

const Navigation = require('./core/navigation');
const example = require('./site/example');
const Testimonials = require('./site/testimonials');

jQuery( function(){

  /**
   * Initialize site navigation
   */
  Navigation.init();

  /**
   * Initialize sample module
   */
  example.init();

  /**
   * Initialize Testimonials slick slider
   */
    Testimonials.init();


});