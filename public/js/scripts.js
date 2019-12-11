(function ($) {
    "use strict";

	// ACCORDIAN
	if(isExists('[data-accordian]')){
		$('[data-accordian]').on('click', function(){

			var $this = $(this),
				accordianBody = $this.data('accordian');

			$(this).find('i').toggleClass('ion-minus').toggleClass('ion-plus');
			$(accordianBody).toggleClass('active');

			return false;
		});
	}

	// SEARCH AREA
	if(isExists('.src-btn')){

		var srcBtn = $('.src-btn');
		var srcIcn = $('.src-icn');
		var closeIcn = $('.close-icn');
		var srcForm = $('.src-form');

		srcBtn.on('click', function(){

			$(srcIcn).toggleClass('active');
			$(closeIcn).toggleClass('active');
			$(srcForm).toggleClass('active');

		});
	}


	// RESIZABLE IMAGES
	if(isExists('.responsive-img-bg')){

		$('.responsive-img-bg .p-item').each(function(){

			var $this = $(this),
				imgSrc = $this.find('img').attr('src');

			$this.css({'background-image': 'url('+imgSrc+')'});
		});
	}


	// ISOTOPE

	$(window).on('load', function(){

		// ISOTOPE PORTFOLIO WITH FILTER
		if(isExists('.p-grid-isotope')){
			$('.p-grid-isotope').isotope({
				// set itemSelector so .grid-sizer is not used in layout
				itemSelector: '.p-item',
				percentPosition: true,
				masonry: {
					columnWidth: '.grid-sizer',

				},
			})

		}

	});

	// DROPDOWN MENU

	var winWidth = $(window).width();
	dropdownMenu(winWidth);

	$(window).on('resize', function(){
		winWidth = $(window).width();
		dropdownMenu(winWidth);

	});
})();
