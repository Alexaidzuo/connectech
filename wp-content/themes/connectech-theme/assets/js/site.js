'use strict';

$ = require('jquery');

const Navigation = require('./core/navigation');
const example = require('./site/example');
const Testimonials = require('./site/testimonials');
const Nav = require('./site/nav');
const SmoothAchorScroll = require('./site/smoothAnchorScroll');

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

  /**
   * Initialize Navigation slick slider
   */
  Nav.init();

  /**
   * Initialize Navigation slick slider
   */
   SmoothAchorScroll.init();


});