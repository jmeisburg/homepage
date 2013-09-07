    /*
     * Call functions when dom is ready
     */
     $(document).ready(function() {

      // Toggle Navigation for mobile devices
      $('#mobile_icon').on('click', function(){

        $('header nav').slideToggle();
        $(this).toggleClass('active');
      }); 

      // Scroll to the top
      $("a[href='#top']").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
      });

$("#scroll_down_cont").click(function() {
    $('html, body').animate({
        scrollTop: $("#some-of-my-work").offset().top
    }, 500);
});


      // Thumbnail Hover
      $('.thumbnail li').hoverThumb();

      // Animate Content
      $('#thumbnail li').animateGallery();

    });



/*
* hoverFlow - A Solution to Animation Queue Buildup in jQuery
* Version 1.00
*
* Copyright (c) 2009 Ralf Stoltze, http://www.2meter3.de/code/hoverFlow/
*/
(function( $ ){

	$.fn.hoverFlow = function(type, prop, speed, easing, callback) {
		// only allow hover events
		if ($.inArray(type, ['mouseover', 'mouseenter', 'mouseout', 'mouseleave']) == -1) {
			return this;
		}
	
		// build animation options object from arguments
		// based on internal speed function from jQuery core
		var opt = typeof speed === 'object' ? speed : {
			complete: callback || !callback && easing || $.isFunction(speed) && speed,
			duration: speed,
			easing: callback && easing || easing && !$.isFunction(easing) && easing
		};
		
		// run immediately
		opt.queue = false;
			
		// wrap original callback and add dequeue
		var origCallback = opt.complete;
		opt.complete = function() {
			// execute next function in queue
			$(this).dequeue();
			// execute original callback
			if ($.isFunction(origCallback)) {
				origCallback.call(this);
			}
		};
		
		// keep the chain intact
		return this.each(function() {
			var $this = $(this);
		
			// set flag when mouse is over element
			if (type == 'mouseover' || type == 'mouseenter') {
				$this.data('jQuery.hoverFlow', true);
			} else {
				$this.removeData('jQuery.hoverFlow');
			}
			
			// enqueue function
			$this.queue(function() {				
				// check mouse position at runtime
				var condition = (type == 'mouseover' || type == 'mouseenter') ?
					// read: true if mouse is over element
					$this.data('jQuery.hoverFlow') !== undefined :
					// read: true if mouse is _not_ over element
					$this.data('jQuery.hoverFlow') === undefined;
					
				// only execute animation if condition is met, which is:
				// - only run mouseover animation if mouse _is_ currently over the element
				// - only run mouseout animation if the mouse is currently _not_ over the element
				if(condition) {
					$this.animate(prop, opt);
				// else, clear queue, since there's nothing more to do
				} else {
					$this.queue([]);
				}
			});

		});
	};

})( jQuery );



/* 
* Function to animate image thumbnail arrows on hover
*/
$.fn.hoverThumb = function() { 	
  	
	// only animate for large desktop browsers
  	if($(window).width() >= 1140){

	  	this.mouseenter(function(e){
		
			$(this).find('.r-arrow').hoverFlow(e.type, {opacity:1, right:15}, 500);
			//$(this).hoverFlow(e.type, {opacity:1}, 300).siblings().hoverFlow(e.type, {opacity:0.3}, 300);
			$(this).stop().animate({'opacity':'1'}, 300).siblings().stop().animate({'opacity':'0.4'}, 500);

		}).mouseleave(function(e){

			$(this).find('.r-arrow').hoverFlow(e.type, {opacity:0, right:0}, 500);

		});	 

		// once the mouse leaves the whole thumbs div
		$('#thumbnail').mouseleave(function(e){

			// we reset the thumbs 
			$('#thumbnail li').stop().animate({'opacity':'1'}, 500);

		});	

	}
};	


/*
* project planner radio label functions
*/
$('.radios label').click(function(e){
$('.radios label').removeClass('active');
$(this).addClass('active');
}); 


// force twitter button to re-init, and thus put screen name in: 
// broken due to being hidden initially.
var twitterIFrames = $('iframe.twitter-follow-button');
twitterIFrames.each(function(index,element) {
   if($.browser.webkit) {
      // webkit browsers require some serious shenanigans...
      var $e = $(element);
      var $clone = $e.clone();
      $e.replaceWith($clone);
   } else {
      // other browsers seem happy with this...
      element.setAttribute('src',element.getAttribute('src'));
   }
});