<?php
function enqueue_mystyles(){
  wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.0.10/css/all.css');
  wp_enqueue_style('gfont', '//fonts.googleapis.com/css?family=Kaushan+Script|Playfair+Display');
  wp_enqueue_style('normalize', get_template_directory_uri() .'/css/normalize.css');
  wp_enqueue_style('style', get_template_directory_uri() .'/css/main.css');
}
add_action('wp_enqueue_scripts','enqueue_mystyles');

register_nav_menu( 'header', 'Header Menu'); //Activation d'un emplacement de menu
add_theme_support( 'post-thumbnails' ); //Activation des images mises en avant



function register_my_sidebars()
{    register_sidebar( array(
     'name' => __( 'Blog Sidebar', 'wpb' ),
     'id' => 'sidebar-blog',
     'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
     'before_widget' => '<div id="%1$s" class="widget %2$s sidebar-item">',
     'after_widget' => '</div>',
     'before_title' => '<h3 class="widget-title item-title">',
     'after_title' => '</h3>',
 ) );
}
add_action( 'widgets_init', 'register_my_sidebars' );

function wpm_custom_post_type() {

    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Livres', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Livre', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Livres'),
        // Les différents libellés de l'administration
        'all_items'           => __( 'Touts les livres'),
        'view_item'           => __( 'Voir les livres'),
        'add_new_item'        => __( 'Ajouter un livre'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer'),
        'update_item'         => __( 'ModifierV'),
        'search_items'        => __( 'Rechercher'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
    );
    
    // On peut définir ici d'autres options pour notre custom post type
    
    $args = array(
        'label'               => __( 'Livres'),
        'description'         => __( 'Tous sur livres'),
        'labels'              => $labels,
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        /*
        * Différentes options supplémentaires
        */    
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'              => array( 'slug' => 'books'),

    );
    
    // On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
    register_post_type( 'books', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );
?>
