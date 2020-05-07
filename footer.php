<?php
/**
 * Template : Footer
 *
 * @package S7design
 */
?>
<?php

 wp_footer(); ?>
 <?php  if(get_option('css_library') == 'materialize') {
    ?> <script> M.AutoInit() </script> <?php
 }
 ?>
  
</body>
</html>
