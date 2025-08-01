<?php
// Ajout des styles personnalisés
function enqueue_custom_styles()
{
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/scss/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

// Ajout du support pour la balise de titre
function theme_slug_setup()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_slug_setup');

// Enregistrement des menus
function register_menus()
{
    register_nav_menus(
        array(
            'header-menu' => 'menu header',
            'footer-menu' => 'menu footer'
        )
    );
}
add_action('init', 'register_menus');

// Ajout du support pour les miniatures (post-thumbnails)
function theme_support_post_thumbnails()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_support_post_thumbnails');


// Ajout des scripts personnalisés
function enqueue_custom_scripts()
{
    
    wp_enqueue_script('jquery-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true);

 
    wp_enqueue_script('modale-contact-script', get_template_directory_uri() . '/assets/js/modale-contact.js', array('jquery'), '1.0.0', true);

    
    wp_enqueue_script('menu-burger-script', get_template_directory_uri() . '/assets/js/menu-burger.js', array('jquery'), '1.0.0', true);

    
    wp_enqueue_script('miniatures-script', get_template_directory_uri() . '/assets/js/miniatures.js', array('jquery'), '1.0.0', true);

    
   
    wp_enqueue_script('filtre-script', get_template_directory_uri() . '/assets/js/filtre.js', array('jquery'), '1.0.0', true);

    
    wp_enqueue_script('select2-js', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js', array('jquery'), '4.0.13', true);
    wp_enqueue_style('select2-css', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css', array());

    
    wp_enqueue_script('custom-select-script', get_template_directory_uri() . '/assets/js/custom-select.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


function enqueue_load_more_photos_script()
{
    wp_enqueue_script('load-more-photos', get_template_directory_uri() . '/assets/js/load-more-photos.js', array('jquery'), null, true);

    wp_enqueue_script('filtre', get_template_directory_uri() . '/assets/js/filtre.js', array('jquery'), null, true);

    
    wp_localize_script('load-more-photos', 'ajax_params', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));

    wp_localize_script('filtre', 'ajax_params', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_load_more_photos_script');






// Fonction pour charger plus de photos via AJAX
function load_more_photos()
{
    
    session_start();
    
    $page = $_POST['page']; 


    
       
        $args = array(
            'post_type'      => 'photo',     
            'posts_per_page' => 8,          
            
            'order'          => 'ASC',       
            'paged'          => $page,      

        );




    
    $photo_block = new WP_Query($args);
    $return = array();
    
    if ($photo_block->have_posts()) :
        
        while ($photo_block->have_posts()) :
            $photo_block->the_post();
           
            
            get_template_part('template-parts/bloc-photo', get_post_format());
            
        endwhile;

        wp_reset_postdata();
    endif;
   

    if($photo_block->max_num_pages != $page ){
        $return['more'] = true;
        
        $next_page = $page + 1;
        echo '<div id="load-moreContainer"><button id="btnLoad-more" data-page="'. $next_page .'" data-url="' . admin_url('admin-ajax.php') . '" data-filtered="1" >Charger plus</button></div>';
    }

    
    die();
}



add_action('wp_ajax_load_more_photos', 'load_more_photos');


add_action('wp_ajax_nopriv_load_more_photos', 'load_more_photos');







// Fonction pour filtrer les photos via AJAX
function filter_photos()
{
   
    if (isset($_POST['action']) && $_POST['action'] == 'filter_photos') {
       
        $filter = array_map('sanitize_text_field', $_POST['filter']);
        $page = $_POST['page'];

       
        error_log('Filter values: ' . print_r($filter, true));

        
        $args = array(
            'post_type'      => 'photo',
            'posts_per_page' => 8,
            'order'          => 'ASC',
            'paged'          => $page,
            'tax_query'      => array(
                'relation' => 'AND',
            ),
        );



        
        if (!empty($filter['category'])) {
            $args['tax_query'][] = array(
                'taxonomy' => 'categorie',
                'field'    => 'slug',
                'terms'    => $filter['category'],
            );
        }

       
        if (!empty($filter['years'])) {
            $args['order'] = ($filter['years'] == 'date_desc') ? 'DESC' : 'ASC';
        }

        
        if (!empty($filter['format'])) {
            $args['tax_query'][] = array(
                'taxonomy' => 'format',
                'field'    => 'slug',
                'terms'    => $filter['format'],
            );
        }
        
        $query = new WP_Query($args);

       
        if ($query->have_posts()) {
            
            while ($query->have_posts()) :
                $query->the_post();
                
                $photoId      = get_post_thumbnail_id();
                $reference    = get_field('reference');
                $refUppercase = strtoupper($reference);

                
                error_log('Photo ID: ' . $photoId);
                error_log('Reference: ' . $reference);

               
                get_template_part('template-parts/bloc-photo');
            endwhile;

            if ($query->max_num_pages > 1 && $page == 1) {
                $next_page = $page + 1;
                echo '<div id="load-moreContainer"><button id="btnLoad-more" data-page="'. $next_page .'" data-url="' . admin_url('admin-ajax.php') . '" data-filtered="1" >Charger plus</button></div>';
            }
            ?>

            <?php
            
            wp_reset_query();
        } else {
            
            echo '<p class="critereFiltrage">Aucune photo ne correspond aux critères de filtrage</p>';
        }
    }

    
    die();
}


add_action('wp_ajax_filter_photos', 'filter_photos');

add_action('wp_ajax_nopriv_filter_photos', 'filter_photos');
