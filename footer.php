<footer id="colophon" class="site-footer ">
    <div class="footer-top page-padding-x">
        <?php get_sidebar(); ?>
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

                </a>
            </div>
        </div>
    </div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>