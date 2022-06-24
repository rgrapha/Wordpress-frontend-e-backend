<?php
function type_post_porsonalizados() {

   //Contatos
      $contatos = new Odin_Post_Type(
         'Contato',
         'contatos'
      );
      $contatos->set_labels(
         array( 'menu_name' => __( 'Contatos dos serviços', 'odin' ))
      );
      $contatos->set_arguments(
         array(
            'public' => true,
            'supports' => array('title','author'),
            'has_archive' => true,
            'menu_icon' => 'dashicons-id-alt',
            'show_in_nav_menus'   => true,
            'show_in_rest' => true
         )
      );
      
   //Banner
      $banner = new Odin_Post_Type(
         'Banner',
         'banner'
      );
      $banner->set_labels(
         array( 'menu_name' => __( 'Banner', 'odin' ))
      );
      $banner->set_arguments(
         array(
            'public' => true,
            'supports' => array('title','thumbnail','author','revisions'),
            'has_archive' => true,
            'menu_icon' => 'dashicons-format-gallery',
            'show_in_nav_menus' => true
         )
      );

   //Serviços
      $servico = new Odin_Post_Type(
         'Serviço',
         'servico'
      );
      $servico->set_labels(
         array( 'menu_name' => __( 'Serviços', 'odin' ))
         
      );
      $servico->set_arguments(
         array(
            'public' => true,
            'supports' => array('title','editor','author','revisions'),
            'has_archive' => true,
            'menu_icon' => get_template_directory_uri() . '/assets/images/logo-admin/televisions.png',
            'menu_icon' => 'dashicons-list-view',
            'show_in_nav_menus'   => true,
            'show_in_rest' => true
         )
      );
      $servicos = new Odin_Taxonomy(
         'Categoria',
         'servicos',
         'servico'
      );
      $servicos ->set_labels(
         array(
            'menu_name' => __( 'Categorias', 'odin' )
         )
      );
      $servicos ->set_arguments(
         array(
            'hierarchical' => true,
            'show_in_rest' => true
         )
      );

   //Telefones úteis
      $telefoneUteis = new Odin_Post_Type(
         'Telefone',
         'telefoneUteis'
      );
      $telefoneUteis->set_labels(
         array( 'menu_name' => __( 'Telefone úteis', 'odin' ))
      );
      $telefoneUteis->set_arguments(
         array(
            'public' => true,
            'supports' => array('title','author','revisions'),
            'has_archive' => true,
            'menu_icon' => 'dashicons-phone',
            'show_in_nav_menus'   => true,
            'show_in_rest' => true
         )
      );

   //Manuais e cartilhas
      $manuais_cartilhas = new Odin_Post_Type(
         'PDF',
         'manuais_cartilhas'
      );
      $manuais_cartilhas->set_labels(
         array( 'menu_name' => __( 'Manuais e cartilhas', 'odin' ))
      );
      $manuais_cartilhas->set_arguments(
         array(
            'public' => true,
            'supports' => array('title','thumbnail','author','revisions'),
            'has_archive' => true,
            'menu_icon' => 'dashicons-tickets-alt',
            'show_in_nav_menus'   => true,
            'show_in_rest' => true
         )
      );
   
   //Link úteis
      $link_uteis = new Odin_Post_Type(
         'Link',
         'link_uteis'
      );
      $link_uteis->set_labels(
         array( 'menu_name' => __( 'Link úteis', 'odin' ))
      );
      $link_uteis->set_arguments(
         array(
            'public' => true,
            'supports' => array('title','author','revisions'),
            'has_archive' => true,
            'menu_icon' => 'dashicons-admin-site-alt3',
            'show_in_nav_menus'   => true,
            'show_in_rest' => true
         )
      );

   //Notícias
      $noticias = new Odin_Post_Type(
         'Notícia',
         'noticias'
      );
      $noticias->set_labels(
         array( 'menu_name' => __( 'Notícias', 'odin' ))
      );
      $noticias->set_arguments(
         array(
            'public' => true,
            'supports' => array('title','author','editor','thumbnail','revisions'),
            'has_archive' => true,
            'menu_icon' => 'dashicons-format-aside',
            'show_in_nav_menus'   => true,
            'show_in_rest' => true
         )
      );

   //Vídeos
      $videos = new Odin_Post_Type(
         'Vídeo',
         'videos'
      );
      $videos->set_labels(
         array( 'menu_name' => __( 'Vídeos', 'odin' ))
      );
      $videos->set_arguments(
         array(
            'public' => true,
            'supports' => array('title','author','thumbnail','editor','revisions'),
            'has_archive' => true,
            'menu_icon' => 'dashicons-format-video',
            'show_in_nav_menus'   => true,
            'show_in_rest' => true
         )
      );
}

function change_post_label() {
   global $menu;
   global $submenu;
   $menu[5][0] = 'Post';
   $submenu['edit.php'][5][0] = 'Post';
   $submenu['edit.php'][10][0] = 'Adicionar Post';
   $submenu['edit.php'][16][0] = 'Tags';
   echo '';
}
function change_post_object() {
   global $wp_post_types;
   $labels = &$wp_post_types['post']->labels;
   $labels->name = 'Post';
   $labels->singular_name = 'Post';
   $labels->add_new = 'Adicionar Post';
   $labels->add_new_item = 'Adicionar Post';
   $labels->edit_item = 'Editar Post';
   $labels->new_item = 'Post';
   $labels->view_item = 'Ver Post';
   $labels->search_items = 'Buscar Post';
   $labels->not_found = 'Nenhuma Post encontrado';
   $labels->not_found_in_trash = 'Nenhuma Post encontrado no Lixo';
   $labels->all_items = 'Todas Post';
   $labels->menu_name = 'Post';
   $labels->name_admin_bar = 'Post';
   $wp_post_types['post']->menu_position = '25';
   
}


add_action('init', 'type_post_porsonalizados', 1);
add_action( 'admin_menu', 'change_post_label' );
add_action( 'init', 'change_post_object' );
