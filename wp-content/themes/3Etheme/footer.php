<footer class="play-font color-yellow">
    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.png" alt="" class="img-fluid logo-footer ">
        <?php
        $defaults = array(
            'theme_location'    => 'footer-menu',
            'container'             => 'false'
        );
        wp_nav_menu( $defaults );

        ?>
    <a class="arrow-move arrow-move-up js-btn" href="#inicio"></a>
    <small>©2019 3E Ingeniería. All Rights Reserved. Website by Actividad Creativa.</small>
</footer>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>
