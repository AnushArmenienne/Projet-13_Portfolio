<?php get_header(); ?>

<?php
// Récupération des champs ACF personnalisés pour l'article actuel
$photoId = get_field('photo');




$annees_terms = get_the_terms(get_the_ID(), 'annee');

if ($annees_terms && !is_wp_error($annees_terms)) {
  
  $annee = $annees_terms[0]->name;
} else {
  
  $annee = 'Non défini';
}


$categories = get_the_terms(get_the_ID(), 'categorie');
$formats = get_the_terms(get_the_ID(), 'format');
$FORMATS = $formats ? ucwords($formats[0]->name) : '';


$nextPost = get_next_post();
$previousPost = get_previous_post();
$previousThumbnailURL = $previousPost ? get_the_post_thumbnail_url($previousPost->ID, 'thumbnail') : '';
$nextThumbnailURL = $nextPost ? get_the_post_thumbnail_url($nextPost->ID, 'thumbnail') : '';
?>

<!-- Section d'affichage de la photo et des informations associées -->
<section class="cataloguePhotos">
  <div class="galleryPhotos">
    <div class="detailPhoto">
      <div class="containerPhoto">
        
        <img src="<?php echo esc_url($photoId); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
      </div>

      <div class="photo-info">
        <div class="photo-title">
          <h2><?php echo get_the_title(); ?></h2>
        </div>
        <div class="taxo-details">
          <p>CATÉGORIE:
            <?php
            if ($categories && !is_wp_error($categories)) {
              $category_names = array();
              foreach ($categories as $category) {
                $category_names[] = esc_html($category->name);
              }
              echo implode(', ', $category_names);
            } else {
              echo 'Non défini';
            }
            ?>
          </p>
          <p>DIFFICULTÉ: <?php echo esc_html($FORMATS); ?></p>
          <p>ANNÉE: <?php echo esc_html($annee); ?></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Section de contact et navigation entre les photos -->
  <div class="contenairContact">
    <div class="contact">
      <p class="interesser">Ce projet vous intéresse ?</p>
      
      <button id="boutonContact" data-reference="<?php echo esc_attr($reference); ?>">Contact</button>
    </div>

    <div class="naviguationPhotos">

      <!-- Conteneur pour la miniature -->
      <div class="miniPicture" id="miniPicture">
      
      </div>

      <div class="naviguationArrow">
        <?php if (!empty($previousPost)) : ?>
          <img class="arrow arrow-left" src="<?php echo get_theme_file_uri() . '/assets/images/left.png'; ?>" alt="Photo précédente" data-thumbnail-url="<?php echo $previousThumbnailURL; ?>" data-target-url="<?php echo esc_url(get_permalink($previousPost->ID)); ?>">
        <?php endif; ?>

        <?php if (!empty($nextPost)) : ?>
          <img class="arrow arrow-right" src="<?php echo get_theme_file_uri() . '/assets/images/right.png'; ?>" alt="Photo suivante" data-thumbnail-url="<?php echo $nextThumbnailURL; ?>" data-target-url="<?php echo esc_url(get_permalink($nextPost->ID)); ?>">
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>

<section>
  <div class="titleSugest">
    <h3>VOUS AIMEREZ AUSSI</h3>
  </div>
  <div class="similar_photo">
    <?php
    // Récupération des catégories de la photo principale
    $categories = get_the_terms(get_the_ID(), 'categorie');
    
    $args = array(
      'post_type' => 'photo',
      'posts_per_page' => 2,
      'post__not_in' => array(get_the_ID()),
      'tax_query' => array(
        array(
          'taxonomy' => 'categorie',
          'field' => 'id',
          'terms' => $categories ? wp_list_pluck($categories, 'term_id') : array(),
        ),
      ),
    );
   
    $query = new WP_Query($args);
    
    while ($query->have_posts()) :
      $query->the_post();
      
      $photoId = get_field('photo');
      
      get_template_part('template-parts/bloc-photo');
    endwhile;
   
    if (!$query->have_posts()) :
      echo '<p class="photoNotFound">Pas de photo similaire trouvée pour la catégorie.</p>';
    endif;
   
    wp_reset_postdata();
    ?>
  </div>
</section>
<?php get_footer(); ?>