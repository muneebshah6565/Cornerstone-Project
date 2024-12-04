<?php wp_footer(); ?>

<footer>
<div class="footer-row-1 pt-5 pb-4">
    <div class="container">
        <div class="row flex-wrap">
            <!-- Column 1: Site Logo and Description -->
            <div class="col-md-5 col-12 pr-0">
                <?php if (has_custom_logo()) : ?>
                    <div class="footer-logo">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php endif; ?>
                <p class="mt-3">

                <?php
                    $site_custom_description = get_theme_mod('site_custom_description');
                    if (!empty($site_custom_description)) {
                        echo '<p class="site-description">' . esc_html($site_custom_description) . '</p>';
                    }
                    ?>
                <p>

            </div>

            <!-- Column 2: Pages from Menu 1 -->
            <div class="col-md-2 col-12 mb-2">
            <h5 class="mb-3">Quick Links</h5>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu-1', // Assign this menu location
                    'menu_class'     => 'footer-menu list-unstyled',
                    'container'      => false,
                ));
                ?>
            </div>

            <!-- Column 3: Pages from Menu 2 -->
            <div class="col-md-2 col-12 mb-2">
            <h5 class="mb-3">Other Pages</h5>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu-2', // Assign this menu location
                    'menu_class'     => 'footer-menu list-unstyled',
                    'container'      => false,
                ));
                ?>
            </div>

            <!-- Column 4: Social Icons, Address, and Contact Info -->
            <div class="col-md-3 col-12 mb-2">
            <h5 class="mb-3">Contact Us</h5>
            <div class="footer-social-icons">
                <?php if ($facebook = get_theme_mod('footer_facebook')): ?>
                    <a href="<?php echo esc_url($facebook); ?>" target="_blank" class="social-icon">
                    <i style="color:white;" class="bi bi-facebook"></i>
                    </a>
                <?php endif; ?>
                
                <?php if ($twitter = get_theme_mod('footer_twitter')): ?>
                    <a href="<?php echo esc_url($twitter); ?>" target="_blank" class="social-icon">
                    <i style="color:white;" class="bi bi-twitter"></i>
                    </a>
                <?php endif; ?>

                <?php if ($instagram = get_theme_mod('footer_linkedin')): ?>
                    <a href="<?php echo esc_url($instagram); ?>" target="_blank" class="social-icon">
                    <i style="color:white;" class="bi bi-linkedin"></i>
                    </a>
                <?php endif; ?>
            </div>
            <p class="mt-4"><?php 
                $footer_address = get_theme_mod('footer_address', ''); // Retrieve the address
                if ($footer_address) {
                    echo esc_html($footer_address);
                } else {
                    echo ''; // Default text if no address is set
                }
                ?></p>
                
            <p class="mt-4"> <?php 
                $footer_phone = get_theme_mod('footer_phone', ''); // Retrieve the phone number
                if ($footer_phone) {
                    echo esc_html($footer_phone);
                } else {
                    echo ''; // Default text if no phone number is set
                }
                ?>
            </p>

          </div>
                
            </div>
        </div>
    </div>
</div>

<div class="footer-row-2 py-4">
    <div class="container">
        <div class="row flex-wrap">
          <div class="col-md-6 copyright-column">
          <span class="copyright-text"><?php echo get_theme_mod('footer_copyright_text', '© ' . date("Y") . ' Your Website Name. All rights reserved.'); ?></span>
          </div>
          <div class="col-md-6">
                    <?php
            wp_nav_menu(array(
                'theme_location' => 'security-menu',
                'menu_id'         => 'security-menu',
                'container'       => false,
                'menu_class'      => 'security-menu',
            ));
            ?>

        </div>
    </div>
</div>
</footer>
</body>
</html>