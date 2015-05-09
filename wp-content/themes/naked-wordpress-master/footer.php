<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

</div><!-- / end page container, begun in the header -->

<footer class="site-footer" role="contentinfo">
	<div class="site-info container">
		
		
		
	</div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/underscore.js"></script>
    <script>
        (function(){

            setTimeout(function(){
            
                document.getElementById('fastener').classList.add('is-loaded');
                document.getElementById('left-image').classList.add('is-loaded');
            
            
            },1000);
        
        }());

      $(document).foundation();

    </script>
</body>
</html>
