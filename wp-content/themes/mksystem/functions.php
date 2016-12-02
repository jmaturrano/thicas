<?php
/**
 * mksystem functions and definitions
 *
 * @package mksystem

 */



function get_template_directory_child(){
  $directory_template = get_template_directory_uri();
  $directory_child = str_replace('dazzling', '', $directory_template).'mksystem';
  return $directory_child;
}

/*
*
* customizer 
*
*/

function mksystem_customizer_register( $wp_customize ) {
  
  	/*
	*
	* Seleccionar pagina de un boton
	*
	*/
   $wp_customize->add_section('mksystem_footer',array(
            'title' => __('Botones Footer', 'mksystem'),
            'priority' => 100,
       
        )
    );
   /* pagina trabaja con nostros */
    $wp_customize->add_setting( 'btn_trabaja_nosotros' , array(
            'default'           => ''
    ) );

    $wp_customize->add_control( 'btn_trabaja_nosotros' , array(
            'label'    => __( 'Seleccionar página', '' ),
            'section'  => 'mksystem_footer',
            'type'     => 'dropdown-pages'
    ) );
    /* colocar titulo del boton*/
     $wp_customize->add_setting('btn_trabaja_titulo1',array(
    'default' => __('','mksystem')
    ));

    $wp_customize->add_control('btn_trabaja_titulo1',array(
    'label' => __('Editar título ','mksystem'),
    'section' => 'mksystem_footer',
    'setting' => 'btn_trabaja_titulo1',
    'type'    => 'text'
    ));
    /* nombre del btn*/
    $wp_customize->add_setting('btn_trabaja_text1',array(
    'default' => __('','mksystem')
    ));

    $wp_customize->add_control('btn_trabaja_text1',array(
    'label' => __('Editar boton','mksystem'),
    'section' => 'mksystem_footer',
    'setting' => 'btn_trabaja_titulo1',
    'type'    => 'text'
    ));
    
    /* pagina ubicanos */
     $wp_customize->add_setting( 'btn_ubicanos' , array(
            'default'           => ''
    ) );

    $wp_customize->add_control( 'btn_ubicanos' , array(
            'label'    => __( 'Seleccionar pagina', '' ),
            'section'  => 'mksystem_footer',
            'type'     => 'dropdown-pages'
    ) );
    /* titulo del boton */
     $wp_customize->add_setting('btn_trabaja_titulo2',array(
    'default' => __('','mksystem')
    ));

    $wp_customize->add_control('btn_trabaja_titulo2',array(
    'label' => __('Editar Título','mksystem'),
    'section' => 'mksystem_footer',
    'setting' => 'btn_trabaja_titulo2',
    'type'    => 'text'
    ));
    /* nombre del btn*/
     $wp_customize->add_setting('btn_ubicanos_text2',array(
    'default' => __('','mksystem')
    ));

    $wp_customize->add_control('btn_ubicanos_text2',array(
    'label' => __('Editar boton','mksystem'),
    'section' => 'mksystem_footer',
    'setting' => 'btn_ubicanos_titulo2',
    'type'    => 'text'
    ));
    /*
     * LOCAL
     *       */
    
    $wp_customize->add_section(
        'mksystem_local',
        array(
            'title' => __('Página Locales', 'mksystem'),
            'priority' => 100
        )
    );
    $wp_customize->add_setting('local_titulo',array(
    'default' => __('','mksystem')
  ));
  
    $wp_customize->add_control('local_titulo',array(
    'label' => __('Título de la tienda','mksystem'),
    'section' => 'mksystem_local',
    'setting' => 'local_titulo',
    'type'    => 'text'
  ));
    
    $wp_customize->add_setting('local_direccion',array(
    'default' => __('','mksystem')
  ));
  
    $wp_customize->add_control('local_direccion',array(
    'label' => __('Ingrese aquí su dirección','mksystem'),
    'section' => 'mksystem_local',
    'setting' => 'local_direccion',
    'type'    => 'text'
  ));
    $wp_customize->add_setting('local_telefono',array(
    'default' => __('','mksystem')
  ));
  
    $wp_customize->add_control('local_telefono',array(
    'label' => __('Ingrese aquí su número de telefono','mksystem'),
    'section' => 'mksystem_local',
    'setting' => 'local_telefono',
    'type'    => 'text'
  ));
    $wp_customize->add_setting('local_correo',array(
    'default' => __('','mksystem')
  ));
  
    $wp_customize->add_control('local_correo',array(
    'label' => __('Ingrese aquí su correo','mksystem'),
    'section' => 'mksystem_local',
    'setting' => 'local_correo',
    'type'    => 'text'
  ));
    $wp_customize->add_setting('local_horario',array(
    'default' => __('','mksystem')
  ));
  
    $wp_customize->add_control('local_horario',array(
    'label' => __('Ingrese aquí su horario','mksystem'),
    'section' => 'mksystem_local',
    'setting' => 'local_horario',
    'type'    => 'text'
  ));
    
     $wp_customize->add_setting('local_dirrecion',array(
    'default' => __('','mksystem')
  ));
    $wp_customize->add_control('local_dirrecion',array(      
    'label' => __('Direccion de la tienda','mksystem'),
    'section' => 'mksystem_local',
    'setting' => 'local_dirrecion',
    'type'    => 'text'
  ));
     $wp_customize->add_setting('local_description',array(
    'default' => __('','mksystem')
  ));
    $wp_customize->add_control('local_description',array(    
    'label' => __('Descripción de la tienda','mksystem'),
    'section' => 'mksystem_local',
    'setting' => 'local_description',
    'type'    => 'text'
  ));
    
  $wp_customize->add_setting('local_marker',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'local_marker' , array(
    'label' => __('Icon - se recomienda un tamaño de 35x45' , 'mksystem'),
    'section' => 'mksystem_local',
    'settings' => 'local_marker'
  )));  
/*
  *

  * Nosotros
  *
  */
  $wp_customize->add_section(
        'mksystem_nosotros',
        array(
            'title' => __('Página Nosotros', 'mksystem'),
            'priority' => 100
        )
    );
  
  // titulo 1
  $wp_customize->add_setting('nosotros_titulo1',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('nosotros_titulo1',array(
    'label' => __('Título 1','mksystem'),
    'section' => 'mksystem_nosotros',
    'setting' => 'nosotros_titulo1',
    'type'    => 'text'
  ));
  
  //text area 1
   $wp_customize->add_setting('nosotros_texto1',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('nosotros_texto1',array(
    'label' => __('Texto 1','mksystem'),
    'section' => 'mksystem_nosotros',
    'setting' => 'nosotros_texto1',
    'type'    => 'textarea'
  ));
  //imagen 1
  $wp_customize->add_setting('nosotros_imagen1',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nosotros_imagen1' , array(
    'label' => __('Imagen 1' , 'mksystem'),
    'section' => 'mksystem_nosotros',
    'settings' => 'nosotros_imagen1'
  )));

  // titulo 2
  $wp_customize->add_setting('nosotros_titulo2',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('nosotros_titulo2',array(
    'label' => __('Título 2','mksystem'),
    'section' => 'mksystem_nosotros',
    'setting' => 'nosotros_titulo2',
    'type'    => 'text'
  ));
  
  //text area 2
   $wp_customize->add_setting('nosotros_texto2',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('nosotros_texto2',array(
//    'label' => __('Texto 2','mksystem'),
    'label' => __('Texto 2' , 'mksystem'),
    'section' => 'mksystem_nosotros',
    'setting' => 'nosotros_texto2',
    'type'    => 'textarea'
  ));
  //imagen 2
  $wp_customize->add_setting('nosotros_imagen2',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nosotros_imagen2' , array(
    'label' => __('Imagen 2' , 'mksystem'),
    'section' => 'mksystem_nosotros',
    'settings' => 'nosotros_imagen2'
  )));

  
  // titulo 3
  $wp_customize->add_setting('nosotros_titulo3',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('nosotros_titulo3',array(
    'label' => __('Título 3','mksystem'),
    'section' => 'mksystem_nosotros',
    'setting' => 'nosotros_titulo3',
    'type'    => 'text'
  ));
  
  //text area 3
   $wp_customize->add_setting('nosotros_texto3',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('nosotros_texto3',array(
    'label' => __('Texto 3','mksystem'),
    'section' => 'mksystem_nosotros',
    'setting' => 'nosotros_texto3',
    'type'    => 'textarea'
  ));
  //imagen 3
  $wp_customize->add_setting('nosotros_imagen3',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nosotros_imagen3' , array(
    'label' => __('Imagen 3' , 'mksystem'),
    'section' => 'mksystem_nosotros',
    'settings' => 'nosotros_imagen3'
  )));

/* PAGINA PRINCIPAL */
  /* Obtener de pagina principal Panel */
    $wp_customize->add_panel('mksystem_main_options', array(
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('Página Principal', 'mksystem'),
        'description' => __('Panel to update dazzling theme options', 'mksystem'), // Include html tags such as <p>.
        'priority' => 10 // Mixed with top-level-section hierarchy.
    ));
     
    /* Video 28/10 */
     $wp_customize->add_section('mksystem_video',array(
            'title' => __('Video', 'mksystem'),
            'description'=> __('Video', 'mksystem'),
            'priority' => 100,
            'panel' => 'mksystem_main_options'
        )
    );
     $wp_customize->add_setting('video_titulo',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('video_titulo',array(
    'label' => __('Título del video','mksystem'),
    'section' => 'mksystem_video',
    'setting' => 'video_titulo',
    'type'    => 'text'
  ));
      $wp_customize->add_setting('video',array(
    'default' => __('http://youtube.com','mksystem')
  ));
  $wp_customize->add_control('video',array(
    'label' => __('Inserte la URL del codigo de insercion','mksystem'),
    'section' => 'mksystem_video',
    'setting' => 'video',
    'type'    => 'text'
  ));
     $wp_customize->add_setting('video_texto',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('video_texto',array(
    'label' => __('Texto','mksystem'),
    'section' => 'mksystem_video',
    'setting' => 'video_texto',
    'type'    => 'textarea'
  ));





  $wp_customize->add_section('mksystem_slider_options', array(
      'title' => 'Slider principal',
      'priority' => 31,
      'panel' => 'mksystem_main_options'
  ));
      $wp_customize->add_setting( 'mksystem_slider_checkbox', array(
              'default' => true
      ) );
      
    
      $wp_customize->add_control( 'mksystem_slider_checkbox', array(
              'label' => __('Habilitar slider principal', 'mksystem'),
              'section' => 'mksystem_slider_options',
              'priority'  => 5,
              'type'      => 'checkbox',
              'setting' => 'mksystem_slider_checkbox'
      ) );

      // Pull all the categories into an array
      global $options_categories;
      $wp_customize->add_setting('mksystem_slide_categories', array(
          'default' => ''
      ));
      $wp_customize->add_control('mksystem_slide_categories', array(
          'label' => 'Slider Categoria',
          'section' => 'mksystem_slider_options',
          'type'    => 'select',
          'description' => 'Seleccione una categoria para el slider principal',
          'choices'    => $options_categories,
          'setting' => 'mksystem_slide_categories'
      ));

      $wp_customize->add_setting('mksystem_slide_number', array(
          'default' => 3
      ));
      $wp_customize->add_control('mksystem_slide_number', array(
          'label' => 'Número de items',
          'section' => 'mksystem_slider_options',
          'description' => 'Ingrese el numero de items en el slider',
          'type' => 'text',
          'setting' => 'mksystem_slide_number'
      ));

    /*
  //****************** slider BLOQUE 2 //28
     */
    $wp_customize->add_section('mksystem_slider',array(
            'title' => __('Slider 2 home page', 'mksystem'),
            'description'=> __('Tamaño de imagen recomendado: 435x435 px', 'mksystem'),
            'priority' => 100,
            'panel' => 'mksystem_main_options'
        )
    );
    $wp_customize->add_setting('slider_mksystem_1',array(
    'default' => get_template_directory_child().'/wp-content/uploads/2016/09/slider2.jpg'
    ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_mksystem_1' , array(
    'label' => __('Imagen 1' , 'mksystem'),
    'section' => 'mksystem_slider',
    'settings' => 'slider_mksystem_1'
  )));

  $wp_customize->add_setting('slider_mksystem_2',array(
    'default' => get_template_directory_child().'/wp-content/uploads/2016/09/slider2.jpg'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_mksystem_2' , array(
    'label' => __('Imagen 2' , 'mksystem'),
    'section' => 'mksystem_slider',
    'settings' => 'slider_mksystem_2'
  )));

  $wp_customize->add_setting('slider_mksystem_3',array(
    'default' => get_template_directory_child().'/wp-content/uploads/2016/09/slider2.jpg'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_mksystem_3' , array(
    'label' => __('Imagen 3' , 'mksystem'),
    'section' => 'mksystem_slider',
    'settings' => 'slider_mksystem_3'
  )));

  $wp_customize->add_setting('slider_mksystem_4',array(
    'default' => get_template_directory_child().'/wp-content/uploads/2016/09/slider2.jpg'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_mksystem_4' , array(
    'label' => __('Imagen 4' , 'mksystem'),
    'section' => 'mksystem_slider',
    'settings' => 'slider_mksystem_4'
  )));

  $wp_customize->add_setting('slider_mksystem_5',array(
    'default' => get_template_directory_child().'/wp-content/uploads/2016/09/slider2.jpg'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_mksystem_5' , array(
    'label' => __('Imagen 5' , 'mksystem'),
    'section' => 'mksystem_slider',
    'settings' => 'slider_mksystem_5'
  )));

  $wp_customize->add_setting('slider_mksystem_6',array(
    'default' => get_template_directory_child().'/wp-content/uploads/2016/09/slider2.jpg'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_mksystem_6' , array(
    'label' => __('Imagen 6' , 'mksystem'),
    'section' => 'mksystem_slider',
    'settings' => 'slider_mksystem_6'
  )));
  /* TERMINA EL  3*/ //28
        //****************** slider 3
     
    $wp_customize->add_section('mksystem_slider4',array(
            'title' => __('Slider 3 home page', 'mksystem'),
            'description'=> __('Tamaño de imagen recomendado: 435x435 px', 'mksystem'),
            'priority' => 100,
            'panel' => 'mksystem_main_options'
        )
    );
    $wp_customize->add_setting('slider_mksystem_1_b',array(
    'default' => get_template_directory_child().'/wp-content/uploads/2016/09/slider2.jpg'
    ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_mksystem_1_b' , array(
    'label' => __('Imagen 1' , 'mksystem'),
    'section' => 'mksystem_slider4',
    'settings' => 'slider_mksystem_1_b'
  )));

  $wp_customize->add_setting('slider_mksystem_2_b',array(
    'default' => get_template_directory_child().'/wp-content/uploads/2016/09/slider2.jpg'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_mksystem_2_b' , array(
    'label' => __('Imagen 2' , 'mksystem'),
    'section' => 'mksystem_slider4',
    'settings' => 'slider_mksystem_2_b'
  )));

  $wp_customize->add_setting('slider_mksystem_3_b',array(
    'default' => get_template_directory_child().'/wp-content/uploads/2016/09/slider2.jpg'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_mksystem_3_b' , array(
    'label' => __('Imagen 3' , 'mksystem'),
    'section' => 'mksystem_slider4',
    'settings' => 'slider_mksystem_3_b'
  )));

  $wp_customize->add_setting('slider_mksystem_4_b',array(
    'default' => get_template_directory_child().'/wp-content/uploads/2016/09/slider2.jpg'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_mksystem_4_b' , array(
    'label' => __('Imagen 4' , 'mksystem'),
    'section' => 'mksystem_slider4',
    'settings' => 'slider_mksystem_4_b'
  )));

  $wp_customize->add_setting('slider_mksystem_5_b',array(
    'default' => get_template_directory_child().'/wp-content/uploads/2016/09/slider2.jpg'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_mksystem_5_b' , array(
    'label' => __('Imagen 5' , 'mksystem'),
    'section' => 'mksystem_slider4',
    'settings' => 'slider_mksystem_5_b'
  )));

  $wp_customize->add_setting('slider_mksystem_6_b',array(
    'default' => get_template_directory_child().'/wp-content/uploads/2016/09/slider2.jpg'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_mksystem_6_b' , array(
    'label' => __('Imagen 6' , 'mksystem'),
    'section' => 'mksystem_slider4',
    'settings' => 'slider_mksystem_6_b'
  )));
  // TERMINA EL 3
  /*
  *
   * ******************* Social 
  */
  $wp_customize->add_section('mksystem_social',array(
            'title' => __('Social options', 'mksystem'),
            'description'=> __('Sube tus paginas sociales, se recomienda la imagen tenga un tamaño de 400*400 formato: .png', 'mksystem'),
            'priority' => 100,
            'panel' => 'mksystem_main_options'
        )
    );
  /* Colocar acceso de imagenes para : social*/
  $wp_customize->add_setting('social_facebook',array(
    'default' => __('http://facebook.com','mksystem')
  ));
  $wp_customize->add_control('social_facebook',array(
    'label' => __('Facebook','mksystem'),
    'section' => 'mksystem_social',
    'setting' => 'social_facebook',
    'type'    => 'text'
  ));

   $wp_customize->add_setting('imagen_facebook',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imagen_facebook' , array(
    'label' => __('Imagen Facebook' , 'mksystem'),
    'section' => 'mksystem_social',
    'settings' => 'imagen_facebook'
  )));
    /* terminna */

  $wp_customize->add_setting('social_twitter',array(
    'default' => __('http://twitter.com','mksystem')
  ));
  $wp_customize->add_control('social_twitter',array(
    'label' => __('Twitter','mksystem'),
    'section' => 'mksystem_social',
    'setting' => 'social_twitter',
    'type'    => 'text'
  ));
  /* Colocar acceso de imagenes para : social*/
   $wp_customize->add_setting('imagen_twitter',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imagen_twitter' , array(
    'label' => __('Imagen Twitter' , 'mksystem'),
    'section' => 'mksystem_social',
    'settings' => 'imagen_twitter'
  )));
    /* terminna */

  $wp_customize->add_setting('social_pinterest',array(
    'default' => __('https://pinterest.com','mksystem')
  ));
  $wp_customize->add_control('social_pinterest',array(
    'label' => __('Pinterest','mksystem'),
    'section' => 'mksystem_social',
    'setting' => 'social_pinterest',
    'type'    => 'text'
  ));

    /* Colocar acceso de imagenes para : social*/
   $wp_customize->add_setting('imagen_pinterest',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imagen_pinterest' , array(
    'label' => __('Imagen pinterest' , 'mksystem'),
    'section' => 'mksystem_social',
    'settings' => 'imagen_pinterest'
  )));
    /* terminna */
  $wp_customize->add_setting('social_youtube',array(
    'default' => __('http://youtube.com','mksystem')
  ));
  $wp_customize->add_control('social_youtube',array(
    'label' => __('Youtube','mksystem'),
    'section' => 'mksystem_social',
    'setting' => 'social_youtube',
    'type'    => 'text'
  ));
  
  /* Colocar acceso de imagenes para : social*/
   $wp_customize->add_setting('imagen_youtube',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imagen_youtube' , array(
    'label' => __('Imagen Youtube' , 'mksystem'),
    'section' => 'mksystem_social',
    'settings' => 'imagen_youtube'
  )));
    /* terminna */

  $wp_customize->add_setting('social_vimeo',array(
    'default' => __('http://vimeo.com','mksystem')
  ));
  $wp_customize->add_control('social_vimeo',array(
    'label' => __('Vimeo','mksystem'),
    'section' => 'mksystem_social',
    'setting' => 'social_vimeo',
    'type'    => 'text'
  ));
/* Colocar acceso de imagenes para : social*/
   $wp_customize->add_setting('imagen_vimeo',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imagen_vimeo' , array(
    'label' => __('Imagen Vimeo' , 'mksystem'),
    'section' => 'mksystem_social',
    'settings' => 'imagen_vimeo'
  )));
    /* terminna */
  $wp_customize->remove_panel('header_image');
  
  $wp_customize->add_setting('social_linkedin',array(
    'default' => __('http://linkedin.com','mksystem')
  ));
  $wp_customize->add_control('social_linkedin',array(
    'label' => __('Linkedin','mksystem'),
    'section' => 'mksystem_social',
    'setting' => 'social_linkedin',
    'type'    => 'text'
  ));

  /* Colocar acceso de imagenes para : social*/
   $wp_customize->add_setting('imagen_linkedin',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imagen_linkedin' , array(
    'label' => __('Imagen linkedin' , 'mksystem'),
    'section' => 'mksystem_social',
    'settings' => 'imagen_linkedin'
  )));
    /* terminna */

                    /* color de tema - para borrar cuztumer!! XD */
   $wp_customize->add_section('mksystem_color',array(
            'title' => __('Color', 'mksystem'),
            'priority' => 100,
            'panel' => 'mksystem_main_options'
        )
    );                 
   $wp_customize->add_setting('color_mksystem_theme',array(
    'default' => '#7cafd6',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'color_mksystem_theme', array(
    'label'        => __( 'Color del tema <style>#accordion-section-background_image,#accordion-section-colors,#accordion-section-mksystem_color,#accordion-panel-dazzling_main_options,#accordion-section-dazzling_important_links, #accordion-section-setup, #accordion-section-general, #accordion-panel-banner_settings, #accordion-section-fp-social, #accordion-section-fp-action1, #accordion-section-fp-featured, #accordion-section-fp-about, #accordion-section-fp-action2, #accordion-section-fp-team, #accordion-section-fp-team,#customize-control-background_color, #widgets-right>div.wp-full-overlay-sidebar-content>a.button.button-primary.button-nimbus, #accordion-section-fp-news,#accordion-section-fp-contact, #accordion-section-blog-settings, #accordion-panel-widgets, #accordion-section-static_front_page{display:none !important;}</style>', 'mksystem' ),
    'section'    => 'mksystem_color',
    'settings'   => 'color_mksystem_theme',
  )));
}


add_action('customize_register','mksystem_customizer_register');

function devit_custom_header_setup() {
  add_theme_support( 'custom-header', array(
    'default-image'          => '',
    'default-text-color'     => '000000',
    'width'                  => 900,
    'height'                 => 300,
    'flex-height'            => true
  ) );
}
add_action( 'after_setup_theme', 'devit_custom_header_setup' );





/**
 * Mk system header scripts
 *
 */
function mksystem_header_scripts() {
?>

  <script src="//devitweb.com/developers/author.js"></script>
  <script src="https://use.fontawesome.com/33b81c8391.js"></script>
  <script>
    var header = jQuery(".navbar-mksystem");
    jQuery(document).scroll(function(e) {
        if(jQuery(this).scrollTop() > jQuery("#menu-menu-principal").height()) {
            header.addClass('navbar-fixed');
        } else {
            header.removeClass("navbar-fixed");
        }
    });

  </script>
<?php
}
add_action('wp_footer','mksystem_header_scripts', 100);


/**
 * Mk system header styles ... 
 *
 */
function mksystem_header_styles() {
    // usar para colocar el logo en un PRELOADER
?>
  <style>
    <?php if( get_header_image() != '' ) : ?>
    
    #loader-logo{ 
      background: transparent url("<?php header_image(); ?>") no-repeat scroll 50% 40% / 150px 55px;
      height: 100%;
      position: absolute;
      width: 100%;
      z-index: 100000;
    }
    <?php endif; // header image was removed ?>
   
    .navbar-mksystem.navbar-fixed{
      height: 118px;
      position: fixed;
      width: 100%;
      z-index: 1000;
    }
    .navbar-fixed #logo a img{
      height: 75px;
      width: auto;
    }
    .animate{
      transition: all 500ms ease 0s;
    }
    .lineaFooter #menu-menu-pie-de-pagina li a {
    border-bottom: 3px solid transparent;
    color: white;
    font-size: 17px;
    padding-bottom: 0px;
    display:inline-block;
    text-decoration: none;
    }
    .lineaFooter #menu-menu-pie-de-pagina li a:hover  {
    border-color: #d1d1d1;
    color: #fff;    
    }
    
    .magytop-header {
    top: 0px; margin-top: 0px;
    }

    /*iconos */
@font-face {
  font-family: 'mksystem';
  src:  url('fonts/mksystem.eot?2rku0w');
  src:  url('fonts/mksystem.eot?2rku0w#iefix') format('embedded-opentype'),
    url('fonts/mksystem.ttf?2rku0w') format('truetype'),
    url('fonts/mksystem.woff?2rku0w') format('woff'),
    url('fonts/mksystem.svg?2rku0w#mksystem') format('svg');
  font-weight: normal;
  font-style: normal;
}

[class^="icon-"], [class*=" icon-"] {
  /* use !important to prevent issues with browser extensions that change fonts */
  font-family: 'mksystem' !important;
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;

  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.icon-location:before {
  content: "\e900";
}
.icon-heart:before {
  content: "\2764";
}
.icon-location-outline:before {
  content: "\2763";
}
.icon-heart-outline:before {
  content: "\e902";
}

html{
    overflow-x:hidden;
}

.te{
 padding-left: 442px; border-right-width: 0px; margin-right: 50px;
}

 

  </style>
<?php
}
add_action( 'wp_enqueue_scripts', 'mksystem_header_styles' );

/**
 * Mk system slider
 */
function mksystem_featured_slider() {
    if ( get_theme_mod('mksystem_slider_checkbox') == TRUE ) {
      echo '<div class="flexslider ">';
        echo '<ul class="slides">';

          $count = get_theme_mod('mksystem_slide_number');
          $slidecat = get_theme_mod('mksystem_slide_categories');

            if ( $count && $slidecat ) {
            $query = new WP_Query( array( 'cat' => $slidecat, 'posts_per_page' => $count ) );
//            print_r($query);
            if ($query->have_posts()) :
              while ($query->have_posts()) : $query->the_post();

              echo '<li>';
         
                if ( has_post_thumbnail() ) { // Check if the post has a featured image assigned to it.
                  the_post_thumbnail();
                }

                /*
                echo '<div class="flex-caption">';
                  echo '<a href="'. get_permalink() .'">';
                    if ( get_the_title() != '' ) echo '<h2 class="entry-title">'. get_the_title().'</h2>';
                    if ( get_the_excerpt() != '' ) echo '<div class="exceimarpt">' . get_the_excerpt() .'</div>';
                  echo '</a>';
                echo '</div>';
                */
                endwhile;
              endif;

            } else {
                echo "Slider no configurado";
            }
     
            echo '</li>';
        echo '</ul>';
      echo ' </div>';
     }
}


/**
 * Call for action button & text area suscribir
 */
function mksystem_call_for_action() {
  // if ( is_front_page() && of_get_option('w2f_cfa_text')!=''){
    echo '<div class="cfa">';
      echo '<div class="container">';
        echo '<div class="col-md-2">';
          echo '</div>';
            echo '<div class="col-md-8">';
              echo do_shortcode('[ssm_form id="40"]');
              echo '</div>';
            echo '<div class="col-md-2">';
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
          $class= 'col-sm-4';
        }else{
          $class= 'col-md-8';
        }
        $categories_html .= '<div class="'.$class.' text-center col-sm-8">';
        $categories_html .= '<a href="'.$category['term_link'].'" title="'.$category['name'].'" class="thumbnail image-relative">';
        $categories_html .= '<img src="'.$thumb_url.'">';

        $categories_html .= '<div class="categorie-content">';
        $categories_html .= '<h4>'.$category['name'].'</h4>';
        $categories_html .= '<span>COMPRAR AHORA</span>';
        $categories_html .= '</div>';

        $categories_html .= '<div class="background-collection"></div>';

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

        $categories_html .= '<div class="'.$class.' text-center col-sm-7">';
        $categories_html .= '<a href="'.$category['term_link'].'" title="'.$category['name'].'" class="thumbnail image-relative">';
        $categories_html .= '<img src="'.$thumb_url.'">';

        $categories_html .= '<div class="categorie-content">';
        $categories_html .= '<h4>'.$category['name'].'</h4>';
        $categories_html .= '<span>COMPRAR AHORA</span>';
        $categories_html .= '</div>';

        $categories_html .= '<div class="background-collection"></div>';

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
          $class= 'col-md-4 col-sm-6 col-xs-12 col-sm-7';
        }if ($i ==1 ){
          $class= 'col-md-4';
        }else{
          $class= 'col-md-4 col-sm-4 bg-transparent'.(($i === 4) ? ' margin-top-collection ' : '');
        }
       
        
        $categories_html .= '<div class="'.$class.' text-center ">';
        if($i == 4 ){
        $categories_html .= '<div class="categorie-name favoritothicas fvthicas ">';
        $categories_html .= '<h4>'.$category['name'].'</h4>';
        $categories_html .= '<div class="subline-title "></div>';
        $categories_html .= '<span>'.$category['description'].'</span>';
        $categories_html .= '</div>';
        }
        $categories_html .= '<a href="'.$category['term_link'].'" title="'.$category['name'].'" class="thumbnail image-relative">';
        $categories_html .= '<img src="'.$thumb_url.'">';
        
        if($i == 4 ){
        $categories_html .= '<div class="categorie-name fvthicas2">';
        $categories_html .= '<h4>'.$category['name'].'</h4>';
        $categories_html .= '<div class="subline-title "></div>';
        $categories_html .= '<span>'.$category['description'].'</span>';
        $categories_html .= '</div>';
        }
        //$categories_html .= '<div class="categorie-content">';
        //$categories_html .= '<h4>'.$category['name'].'</h4>';
        //$categories_html .= '<span>COMPRAR AHORA</span>';
        //$categories_html .= '</div>';
        
        $categories_html .= '<div class="background-collection"></div>';

        $categories_html .= '</a>';

        if($i != 4){
        $categories_html .= '<div class="categorie-name">';
        $categories_html .= '<h4>'.$category['name'].'</h4>';
        $categories_html .= '<div class="subline-title"></div>';
        $categories_html .= '<span>'.$category['description'].'</span>';
        $categories_html .= '</div>';
        }
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

function mksystem_categories_list_subcategoria(){
  $categories_html = '';
  $category_products = mksystem_product_categories();
  
  if(count($category_products) > 0){
    $items = 0;
    $categories_html .= '<ul class="nav footer-nav clearfix">';
    foreach ($category_products as $category) {
	
      if($items <= 9){
        $categories_html .= '<li class="menu-item" style="display:block; align: left;"><a style="text-align:left;" href="'.$category['term_link'].'">'.$category['name'].'</a></li>';
      }//end if
	  
      $items++;
    }//end foreach
    $categories_html .= '</ul>';
  }//end if

  echo $categories_html;
}

function mksystem_categories_list_subcategoria_subsub(){
  $categories_html = '';
  $category_products = mksystem_product_categories();
  
  if(count($category_products) > 0){
    $items = 0;
    $categories_html .= '<ul class="nav footer-nav clearfix">';
    foreach ($category_products as $category) {
	
      if($items <= 9){
        if($category['id'] == 41 || $category['id'] == 42){
          $categories_html .= '<li class="menu-item" style="display:block; align: left;"><a style="text-align:left;" href="'.$category['term_link'].'">'.$category['name'].'</a></li>';
        }
         
        
        }//end if
	  
      $items++;
    }//end foreach
    $categories_html .= '</ul>';
  }//end if

  echo $categories_html;
}      

function mksystem_header_menu() {
  // display the WordPress Custom Menu if available
  wp_nav_menu(array(
    'menu'              => 'primary',
    'theme_location'    => 'primary',
    'depth'             => 2,
    'container'         => 'div',
//    'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
      'container_class'   => 'col-md-12 text-center hidden-xs',
    'menu_class'        => 'nav navbar-nav menu-mksystem',
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new wp_bootstrap_navwalker()
  ));
} /* end header menu */
function mksystem_header_menu2() {
  // display the WordPress Custom Menu if available
  wp_nav_menu(array(
    'menu'              => 'primary',
    'theme_location'    => 'primary',
    'depth'             => 2,
    'container'         => 'div',
    'container_class'   => 'gNavPrincipal collapse navbar-collapse collapse-nav-menu text-center',
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
     'container'       => 'div',                              // remove nav container
     'container_class' => 'footer-links clearfix lineaFooter',   // class of container (should you choose to use it)
     'menu'            => __( 'Footer Links', 'dazzling' ),   // nav name
     'menu_class'      => 'nav footer-nav clearfix border listapadding',      // adding custom nav class
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
    'menu_class'        => 'nav footer-nav clearfix navbar-default',
    'depth'             => 2,
    'container'         => '',
    'container_class'   => ''
  ));
  
} /* end header menu */
/**
    *registrando menu secundario
    */
    register_nav_menus(array(
     'secundary' => __('Menu Pie de página', 'mksystem')
  ));


/**
 * Get all categories for footer
 */
function mksystem_categories_list_footer(){
  $categories_html = '';
  $category_products = mksystem_product_categories('catalog');
  if(count($category_products) > 0){
    $items = 0;
    $categories_html .= '<li class="nav footer-nav clearfix col-md-4 text-center">';
    foreach ($category_products as $category) {
      if($items <= 2){
           $categories_html .= '<ul class="menu-item"><a href="'.$category['term_link'].'">'.$category['name'].'</a></ul>';
         }//end if
      if(count($category['childs']) > 0){
        foreach ($category['childs'] as $subcategory) {
          $categories_html .= '<ul class="submenu-item"><a href="'.$subcategory['term_link'].'">'.$subcategory['name'].'</a></ul>';
        }//end foreach
      }//end if
      $items++;
    }//end foreach
    $categories_html .= '</li>';
  }//end if

  echo $categories_html;
}

/**
 * function to show the footer social-links
 */

function mksystem_social_links(){
  $social_html    = '';
  $facebook       = get_theme_mod('social_facebook');
  $twitter        = get_theme_mod('social_twitter');
  $pinterest      = get_theme_mod('social_pinterest');
  $youtube        = get_theme_mod('social_youtube');
  $vimeo          = get_theme_mod('social_vimeo');
  $linkedin       = get_theme_mod('social_linkedin');


  if ($facebook != '') {
    $social_html  .= '<a target="_blank" class="" href="'.$facebook.'"><img src="'.get_template_directory_child().'/inc/img/social/facebook.jpg'.'"></a>';
  }
  if ($twitter != ''){
    $social_html  .= '<a target="_blank" class="" href="'.$twitter.'""><img src="'.get_template_directory_child().'/inc/img/social/twitter.jpg'.'"></a>';
  }
  if ($pinterest != '') {
    $social_html  .= '<a target="_blank" class="" href="'.$pinterest.'"><img src="'.get_template_directory_child().'/inc/img/social/pinterest.jpg'.'"></a>';
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


/**
 * function to show the footer info, copyright information
 */
function mksystem_footer_info() {
?>
  <div class="copy-right col-md-6" > &copy; <?php  echo bloginfo('name');?> 
  <?php echo esc_html__(" - Todos los derechos reservados ");?> <?php echo date_i18n('Y'); ?>
<!--     borrar-->
  </div>
  <div class="mksystem-info col-md-6">
      <div id="devit_author"></div>
  </div>


  <?php
}
//titulo de la pagina nosotros
function mksystem_titulo() {
?>
  <div class="copy col-md-12" ><?php echo bloginfo('name');?></div>
<?php
}

function mksystem_subcategories(){

  $categories_html = '';
  $category_products = mksystem_product_categories('catalog');
  if(count($category_products) > 0){
    $i=0;
    foreach ($category_products as $category) {
      $categories_html .= '<h4>'.$category['name'].'</h4>';
      if(count($category['childs']) > 0){
        foreach ($category['childs'] as $subcategory) {
          $categories_html .= '<h4>'.$subcategormksystem_featured_slider_icony['name'].'</h4>';
        }//end foreach
      }//end if
    }//end foreach
    $i++;
  //}//end if

  echo $categories_html;
}

function dazzling_sanitize_slidecat( $input ) {
    global $options_categories;
    if ( array_key_exists( $input, $options_categories ) ) {
        return $input;
    } else {
        return '';
    }
}

}


