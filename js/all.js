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
      });
  });

jQuery(document).ready(function(){
jQuery('.custom_slider_section .image_slider_wrap').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    rows: 2,

    });
});

jQuery(document).ready(function(){
    jQuery('.custom_slider_review_section .custom_slider_wrap').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        nextArrow: '<button class="slick-prev slick-arrow"></button>',
        prevArrow: '<button class="slick-next slick-arrow"></button>'
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



    // customPaging: function (slider, i) {
    //     return slider.slickCurrentSlide + '/' + (i + 1);
    // }

// $('..custom_slider_review_section .custom_slider_wrap').slick({
//     dots: true,
//     customPaging: function (slider, i) {
//         return slider.slickCurrentSlide + '/' + (i + 1);
//     }
// });

// customPaging: function (slider, i) {
//     return slider.slickCurrentSlide + '/' + (i + 1);
// }
    

          