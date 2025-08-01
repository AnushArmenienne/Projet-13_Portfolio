<?php

$photoUrl = get_field('photo');
$photoFullUrl = get_field('photo_en_grand_format'); 
$photo_titre = get_the_title();
$post_url = get_permalink();
$categories = get_the_terms(get_the_ID(), 'categorie');

if ($categories && !is_wp_error($categories)) {
    $categorie_name = $categories[0]->name;
} else {
    $categorie_name = '';
}

$reference = get_field('reference');

?>

<div class="blockPhotoRelative">
    
    <a href="<?php echo esc_url($photoFullUrl); ?>"
       class="fullscreen-icon"
       data-full="<?php echo esc_url($photoFullUrl); ?>"
       data-category="<?php echo esc_attr($categorie_name); ?>"
       data-reference="<?php echo esc_attr($reference); ?>">
        <img src="<?php echo esc_url($photoUrl); ?>" alt="<?php the_title_attribute(); ?>">
    </a>

    <div class="overlay">
        
        <h2><?php echo esc_html($photo_titre); ?></h2>
        
        <h3><?php echo esc_html($categorie_name); ?></h3>
        
        <div class="eye-icon">
            <a href="<?php echo esc_url($post_url); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_eye.svg" alt="voir la photo">
            </a>
        </div>
    </div>
</div>