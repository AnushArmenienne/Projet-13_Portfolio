<!DOCTYPE html>
<html <?php language_attributes(); ?>> 

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="header">

    
    <div class="header_container" id="site-navigation">
        <div class="logo">
            <a href="<?php echo home_url('/'); ?>">
                <img class="AS" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
            </a>
        </div>

     
        <div class="burgerMenu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>

        <!-- Navigation (Menu) -->
       
        <nav class="nav-links-container">
            
    <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'menu_class' => 'header-menu',
        ));
    ?>
    <li class="menu-item">
        <a href="https://www.linkedin.com/in/anush-shahbazyan-40056b274/" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center;">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkdin.png" alt="linkdin" style="width: 30px; height: 30px; margin-right: 5px;">
            
        </a>
    </li>
</nav>



    </div>
    
</header>




