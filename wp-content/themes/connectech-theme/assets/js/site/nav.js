"use strict";

// const Global = require('./global');

// let	_this;

let _this = module.exports = {


	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		body: $('body'),
        header: $('header.site-header')
    },

    vars: {
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		$(window).scroll(function(){
            if ($(window).scrollTop() > 170){
               $(".site-header").addClass("scroll");
            } else if ($(window).scrollTop() < 170) {
               $(".site-header").removeClass("scroll");
            }
       });
    },

};