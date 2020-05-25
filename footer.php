<?php
/**
 * Template : Footer
 *
 * @package S7design
 */
?>

</div> <!-- main -->
<footer class="page-footer">
    <div class="container">
    
        <div class="row">
            <?php if ( is_active_sidebar( 'footer_1' ) ) : ?>
                <div  class="footer-widget-area col l3 m6 s12" role="complementary">
                    <?php dynamic_sidebar( 'footer_1' ); ?>
                </div>
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'footer_2' ) ) : ?>
                <div class="footer-widget-area col l3 m6 s12" role="complementary">
                    <?php dynamic_sidebar( 'footer_2' ); ?>
                </div>
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'footer_3' ) ) : ?>
                <div class="footer-widget-area col l3 m6 s12" role="complementary">
                    <?php dynamic_sidebar( 'footer_3' ); ?>
                </div>
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'footer_4' ) ) : ?>
                <div class="footer-widget-area col l3 m6 s12" role="complementary">
                    <?php dynamic_sidebar( 'footer_4' ); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</footer>

<?php


 wp_footer(); ?>

 <?php 
 // INSTANCE MATERIALIZE JS 
 if(get_option('css_library') == 'materialize') {
    ?> <script> M.AutoInit() </script>
 <?php
 }
 ?>
  
</body>
</html>
