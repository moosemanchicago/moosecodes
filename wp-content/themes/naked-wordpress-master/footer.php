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

<?php if(  basename( get_page_template() ) == 'homepage.php'  ) : ?>

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
      $('#fastener').click(function(){console.log(this);
             if( $('#rightSection').hasClass("mode1") ){ $('#rightSection, #left-image').removeClass("mode1").addClass("mode2"); $('#fastener').removeClass("mode1").addClass("mode2");}
        else if( $('#rightSection').hasClass("mode2") ){ $('#rightSection, #left-image').removeClass("mode2").addClass("mode3"); $('#fastener').removeClass("mode2").addClass("mode3");}
        else if( $('#rightSection').hasClass("mode3") ){ $('#rightSection, #left-image').removeClass("mode3").addClass("mode4"); $('#fastener').removeClass("mode3").addClass("mode4");}
        else if( $('#rightSection').hasClass("mode4") ){ $('#rightSection, #left-image').removeClass("mode4").addClass("mode1"); $('#fastener').removeClass("mode4").addClass("mode1");}
      });
    </script>
<?php endif; ?>

</body>
</html>
