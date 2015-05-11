<?php
/*
 	Template Name: Homepage
*/

get_header(); // This fxn gets the header.php file and renders it ?>
	

    <!-- left half -->
	<section id="leftSection" class="leftSide show-for-medium-up hide-for-xlarge-up">
        <figure id="left-image" class="columns small-12 left-image"></figure>
        <figure class="striped-overlay"></figure>
        <!-- <div class="vignette"></div> -->
        <div class="row top-half"></div>
        <div class="row bottom-half"></div>
        
    </section>
    <!-- end left half -->


    <!-- right half -->
    <section id="rightSection" class="mode1 show-for-medium-up hide-for-xlarge-up">
        <figure class="striped-overlay"></figure>
        <div class="row top-half">

            <article class="business-card columns small-12">
                <header class="business-card-header columns small-12">
                    <h1>Mustafa Raza</h1>
                    <h6>Web Developer</h6>
                    <h6>Chicago , Illinois</h6>
                    <!-- <h6>moose @ moosecodes . com</h6> -->
                    <!-- <h3>312.810.2010</h3> -->
                </header>
    
                <footer class="business-card-footer columns small-12">
                    <!-- <nav>
                        <span class="columns small-4"><a href="">Work</a></span>
                        <span class="columns small-4"><a href="">Experience</a></span>
                        <span class="columns small-4"><a href="">Contact</a></span>
                        <span class="columns small-2"><a href="">Recreation</a></span>
                    </nav> -->
                    <?php //wp_nav_menu( array( 'theme_location' => 'secondary_navigation' ) ); // Display the user-defined menu in Appearance > Menus ?>
                </footer>
    
            </article>
            <div id="controls" class="columns small-12">
                    <a href="#" class="leftSectionToggle0 columns small-3">&nbsp;</a>
                    <a href="#" class="portfolioToggle columns small-3">portfolio</a>
                    <a href="#" class="resumeToggle columns small-3">resume</a>
                    <a href="#" class="contactToggle columns small-3">contact</a>
                </div>
            
            <!-- <div class="vignette"></div> -->
        
        </div>
            
            

        <div class="row bottom-half">
            
            <div id="content" role="main" class="columns small-12">
			<?php if ( have_posts() ) : 
			// Do we have any posts/pages in the databse that match our query?
			?>

				<?php while ( have_posts() ) : the_post(); 
				// If we have a page to show, start a loop that will display it
				?>

					<article class="post">

						<?php if (!is_front_page()) : // Only if this page is NOT being used as a home page, display the title ?>
							<span class='title'>
								<?php the_title(); // Display the page title ?>
							</span>
						<?php endif; ?>
										
						<div class="the-content">
							<?php the_content(); 
							// This call the main content of the page, the stuff in the main text box while composing.
							// This will wrap everything in paragraph tags
							?>
							
							<?php wp_link_pages(); // This will display pagination links, if applicable to the page ?>
						</div><!-- the-content -->
						
					</article>

				<?php endwhile; // OK, let's stop the page loop once we've displayed it ?>

			<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having a page or not having a page to show) ?>
		
<?php //echo get_post_field('post_content', 27) ?>


		</div><!-- #content .site-content -->
	</div>
        <!-- <canvas id="myCanvas" height="300" width="300"></canvas> -->
    </section>
    <!-- end right half -->


    <!-- fastener sits on top -->
    <div id="fastener" class="logo">
        <div class="loader-bg" id="loader-bg"></div>
        <i class="i i-logo">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" id="logo" version="1.1" x="0" y="0" width="44" height="44" viewBox="0 0 44 32" enable-background="new 0 0 44 32" xml:space="preserve">
                <clipPath id="logo-clippath">
                    <rect x="1" y="1" width="42" height="30"></rect>
                </clipPath>
                    <rect id="logo-fill-1" x="1" y="1" clip-path="url(#logo-clippath)" width="42" height="42" style="fill: rgb(81, 88, 105);"></rect>
                    <rect id="logo-fill-2" x="1" y="1" clip-path="url(#logo-clippath)" width="42" height="42" style="fill: rgb(81, 88, 105);"></rect>
                    <path id="logo-mask" d="M0 0v32h44V0H0zM8 30c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6S11.3 30 8 30zM8 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6S11.3 14 8 14zM28 30h-8V2h8V30zM42 30h-8V2h8V30z">
                </path> -->
            </svg>
        </i>
    </div>
    <!-- end fastener -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>