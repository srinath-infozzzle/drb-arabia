//import jquery = require("jquery");
import jQuery from 'jquery';

(function ($) {
	"use strict";

	var $slimScrolls = $('.slimscroll');

	// Stick Sidebar

	if ($(window).width() > 767) {
		if ($('.theiaStickySidebar').length > 0) {
			$('.theiaStickySidebar').theiaStickySidebar({
				// Settings
				additionalMarginTop: 30
			});
		}
	}

	var $wrapper = $('.main-wrapper');
	
	// Sidebar

	if ($(window).width() <= 991) {
		var Sidemenu = function () {
			this.$menuItem = $('.main-nav a');
		};

		function init() {
			var $this = Sidemenu;
			$('.main-nav a').on('click', function (e) {
				if ($(this).parent().hasClass('has-submenu')) {
					e.preventDefault();
				}
				if (!$(this).hasClass('submenu')) {
					$('ul', $(this).parents('ul:first')).slideUp(350);
					$('a', $(this).parents('ul:first')).removeClass('submenu');
					$(this).next('ul').slideDown(350);
					$(this).addClass('submenu');
				} else if ($(this).hasClass('submenu')) {
					$(this).removeClass('submenu');
					$(this).next('ul').slideUp(350);
				}
			});
		}

		// Sidebar Initiate
		init();
	}

	// Sticky Header
	
	$(window).scroll(function () {
		var sticky = $('.header'),
			scroll = $(window).scrollTop();
		if (scroll >= 50) sticky.addClass('fixed');
		else sticky.removeClass('fixed');
	});

	// Mobile menu sidebar overlay
	
	$('.header-fixed').append('<div class="sidebar-overlay"></div>');
	$(document).on('click', '#mobile_btn', function () {
		$('main-wrapper').toggleClass('slide-nav');
		$('.sidebar-overlay').toggleClass('opened');
		$('html').addClass('menu-opened');
		return false;
	});


	$(document).on('click', '.sidebar-overlay', function () {
		$('html').removeClass('menu-opened');
		$(this).removeClass('opened');
		$('main-wrapper').removeClass('slide-nav');
		$('#task_window').removeClass('opened');
	});

	$(document).on('click', '#menu_close', function () {
		$('html').removeClass('menu-opened');
		$('.sidebar-overlay').removeClass('opened');
		$('main-wrapper').removeClass('slide-nav');
	});
	
	// Small Sidebar

	$(document).on('click', '#toggle_btn', function () {
		if ($('body').hasClass('mini-sidebar')) {
			$('body').removeClass('mini-sidebar');
			$('.subdrop + ul').slideDown();
		} else {
			$('body').addClass('mini-sidebar');
			$('.subdrop + ul').slideUp();
		}
		return false;
	});

	$(document).on('mouseover', function (e) {
		e.stopPropagation();
		if ($('body').hasClass('mini-sidebar') && $('#toggle_btn').is(':visible')) {
			var targ = $(e.target).closest('.sidebar').length;
			if (targ) {
				$('body').addClass('expand-menu');
				$('.subdrop + ul').slideDown();
			} else {
				$('body').removeClass('expand-menu');
				$('.subdrop + ul').slideUp();
			}
			return false;
		}
	});

	// AOS 

	if ($('.main-wrapper .aos').length > 0) {
		AOS.init({
			duration: 1200,
			once: true,
		});
	}

	// Mobile menu sidebar overlay

	$('body').append('<div class="sidebar-overlay"></div>');
	$(document).on('click', '#mobile_btns', function () {
		$wrapper.toggleClass('slide-nav');
		$('.sidebar-overlay').toggleClass('opened');
		$('html').toggleClass('menu-opened');
		return false;
	});

	// Sidebar

	var Sidemenu = function () {
		this.$menuItem = $('#sidebar-menu a');
	};

	function initi() {
		var $this = Sidemenu;
		$('#sidebar-menu a').on('click', function (e) {
			if ($(this).parent().hasClass('submenu')) {
				e.preventDefault();
			}
			if (!$(this).hasClass('subdrop')) {
				$('ul', $(this).parents('ul:first')).slideUp(350);
				$('a', $(this).parents('ul:first')).removeClass('subdrop');
				$(this).next('ul').slideDown(350);
				$(this).addClass('subdrop');
			} else if ($(this).hasClass('subdrop')) {
				$(this).removeClass('subdrop');
				$(this).next('ul').slideUp(350);
			}
		});
		$('#sidebar-menu ul li.submenu a.active').parents('li:last').children('a:first').addClass('active').trigger('click');
	}

	// Sidebar Initiate
	initi();	

	 // Sidebar Slimscroll

	 if($slimScrolls.length > 0) {
		$slimScrolls.slimScroll({
			height: 'auto',
			width: '100%',
			position: 'right',
			size: '7px',
			color: '#ccc',
			wheelStep: 10,
			touchScrollStep: 100
		});
	}

	// Cursor

	function mim_tm_cursor() {

		var myCursor = jQuery('.mouse-cursor');

		if (myCursor.length) {
			if ($("body")) {

				const e = document.querySelector(".cursor-inner"),
					t = document.querySelector(".cursor-outer");
				let n, i = 0,
					o = !1;
				window.onmousemove = function (s) {
					o || (t.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)"), e.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)", n = s.clientY, i = s.clientX
				}, $("body").on("mouseenter", "a, .cursor-pointer", function () {
					e.classList.add("cursor-hover"), t.classList.add("cursor-hover")
				}), $("body").on("mouseleave", "a, .cursor-pointer", function () {
					$(this).is("a") && $(this).closest(".cursor-pointer").length || (e.classList.remove("cursor-hover"), t.classList.remove("cursor-hover"))
				}), e.style.visibility = "visible", t.style.visibility = "visible"
			}
		}
	};
	mim_tm_cursor()

	$(window).scroll(function() { 
        var scroll = $(window).scrollTop();
        if (scroll >= 500) {
         $(".back-to-top-icon").addClass("show");
        } else {
         $(".back-to-top-icon").removeClass("show");
        }
     });
    
    // Loader
    
    setTimeout(function () {
        $('.loader-main');
        setTimeout(function () {
            $(".loader-main").hide();
        }, 1000);
    }, 1000);

	// Select 2

	if($('.select').length > 0) {
		$('.select').select2({
			minimumResultsForSearch: -1,
			width: '100%'
		});
	}

	// Banner Slider

	if($('.banner-slider').length > 0) {
		$('.banner-slider').slick({
			dots: false,
			autoplay:true,
			infinite: true,
			prevArrow: false,
			nextArrow: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			fade: true,
			speed: 1000,
			cssEase: 'linear'
		});
	}


	if($('.leaf-slider').length > 0) {
		$('.leaf-slider').slick({
			dots: false,
			autoplay:true,
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 1
		});
	}	


	if($('.box-slider').length > 0) {
		$('.box-slider').slick({
			dots: false,
			autoplay:true,
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 1
		});
	}		
	
	
	// Date Range Picker
	
	if($('.bookingrange').length > 0) {
		var start = moment().subtract(6, 'days');
		var end = moment();

		function booking_range(start, end) {
			$('.bookingrange span').html(start.format('M/D/YYYY') + ' - ' + end.format('M/D/YYYY'));
		}

		$('.bookingrange').daterangepicker({
			startDate: start,
			endDate: end,
			ranges: {
				'Today': [moment(), moment()],
				'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
				'Last 7 Days': [moment().subtract(6, 'days'), moment()],
				'Last 30 Days': [moment().subtract(29, 'days'), moment()],
				'This Month': [moment().startOf('month'), moment().endOf('month')],
				'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
			}
		}, booking_range);

		booking_range(start, end);
	}
	
	
	
    /* --------------------------------------------------
    * image gallery
    * --------------------------------------------------*/
    $('.image-gallery').each( function(){
        var selector = $(this),
            popup   = selector.find('.gallery-icon > a');
        popup.append('<a href="#" class="overlay"><i class="ot-flaticon-add"></i></a>');
        selector.lightGallery({
            selector: popup,
            share: false,
            pager: false,
        });
    });

    $('.single-product .item ').each( function(){
        var selector = $(this),
            imgPopup = selector.find('> a');
        selector.lightGallery({
            selector: imgPopup,
            share: false,
            showThumbByDefault: false,
            pager: false,
        });
    });	
 /* --------------------------------------------------
    * filter projects
    * --------------------------------------------------*/

$('.project-filter-wrapper').each( function(){


	var $container = $(this).find('.projects-grid'); 
	$container.isotope({ 
		itemSelector : '.project-item', 
		animationEngine : 'css',
		masonry: {
			columnWidth: '.grid-sizer'
		},
		layoutMode: 'fitRows',
	});

	var $optionSets  = $(this).find('.project_filters'),
		$optionLinks = $optionSets.find('a');

	$optionLinks.on('click', function(){
		var $this = $(this);

		if ( $this.hasClass('selected') ) {
			return false;
		}
		var $optionSet = $this.parents('.project_filters');
			$optionSet.find('.selected').removeClass('selected');
			$this.addClass('selected');

		var selector = $(this).attr('data-filter');
			$container.isotope({ 
				filter: selector 
			});
		return false;
	});
	
	/* popup gallery */
	if( $container.hasClass('img-popup') ){

		alert("this is called");

		$('.img-popup').lightGallery({
			selector: '.projects-thumbnail',
			share: false,
			pager: false,
			thumbnail: false
		});
	}
	/* count filters */
	updateFilter();
})(jQuery);

	
	
	
	
	
	
	
	
	
	/* sethu
	
	const navLink = document.querySelectorAll(".nav-link");

  navLink.forEach(n => n.addEventListener("click", closeMenu));

  function closeMenu() {
      hamburger.classList.remove("active");
      navMenu.classList.remove("responsive");
	  
	  
	  
  }*/
	 jQuery('.stellarnav').stellarNav({
      theme: 'plain',
      closingDelay: 250,
      // mobileMode: false,
    });

});

	

