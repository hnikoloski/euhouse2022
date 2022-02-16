<footer id="colophon" class="site-footer ">
    <div class="footer-top page-padding-x">
        <div class="col">

            <div class="logo-image">
                <img src="<?= the_field('footer_logo', 'option'); ?>" alt="<?= get_bloginfo(); ?>">
            </div>
            <?= the_field('about_content', 'option'); ?>
        </div>
        <div class="col">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-3',
                    'menu_id'        => 'footer-about-menu',
                    'container'      => false
                )
            );
            ?>
        </div>
        <div class="col">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-4',
                    'menu_id'        => 'footer-services-menu',
                    'container'      => false
                )
            );
            ?>
        </div>
        <div class="col">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-5',
                    'menu_id'        => 'footer-activities-menu',
                    'container'      => false
                )
            );
            ?>
        </div>
        <div class="col">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-6',
                    'menu_id'        => 'footer-extras-menu',
                    'container'      => false
                )
            );
            ?>

        </div>
    </div>
    <div class="footer-middle page-padding-x">
        <div class="app-icons">
            <a href="<?= the_field('google_play_app_link', 'option'); ?>" target="_blank" rel="noopener noreferrer"><img src="<?= get_template_directory_uri(); ?>/assets/img/google-play.png" alt="Android App"></a>
            <a href="<?= the_field('ios_app_store_link', 'option'); ?>" target="_blank" rel="noopener noreferrer"><img src="<?= get_template_directory_uri(); ?>/assets/img/app-store.png" alt="Ios App"></a>
        </div>
        <div class="form-wrapper" id="sub-to-newsletter">
            <?php $newsLetterForm = get_field('newsletter_form_shortcode', 'options'); ?>
            <?= do_shortcode($newsLetterForm); ?>
        </div>
    </div>
    <div class="footer-bottom page-padding-x">
        <p> Copyright &copy; <span class="current-year"></span> Europe House</p>

        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-2',
                'container'      => false
            )
        );
        ?>
        <div class="footer-signature">
            <div class="developed-by">
                <a href="https://www.digitalpresent.io/" target="_blank">
                    <span class="screen-reader-text">Developed By Digital Present</span>
                </a>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<div class="subscribe-wrapper">
    <div class="btn-wrapper">
        <a href="#sub-to-newsletter">Subscribe To our newsletter!</a>
    </div>
</div>
<?php wp_footer(); ?>

</body>

</html>