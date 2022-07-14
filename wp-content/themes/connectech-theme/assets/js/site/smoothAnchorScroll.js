"use strict";

// const Global = require('./global');

// let	_this;

let _this = module.exports = {


	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		body: $('body')
    },

    vars: {
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {

		$("a").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
              // Prevent default anchor click behavior
            //   event.preventDefault();
              // Store hash
              var hash = this.hash;
              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
             $('html, body').animate({
               scrollTop: $(hash).offset().top
             }, 800, function(){
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
             });
           } // End if
         });

        if (window.location.hash)
        scroll(0,0);
        // takes care of some browsers issue
        setTimeout(function(){scroll(0,0);},1);
        var urlHash = window.location.href.split("#")[1];
        var headerHeight = $('#masthead').outerHeight();
        if (urlHash &&  $('#' + urlHash).length )
            $('html,body').animate({
                scrollTop: $('#' + urlHash).offset().top -  headerHeight
        }, 2000);

    },

};
