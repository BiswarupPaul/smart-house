
		jQuery(document).ready(function() {
		var owl = jQuery('.owl-blog');
		owl.owlCarousel({
		margin: 0,
		smartSpeed: 500,
		nav: false,
		dots: true,
		autoplay: true,
		autoplayHoverPause: true,
		loop: true,
		autoplayTimeout:1700,
		responsive: {
		0: {items: 1},
		480: {items: 1},
		576: {items: 1},
		768: {items: 2},
		992: {items: 2},
		1200: {items: 3}
		}
		})
		})


// backto-top btn script
		var btn = $('#backto-top');
		$(window).scroll(function() {
		  if ($(window).scrollTop() > 300) {
		    btn.addClass('show');
		  } else {
		    btn.removeClass('show');
		  }
		});

		btn.on('click', function(e) {
		  e.preventDefault();
		  $('html, body').animate({scrollTop:0}, '1000');
		});
	// backto-top btn script end
	// equalheight script start
	 $(function() {
          $('.equalheight').matchHeight();
        });
	// equalheight script end

	// fixd menu
	 window.onscroll = function() {myFunction()};

	    var header = document.getElementById("myHeader");
	    var sticky = header.offsetTop;

	    function myFunction() {
	      if (window.pageYOffset > sticky) {
	        header.classList.add("sticky");
	      } else {
	        header.classList.remove("sticky");
	      }
	    }
		
		
		(function() {

		  var quotes = $(".quotes");
		  var quoteIndex = -1;

		  function showNextQuote() {
			++quoteIndex;
			quotes.eq(quoteIndex % quotes.length)
			  .fadeIn(800)
			  .delay(800)
			  .fadeOut(800, showNextQuote);
		  }

		  showNextQuote();

		})();
		
		
	

	 $(document).ready(function () {
            $('.hover-div').hover(function () {
                $('.hover-div').stop().fadeTo('fast', 0.3);
                $(this).stop().fadeTo('fast', 1);
            }, function () {
                $('.hover-div').stop().fadeTo('fast', 1);
            });
        });
		
		// stellarnav
		jQuery(document).ready(function($) {
		jQuery('.stellarnav').stellarNav({
		theme: 'dark',
		breakpoint: 991,
		position: 'right',
		});
		});
		// stellarnav
		
	
// Select all links with hashes
jQuery('a[href*="#"].hash')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = jQuery(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

// counter //
document.addEventListener("DOMContentLoaded", () => {
 function counter(id, start, end, duration) {
  let obj = document.getElementById(id),
   current = start,
   range = end - start,
   increment = end > start ? 1 : -1,
   step = Math.abs(Math.floor(duration / range)),
   timer = setInterval(() => {
    current += increment;
    obj.textContent = current;
    if (current == end) {
     clearInterval(timer);
    }
   }, step);
 }
 counter("count1", 0, 1500, 4000);
 counter("count2", 0, 855, 1700);
 counter("count3", 0, 15, 1700);
 counter("count4", 0, 10, 1700);
});

// counter //
