<?php
/**
 * Template : Footer
 * 
 * If you check Materialize libary in S7 Theme Option,
 *  replace this code in footer.php file
 * 
 * @package S7design
 */
?>

</div> <!-- main -->
<footer class="page-footer">
    <div class="container">
    
        <div class="row">
           <div class="col l3 m6 s12">
                <img class="materialize-logo" src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/materialize-teal.png?v=8918845370201195316" alt="">
                <p>Made with love by Materialize.</p>
            </div>
            <div class="col l3 m6 s12">
                <h5>About</h5>
                <ul>
                    <li><a href="#!">Blog</a></li>
                    <li><a href="#!">Pricing</a></li>
                    <li><a href="#!">Docs</a></li>
                </ul>
            </div>
            <div class="col l3 m6 s12">
                <h5>Connect</h5>
                <ul>
                    <li><a href="#!">Community</a></li>
                    <li><a href="#!">Subscribe</a></li>
                    <li><a href="#!">Email</a></li>
                </ul>
            </div>
            <div class="col l3 m6 s12">
                <h5>Contact</h5>
                <ul>
                    <li><a href="#!">Twitter</a></li>
                    <li><a href="#!">Facebook</a></li>
                    <li><a href="#!">Github</a></li>
                </ul>
            </div>
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
