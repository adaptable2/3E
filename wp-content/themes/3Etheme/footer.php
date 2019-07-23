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
<!-- Modal -->
<div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-blue">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="color-yellow">&times;</span>
                </button>
            </div>
            <div class="modal-body px-0 py-0">
                <div class="slide">
                    <div><img src="<?php echo get_template_directory_uri(); ?>/img/carouselImg.jpg" class="img-fluid"></div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/img/carouselImg.jpg" class="img-fluid"></div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/img/carouselImg.jpg" class="img-fluid"></div>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>
