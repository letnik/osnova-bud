jQuery(document).ready(function() {
  let inner_product =  jQuery('.inner_product');
      inner_product_a = jQuery('.inner_product .product-attributes-wrap').height();
      inner_product_h = inner_product_a + 20;
      inner_product.find('.product-box-shasow').css( "height", "calc(100% + " + inner_product_h +  "px)");  
      return;
});

jQuery(document).ready(function(){
    jQuery('.slick_galery .geodir-gallery').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        rows: 2,
        arrows: true,
        nextArrow: '<button class="slick-next slick-arrow"></button>',
        prevArrow: '<button class="slick-prev slick-arrow"></button>',
        responsive: [
          {
            breakpoint: 990,
            settings: {
              rows: 2,
              arrows: true,
              slidesToScroll: 2,
              slidesToShow: 2
            }
          },
          {
            breakpoint: 768,
            settings: {
              rows: 1,
              arrows: true,
              slidesToScroll: 1,
              slidesToShow: 1
            }
          }
        ]
      });
  });

  jQuery(document).ready(function(){
    jQuery('.custom_slider_section .image_slider_wrap').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        rows: 2,
        arrows: true,
        nextArrow: '<button class="slick-next slick-arrow"></button>',
        prevArrow: '<button class="slick-prev slick-arrow"></button>',
        responsive: [
        {
          breakpoint: 990,
          settings: {
            rows: 2,
            arrows: true,
            slidesToScroll: 2,
            slidesToShow: 2
          }
        },
        {
          breakpoint: 768,
          settings: {
            rows: 1,
            arrows: true,
            slidesToScroll: 1,
            slidesToShow: 1
          }
        }
      ]

    });
});

jQuery(document).ready(function(){
    jQuery('.custom_slider_review_section .custom_slider_wrap').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        adaptiveHeight: true,
        nextArrow: '<button class="slick-next slick-arrow"></button>',
        prevArrow: '<button class="slick-prev slick-arrow"></button>'
    });
    // $(".custom_slider_review_section .custom_slider_wrap").on('afterChange', function(event, slick, currentSlide){
    //     $("#counter").text(currentSlide + 1);
    // });


//Номер слайда
    var slider 		 = jQuery('.custom_slider_review_section .custom_slider_wrap');
        total        = slider.slick("getSlick").slideCount;
        currentSlide = jQuery('.custom_slider_review_section .custom_slider_wrap').slick('slickCurrentSlide');
        slide        = currentSlide + 1;
    if ( total > 1 ) {
        jQuery(".sl-count__current").text('' + slide);
        jQuery('.sl-count__total').text( '' + total);
    }
    jQuery(".custom_slider_review_section .custom_slider_wrap").on('afterChange', function(event, slick, currentSlide, nextSlide){
        var currentSl = currentSlide + 1;
        jQuery(".sl-count__current").text('' + currentSl);
    });


});



//     customPaging: function (slider, i) {
//         return slider.slickCurrentSlide + '/' + (i + 1);
//     }

// $('..custom_slider_review_section .custom_slider_wrap').slick({
//     dots: true,
//     customPaging: function (slider, i) {
//         return slider.slickCurrentSlide + '/' + (i + 1);
//     }
// });

// customPaging: function (slider, i) {
//     return slider.slickCurrentSlide + '/' + (i + 1);
// }
    

          
jQuery(document).ready(function () {

	// jQuery('.custome_map_grid #gd_map_canvas_directory_cat li input[type=checkbox]').each(function () {
	// 	if (jQuery(this).prop('checked')) {
	// 		jQuery(this).parent().addClass( "checked" );

	// 	} else {
	// 		jQuery(this).parent().removeClass( "checked" );

	// 	}
	// });

  jQuery(".custome_map_grid #gd_map_canvas_directory_cat li input[type=checkbox]").change(function () {
    jQuery(this).parent().toggleClass('unchecked');
	});
	
});


jQuery(document).ready(function(){

  var fancyboxWrap 	 = jQuery('.custom_slider_wrap .slick-slide .avia-image-overlay-wrap');
      fancyboxSrc    = jQuery(this).find('img').attr('src');
      fancyboxReviews = jQuery('.custom-reviews .avia-image-overlay-wrap');


      jQuery(fancyboxWrap).find('img').wrap('<a href="" data-fancybox="gallery" data-caption="My caption"></a>');	
      jQuery(fancyboxReviews).find('img').wrap('<a href="" data-fancybox="gallery" data-caption="My caption"></a>');	

  // jQuery(fancyboxWrap).find('img').attr('src').parent()
  jQuery('[data-fancybox="gallery"]').fancybox({
    // Options will go here
  });


});


// jQuery(document).ready(function(){

//   jQuery(window).scroll(function() {
//     winPos = jQuery(window).scrollTop();
//     if (winPos >= 400) {
//       jQuery('#header').addClass('nav-scroll');
//     }
//     else {
//       jQuery('#header').removeClass('nav-scroll');
//     }
//   });

// });




// jQuery(document).ready(function( $ ) {
//   if(document.documentElement.clientWidth >= 989) {
//     var prevScrollpos = window.pageYOffset;
//     window.onscroll = function() {
//       var currentScrollPos = window.pageYOffset;
//       if (prevScrollpos > currentScrollPos) {
//         document.getElementById("header").style.top = "0";
//       } else {
//         document.getElementById("header").style.top = "-200px";
//       }
//       prevScrollpos = currentScrollPos;
//     }
//   }
// });

jQuery(document).ready(function( $ ) {
  if(document.documentElement.clientWidth <= 989) {

    jQuery( "#header_main .av-burger-menu-main" ).click(function(){
      jQuery( "#header_main .btn-wrap" ).toggleClass('active');
      jQuery( "#header_main .btn-wrap" ).fadeToggle();
    });

  }
});

jQuery(document).ready(function(){

  jQuery(window).scroll(function() {
    winPos = jQuery(window).scrollTop();
    if (winPos >= 400) {
      jQuery('#scroll-top-link').fadeIn();
    }
    else {
      jQuery('#scroll-top-link').fadeOut();
    }
  });

});
