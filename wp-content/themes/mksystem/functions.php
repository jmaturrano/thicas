<?php


//ERamirez

function get_template_directory_child(){
  $directory_template = get_template_directory_uri();
  $directory_child = str_replace('dazzling', '', $directory_template).'mksystem';
  return $directory_child;
}

/**
 * Mk system slider
 */
function mksystem_featured_slider() {
    // if ( is_front_page() && of_get_option('dazzling_slider_checkbox') == 1 ) {
      echo '<div class="flexslider">';
        echo '<ul class="slides">';

          $count = of_get_option('dazzling_slide_number');
          $slidecat = of_get_option('dazzling_slide_categories');

            if ( $count && $slidecat ) {
            $query = new WP_Query( array( 'cat' => $slidecat, 'posts_per_page' => $count ) );
//            print_r($query);
            if ($query->have_posts()) :
              while ($query->have_posts()) : $query->the_post();

              echo '<li>';
                if ( has_post_thumbnail() ) { // Check if the post has a featured image assigned to it.
                  the_post_thumbnail();
                }

                echo '<div class="flex-caption">';
                  echo '<a href="'. get_permalink() .'">';
                    if ( get_the_title() != '' ) echo '<h2 class="entry-title">'. get_the_title().'</h2>';
                    if ( get_the_excerpt() != '' ) echo '<div class="excerpt">' . get_the_excerpt() .'</div>';
                  echo '</a>';
                echo '</div>';

                endwhile;
              endif;

            } else {
                echo "Slider is not properly configured";
            }

            echo '</li>';
        echo '</ul>';
      echo ' </div>';
    // }
}

/**
 * Call for action button & text area suscribir
 */
function mksystem_call_for_action() {
  // if ( is_front_page() && of_get_option('w2f_cfa_text')!=''){
    echo '<div class="cfa">';
      echo '<div class="container">';
        echo '<div class="col-md-3">';
          echo '</div>';
            echo '<div class="col-md-6">';
              echo do_shortcode('[ssm_form id="40"]');
              echo '</div>';
            echo '<div class="col-md-3">';
          echo '</div>';
      echo '</div>';
    echo '</div>';
  // }
}

function mksystem_section_categories_bloque1(){
  $categories_html = '';
  $category_products = mksystem_product_categories('catalog');
  if(count($category_products) > 0){
    $i=0;
    foreach ($category_products as $category) {
      if ( $i<2){
        $thumb_url = ($category['thumb_url'] == '') ? get_template_directory_child().'/inc/img/categorias/default_400x400.jpg' : $category['thumb_url'];

        if($i == 0){
          $class= 'col-md-8 col-sm-6 col-xs-12';
        }if ($i == 1) {
          $class= 'col-md-4';
        }else{
          $class= 'col-md-8';
        }
        $categories_html .= '<div class="'.$class.' text-center">';
        $categories_html .= '<a href="'.$category['term_link'].'" title="'.$category['name'].'" class="thumbnail">';
        $categories_html .= '<img src="'.$thumb_url.'">';

        $categories_html .= '<div class="categorie-content">';
        $categories_html .= '<h4>'.$category['name'].'</h4>';
        $categories_html .= '<span>COMPRAR AHORA</span>';
        $categories_html .= '</div>';

        $categories_html .= '</a>';
        //$categories_html .= '<h4>'.$category['name'].'</h4>';
        $categories_html .= '</div>';
      }//end if
      $i++;
    }//end foreach
  }//end if

  echo $categories_html;
}

function mksystem_section_categories_bloque2(){
  $categories_html = '';
  $category_products = mksystem_product_categories('catalog');
  if(count($category_products) > 0){
    $i=0;
    foreach ($category_products as $category) {
      if ( 2<=$i && $i<3){
        $thumb_url = ($category['thumb_url'] == '') ? get_template_directory_child().'/inc/img/categorias/default_400x400.jpg' : $category['thumb_url'];

        if($i=3){
          $class= 'col-md-6 col-sm-6 col-xs-12';
        }else{
          $class= 'col-md-6';
        }

        $categories_html .= '<div class="'.$class.' text-center">';
        $categories_html .= '<a href="'.$category['term_link'].'" title="'.$category['name'].'" class="thumbnail">';
        $categories_html .= '<img src="'.$thumb_url.'">';

        $categories_html .= '<div class="categorie-content">';
        $categories_html .= '<h4>'.$category['name'].'</h4>';
        $categories_html .= '<span>COMPRAR AHORA</span>';
        $categories_html .= '</div>';

        $categories_html .= '</a>';
        //$categories_html .= '<h4>'.$category['name'].'</h4>';
        $categories_html .= '</div>';
      }//end if
      $i++;
    }//end foreach
  }//end if

  echo $categories_html;
}
function mksystem_section_categories_bloque3(){
  $categories_html = '';
  $category_products = mksystem_product_categories('catalog');
  if(count($category_products) > 0){
    $i=0;
    foreach ($category_products as $category) {
      if ( $i>2){
        $thumb_url = ($category['thumb_url'] == '') ? get_template_directory_child().'/inc/img/categorias/default_400x400.jpg' : $category['thumb_url'];

        if($i == 0){
          $class= 'col-md-4 col-sm-6 col-xs-12';
        }if ($i ==1 ){
          $class= 'col-md-4';
        }else{
          $class= 'col-md-4';
        }
        $categories_html .= '<div class="'.$class.' text-center">';
        $categories_html .= '<a href="'.$category['term_link'].'" title="'.$category['name'].'" class="thumbnail">';
        $categories_html .= '<img src="'.$thumb_url.'">';

        //$categories_html .= '<div class="categorie-content">';
        //$categories_html .= '<h4>'.$category['name'].'</h4>';
        //$categories_html .= '<span>COMPRAR AHORA</span>';
        //$categories_html .= '</div>';

        $categories_html .= '</a>';
        $categories_html .= '<div class="categorie-name">';
        $categories_html .= '<h4>'.$category['name'].'</h4>';
        $categories_html .= '</div>';
        $categories_html .= '</div>';
      }//end if
      $i++;
    }//end foreach
  }//end if

  echo $categories_html;
}
/**
 * Get all categories
 */
function mksystem_product_categories($thumb = ''){

  // shop_thumbnail
  // shop_catalog
  // shop_single

  $taxonomy     = 'product_cat';
  $orderby      = 'name';  
  $show_count   = 1;      // 1 for yes, 0 for no
  $pad_counts   = 1;      // 1 for yes, 0 for no
  $hierarchical = 1;      // 1 for yes, 0 for no  
  $title        = '';  
  $empty        = 0;

  $args = array(
         'taxonomy'     => $taxonomy,
         'child_of'     => 0,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
         'hide_empty'   => $empty
  );
  $all_categories = get_categories( $args );
  $category_products = array();
  $subcategory = array();
  foreach ($all_categories as $cat) {
    if($cat->category_parent == 0) {

      $cat_thumb_id = get_woocommerce_term_meta($cat->term_id, 'thumbnail_id', true);
      if($thumb === ''){
        $cat_thumb_url = wp_get_attachment_thumb_url($cat_thumb_id);
      }else{
        $cat_thumb_url_ = wp_get_attachment_image_src($cat_thumb_id, $thumb);
        $cat_thumb_url = $cat_thumb_url_[0];
      }

      $term_link = get_term_link($cat, 'product_cat');

      $category_products[$cat->term_id]['id'] = $cat->term_id;
      $category_products[$cat->term_id]['name'] = $cat->name;
      $category_products[$cat->term_id]['slug'] = $cat->slug;
      $category_products[$cat->term_id]['taxonomy'] = $cat->taxonomy;
      $category_products[$cat->term_id]['count'] = $cat->count;
      $category_products[$cat->term_id]['description'] = $cat->description;

      $category_products[$cat->term_id]['thumb_url'] = $cat_thumb_url;
      $category_products[$cat->term_id]['term_link'] = $term_link;

      $category_products[$cat->term_id]['childs'] = array();

      $category_id = $cat->term_id;
      $args2 = array(
              'taxonomy'     => $taxonomy,
              'child_of'     => 0,
              'parent'       => $category_id,
              'orderby'      => $orderby,
              'show_count'   => $show_count,
              'pad_counts'   => $pad_counts,
              'hierarchical' => $hierarchical,
              'title_li'     => $title,
              'hide_empty'   => $empty
      );
      $subcategoryx = get_categories( $args2 );
      $subcategory = array_merge($subcategory, $subcategoryx);

    }//end if
  }//end foreach

  if(count($subcategory) > 0){
    $i = 0;
    foreach ($subcategory as $subcat) {

      $cat_thumb_id = get_woocommerce_term_meta($subcat->term_id, 'thumbnail_id', true);
      if($thumb === ''){
        $cat_thumb_url = wp_get_attachment_thumb_url($cat_thumb_id);
      }else{
        $cat_thumb_url_ = wp_get_attachment_image_src($cat_thumb_id, $thumb);
        $cat_thumb_url = $cat_thumb_url_[0];
      }
      $term_link = get_term_link($subcat, 'product_cat');

      $category_products[$subcat->parent]['childs'][$i]['id'] = $subcat->term_id;
      $category_products[$subcat->parent]['childs'][$i]['name'] = $subcat->name;
      $category_products[$subcat->parent]['childs'][$i]['slug'] = $subcat->slug;
      $category_products[$subcat->parent]['childs'][$i]['taxonomy'] = $subcat->taxonomy;
      $category_products[$subcat->parent]['childs'][$i]['count'] = $subcat->count;
      $category_products[$subcat->parent]['childs'][$i]['description'] = $subcat->description;

      $category_products[$subcat->parent]['childs'][$i]['thumb_url'] = $cat_thumb_url;
      $category_products[$subcat->parent]['childs'][$i]['term_link'] = $term_link;
      $i++;
    }//end foreach
  }//end if
  
  return $category_products;
}

/**
 * header menu (should you choose to use one)
 */
function mksystem_header_menu() {
  // display the WordPress Custom Menu if available
  wp_nav_menu(array(
    'menu'              => 'primary',
    'theme_location'    => 'primary',
    'depth'             => 2,
    'container'         => 'div',
    'container_class'   => 'col-md-12 text-center',
    'menu_class'        => 'nav navbar-nav menu-mksystem',
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new wp_bootstrap_navwalker()
  ));
} /* end header menu */

/**
 * footer menu
 */
function mksystem_footer_menu() {
  wp_nav_menu(array(
    'container'       => '',                              // remove nav container
    'container_class' => 'footer-links clearfix',   // class of container (should you choose to use it)
    'menu'            => __( 'Footer Links', 'dazzling' ),   // nav name
    'menu_class'      => 'nav footer-nav clearfix',      // adding custom nav class
    'theme_location'  => 'footer-links',             // where it's located in the theme
    'before'          => '',                                 // before the menu
    'after'           => '',                                  // after the menu
    'link_before'     => '',                            // before each link
    'link_after'      => '',                             // after each link
    'depth'           => 0,                                   // limit the depth of the nav
    'fallback_cb'     => 'dazzling_footer_links_fallback'  // fallback function
  ));
} /* end header menu */

function mksystem_secondary_menu_footer() {
  // display the WordPress Custom Menu if available
  wp_nav_menu(array(
    'menu'              => 'secondary',
    'theme_location'    => 'secondary',
    'menu_class'        => 'nav footer-nav clearfix',
    'depth'             => 2,
    'container'         => '',
    'container_class'   => ''
  ));
} /* end header menu */
/**
 * Get all categories for footer
 */
function mksystem_categories_list_footer(){
  $categories_html = '';
  $category_products = mksystem_product_categories();
  if(count($category_products) > 0){
    $items = 0;
    $categories_html .= '<ul class="nav footer-nav clearfix">';
    foreach ($category_products as $category) {
      if($items <= 9){
        $categories_html .= '<li class="menu-item"><a href="'.$category['term_link'].'">'.$category['name'].'</a></li>';
      }//end if
      $items++;
    }//end foreach
    $categories_html .= '</ul>';
  }//end if

  echo $categories_html;
}



function mksystem_social_links(){
  $social_html    = '';
  $facebook       = 'http://facebook.com';
  $twitter        = 'http://twitter.com';
  $instagram      = 'http://instagram.com';
  $youtube        = 'http://youtube.com';
  $vimeo          = 'http://vimeo.com';
  $linkedin       = 'http://linkedin.com';


  if ($facebook != '') {
    $social_html  .= '<a target="_blank" class="" href="'.$facebook.'"><img src="'.get_template_directory_child().'/inc/img/social/facebook.jpg'.'"></a>';
  }
  if ($twitter != ''){
    $social_html  .= '<a target="_blank" class="" href="'.$twitter.'""><img src="'.get_template_directory_child().'/inc/img/social/twitter.jpg'.'"></a>';
  }
  if ($instagram != '') {
    $social_html  .= '<a target="_blank" class="" href="'.$instagram.'"><img src="'.get_template_directory_child().'/inc/img/social/instagram.jpg'.'"></a>';
  }
  if ($youtube != '') {
    $social_html  .= '<a target="_blank" class="" href="'.$youtube.'"><img src="'.get_template_directory_child().'/inc/img/social/youtube.jpg'.'"></a>';
  }
  if ($vimeo != '') {
    $social_html  .= '<a target="_blank" class="" href="'.$vimeo.'"><img src="'.get_template_directory_child().'/inc/img/social/vimeo.jpg'.'"></a>';
  }
  if ($linkedin) {
    $social_html  .= '<a target="_blank" class="" href="'.$linkedin.'"><img src="'.get_template_directory_child().'/inc/img/social/linkedin.jpg'.'"></a>';
  }
  echo $social_html;
}