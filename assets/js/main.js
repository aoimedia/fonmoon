$(document).ready(function() {

  // FitText
  $("#logo").fitText(0.59);

  // LazyLoad
  $(".media img").lazyload({
    effect : "fadeIn"
  });

	// Delay Loading of Images
	$('img').each(function () {
		var src = $(this).attr('data-src');
		if (src != null) { $(this).attr('src', src); }
	});

  // Support for 2 colums layout
  $('#container .article.ext:nth-child(2n+1)').addClass('col2-a');
  $('#container .article.ext:nth-child(2n+2)').addClass('col2-b');

	// Flex Slider
	$(window).load(function() {

    $('.flexslider').flexslider({
      smoothHeight: true,
      itemWidth: 1000,
      slideshow: false,
      controlNav: false,

      start: function(slider) {
        $('body').removeClass('loading');
      }

    });

  });

  // FitVids
  $(".article").fitVids();

});

// Keyboard navigation for navigate between articles
$(document).keyup(function(e) {

  var url = false;

  if (e.which == 37) {
    url = $('.x').attr('href');
  }

  else if (e.which == 39) {
    url = $('body:not(.latest) .y').attr('href');
  }

  else if (e.which == 72) {
    url = '../';
  }

  if (url) {
    window.location = url;
  }

});