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

    wp_enqueue_script('all', get_stylesheet_directory_uri() . '/js/all.js', array('jquery'), null, true );

    wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/css/slick.css', [], null);

    wp_enqueue_style('all', get_stylesheet_directory_uri() . '/css/all.css', [], null);


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


add_shortcode( 'dp_phone', 'show_phone' );
function show_phone() {
    $output = '<a href="tel:+380682181617">+38 (068) 218-16-17</a>';
    return $output;
}

add_shortcode( 'dp_adress', 'show_adress' );
function show_adress() {
    $output = '<p>Zbyszka Godlewskiego 1C/17
    65-552 Zielona Góra</p>';
    return $output;
}

add_shortcode( 'dp_mail', 'show_mail' );
function show_mail() {
    $output = '<p>bud@gmail.com</p>';
    return $output;
}


add_action('ava_after_main_menu', 'show_custom_menu');

function show_custom_menu() {
    echo '<div class="sup-menu">
    <div class="sup-menu-wrap">
  

      <div class="contact">
        <ul class="contact-list">
          <li class="contact-item"><a href="tel:+380682181617" class="contact-link"><i class="icon-phone"></i><span>+38 (068) 218-16-17</span></a></li>
          <li class="contact-item"><a href="mailto:mail-mail@gmail.com" class="contact-link"><i class="icon-envelope"></i><span>mail-mail@gmail.com</span></a></li>
        </ul>
      </div>
  
      <div class="faq">
        <a href="" class="faq-link">faq</a>
      </div>
  
    </div>
  </div>';
}

add_shortcode( 'footer_sub_menu', 'show_footer_sub_menu' );

function show_footer_sub_menu() {
	echo '
  
      <div class="contacts">
        <ul class="contact-list">
          <li class="contact-item"><a href="tel:+380682181617" class="contact-link"><i class="icon-phone"></i><span>+38 (068) 218-16-17</span></a></li>
          <li class="contact-item"><a href="mailto:mail-mail@gmail.com" class="contact-link"><i class="icon-envelope"></i><span>mail-mail@gmail.com</span></a></li>
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



add_shortcode( 'my_oferta', 'show_oferta' );

function show_oferta(){

  echo '<div id="oferta" class="oferta-wrap">
          <ul class="oferta-list">';

    $args = array(
      'post_type' => 'page',
      'post_parent' => 179,
    );
    
    $query = new WP_Query( $args );
    
    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post();
        echo '<li class="oferta-item"><a href="' . get_permalink() . '" class="oferta-link"><i class="icon ' . get_the_ID() . '"></i><span class="oferta-title">' . get_the_title() . '</span></a></li>
            ';
      }
    } else {
      // Постов не найдено
    }

    wp_reset_postdata();

    echo '</ul>
        </div>';

}

