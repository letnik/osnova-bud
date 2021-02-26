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
    slidesToScroll: 1,
    rows: 2,
    });
});

jQuery(document).ready(function(){
    jQuery('.custom_slider_review_section .custom_slider_wrap').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: 0,
        });
    });

    // dots: true,
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
    

          