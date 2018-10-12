import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation();

// Contact Form
// closes the panel on click outside
$(document).mouseup(function (e) {
  var container = $('#contact-panel');
  if (!container.is(e.target) // if the target of the click isn't the container...
  && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
      container.removeClass('is-active');
    }
});

require('slick-carousel');


	jQuery(document).ready(function(){
	  jQuery('.slick').slick({
	  	dots: true,
	  	infinite: true,
	  	speed: 700,
	  	slidesToShow: 2,
	  	adaptiveHeight: true,
	  	centerMode: true,
  	  	variableWidth: true,
  	  	autoplay: true

	  });
	});

