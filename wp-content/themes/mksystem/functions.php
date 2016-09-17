<?php




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

function mksystem_categories_list_page(){
  $categories_html = '';
  $category_products = mksystem_product_categories('catalog');
  if(count($category_products) > 0){
    foreach ($category_products as $category) {
      
      $thumb_url = ($category['thumb_url'] == '') ? get_template_directory_child().'/inc/img/categorias/default_400x400.jpg' : $category['thumb_url'];

      $categories_html .= '<div class="col-md-3 col-sm-3 col-xs-6 text-center">';
      $categories_html .= '<a href="'.$category['term_link'].'" title="'.$category['name'].'" class="thumbnail">';
      $categories_html .= '<img src="'.$thumb_url.'">';
      $categories_html .= '</a>';
      $categories_html .= '<h4>'.$category['name'].'</h4>';
      $categories_html .= '</div>';

      if(count($category['childs']) > 0){
        foreach ($category['childs'] as $subcategory) {

          $thumb_url = ($subcategory['thumb_url'] == '') ? get_template_directory_child().'/inc/img/categorias/default_400x400.jpg' : $subcategory['thumb_url'];

          $categories_html .= '<div class="col-md-3 col-sm-3 col-xs-6 text-center">';
          $categories_html .= '<a href="'.$subcategory['term_link'].'" title="'.$subcategory['name'].'" class="thumbnail">';
          $categories_html .= '<img src="'.$thumb_url.'">';
          $categories_html .= '</a>';
          $categories_html .= '<h4>'.$subcategory['name'].'</h4>';
          $categories_html .= '</div>';
        }//end foreach
      }//end if

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
