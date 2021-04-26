<?php
//style

//Set builder mode to debug
function builder_set_debug()
{
    return 'debug';
}

add_action('avia_builder_mode', 'builder_set_debug');

add_filter('show_admin_bar', '__return_false');

function sl_add_scripts()
{
    //Custom JS

    wp_enqueue_script('slick', get_stylesheet_directory_uri() . '/js/slick.js', array('jquery'), null, true );

    wp_enqueue_script('fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js', array('jquery'), null, true );

    wp_enqueue_script('all', get_stylesheet_directory_uri() . '/js/all.js', array('jquery'), null, true );

    wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/css/slick.css', [], null);

    wp_enqueue_style('all', get_stylesheet_directory_uri() . '/css/all.css', [], null);

    wp_enqueue_style('fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css', [], null);
    //Run custom JS
    wp_enqueue_script('all');

    wp_enqueue_style('all');
}
add_action('wp_enqueue_scripts', 'sl_add_scripts', 20);


function sl_tel($tel) {
    return preg_replace('/[^0-9+]/', '', $tel);
}

// // add_shortcode logo
// add_shortcode('avs_avia_logo', 'callback_avia_logo');
// function callback_avia_logo() {
//     $logo = avia_get_option('logo');
//     $logo = !empty( $logo ) ? $logo : AVIA_BASE_URL.'images/layout/logo.svg';
//     return  avia_logo($logo, '', 'strong', true);
// }




add_action('ava_after_main_menu', 'show_custom_menu');

function show_custom_menu() {

  $phone_1 = get_field('ob_phone_1', 'options');
  $mail = get_field('ob_email', 'options');
  
    echo '<div class="sup-menu">
    <div class="sup-menu-wrap">
  

      <div class="contact">
        <ul class="contact-list">
          <li class="contact-item"><a href="tel:'.sl_tel($phone_1).'" class="contact-link"><i class="icon-phone"></i><span>'.$phone_1.'</span></a></li>
          <li class="contact-item"><a href="mailto:'.$mail.'" class="contact-link"><i class="icon-envelope"></i><span>'.$mail.'</span></a></li>
        </ul>
      </div>
  
      <div class="faq">
        <a href="" class="faq-link">faq</a>
      </div>
  
    </div>
  </div>
  
  <div class="btn-wrap">
    <div class="btn_wrap_inner">
      <button class="btn btn-solid spu-open-419"><span class="tt-uppercase mr-10">Wycena</span><span class="avia_button_icon avia_button_icon_right" aria-hidden="true" data-av_icon="" data-av_iconfont="fontello"></span></button>
    </div>

  </div>';
}

add_shortcode( 'footer_sub_menu', 'show_footer_sub_menu' );

function show_footer_sub_menu() {

  $phone_1 = get_field('ob_phone_1', 'options');
  $mail = get_field('ob_email', 'options');

	echo '
  
      <div class="contacts">
        <ul class="contact-list">
          <li class="contact-item"><a href="tel:'.sl_tel($phone_1).'" class="contact-link"><i class="icon-phone"></i><span>'.$phone_1.'</span></a></li>
          <li class="contact-item"><a href="mailto:'.$mail.'" class="contact-link"><i class="icon-envelope"></i><span>'.$mail.'</span></a></li>
        </ul>
      </div>
      ';
}


// поправити !!!! все готове)))

// // add_shortcode logo
// add_shortcode('avs_avia_logo', 'callback_avia_logo');
// function callback_avia_logo() {
//     $logo = avia_get_option('logo');
//     $logo = !empty( $logo ) ? $logo : AVIA_BASE_URL.'images/layout/logo.png';
//     return  avia_logo($logo, '', 'strong', true);
// }



function second_logo() {
  $my_url = get_home_url(); 
  $logo = '<div class="logo footer-logo second-logo"><a href="' . $my_url . '">' ;
  $logo .= '<img src="' . $my_url . '/wp-content/themes/enfold/images/layout/logo.png"/>';
  $logo .= '</a></div>';
  return $logo;
  }
add_shortcode('dp_footer_fogo', 'second_logo');


// <!-- футер лого!!!!! -->


// [dp_footer_fogo]

// //set builder mode to debug
// add_action('avia_builder_mode', "builder_set_debug");
// function builder_set_debug()
// {
//   return "debug";
// }

// if(isset($avia_config['use_child_theme_functions_only'])) return;


// add_shortcode( 'my_oferta', 'show_oferta' );

// function show_oferta(){

//   wp_reset_postdata();

//   echo '<div id="oferta" class="oferta-wrap">
//           <ul class="oferta-list">';

//     $args = array(
//       'post_type' => 'page',
//       'post_parent' => 179,
//     );
    
//     $query = new WP_Query( $args );
    
//     if ( $query->have_posts() ) {
//       while ( $query->have_posts() ) {
//         $query->the_post();
//         echo '<li class="oferta-item"><a href="' . get_permalink() . '" class="oferta-link"><i class="icon icon-'. get_the_ID() . '"></i><span class="oferta-title">' . get_the_title() . '</span></a></li>
//             ';
//       }
//     } else {
//       // Постов не найдено
//     }

//     wp_reset_postdata();

//     echo '</ul>
//         </div>';

// }

//Adding ACF settings page
if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
      'page_title' => 'Site Data',
      'menu_title' => 'Site Data',
      'menu_slug' => 'site-data',
  ));
}




add_shortcode( 'ob_phone_1', 'show_phone_1' );
function show_phone_1() {
  $phone_1 = get_field('ob_phone_1', 'options');
  $output = '<a href="tel:'.sl_tel($phone_1).'">'.$phone_1.'</a>';
    return $output;
}

add_shortcode( 'ob_phone_2', 'show_phone_2' );
function show_phone_2() {
    $phone_2 = get_field('ob_phone_2', 'options');
    $output = '<a href="tel:'.sl_tel($phone_2).'">'.$phone_2.'</a>';
    return $output;
}

add_shortcode( 'ob_adress', 'show_adress' );
function show_adress() {
    $adress = get_field('ob_adress', 'options');
    $output = '<p>'.$adress.'</p>';
    return $output;
}

add_shortcode( 'ob_email', 'show_mail' );
function show_mail() {
    $mail = get_field('ob_email', 'options');
    $output = '<a href="mailto:'.$mail.'">'.$mail.'</a>';
    return $output;
}


// add new size
add_image_size( 'awesome-size', 680, 300, true );

// make the new size available in the media library (and image element etc.)
add_filter( 'image_size_names_choose', 'my_custom_sizes' );

function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'awesome-size' => __( 'Awesome Size' ),
    ) );
}