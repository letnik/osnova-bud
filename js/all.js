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


          