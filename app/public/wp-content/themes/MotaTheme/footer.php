<?php wp_footer(); ?>

<footer>
    <nav class="footer-nav">
      <?php
        wp_nav_menu( array(
          'theme_location' => 'footer-menu',
          'container' => false,
          'menu_class' => 'footer-menu',
        ) );
      ?>
      
    </nav>
 
    <?php get_template_part('template-parts/modale-contact'); ?>
  
    


</footer>
