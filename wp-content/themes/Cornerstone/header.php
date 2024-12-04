<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php blogInfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<header>


<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <!-- Logo -->
  
         <?php
             if(function_exists("the_custom_logo")){
               the_custom_logo();
             }else{
              blogInfo('name');
             }
 
         ?>
        
        
        <!-- Navbar Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <?php

            if(has_nav_menu('primary_menu')){
              wp_nav_menu(
                array(
                    'theme_location' => 'primary_menu', // The location you registered in functions.php
                    'container' => false, // Do not wrap the menu in any container
                    'items_wrap' => '<ul class="navbar-nav mr-auto">%3$s</ul>', // Custom wrapper for <ul>
                    'depth' => 2, // Allow submenus (depth of 2 for dropdowns)
                    'fallback_cb' => false, // No fallback menu if none is set
                    'walker' => '' // No custom walker (Bootstrap NavWalker is not used)
                )
            );
            }
            
            ?>
        </div>
    
</nav>
    </div>
</header>