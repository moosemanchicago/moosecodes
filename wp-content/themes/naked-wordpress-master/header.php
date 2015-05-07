<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<link rel="stylesheet" type="text/css" href="styles/foundation.css" />
<link rel="stylesheet" type="text/css" href="styles/normalize.css" />
<link rel="stylesheet" type="text/css" href="styles/css.css">
<link href='http://fonts.googleapis.com/css?family=Lato:100,400' rel='stylesheet' type='text/css'>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script src="js/vendor/modernizr.js"></script>

<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file, 
	// so if you want to load other stylesheets,
	// I would load them with an @import call in your style.css
?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); 
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website. 
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
// Move it if you like, but I would keep it around.
?>

</head>

<body 
	<?php body_class(); 
	// This will display a class specific to whatever is being loaded by Wordpress
	// i.e. on a home page, it will return [class="home"]
	// on a single post, it will return [class="single postid-{ID}"]
	// and the list goes on. Look it up if you want more.
	?>
>



<div class="main-fluid"><!-- start the page containter -->



    <!-- left half -->
	<section id="leftSection" class="leftSide">

        <div class="row top-half">
            <figure id="left-image" class="columns small-12 left-image"></figure>
            <div class="striped-overlay"></div>
            <!-- <div class="vignette"></div> -->
        </div>

        <div class="row bottom-half"></div>
        
    </section>
    <!-- end left half -->


    <!-- right half -->
    <section id="rightSection" class="">


        <div class="row top-half">

        <article class="business-card">

                <header class="business-card-header columns small-12">
                    <h1>Mustafa Ishaq</h1>
                    <h3>Web Developer</h3>
                    <h3>Chicago , Illinois</h3>
                    <h3>moose @ moosecodes . com</h3>
                    <!-- <h3>312.810.2010</h3> -->
                </header>

                <footer class="business-card-footer columns small-12">
                    <!-- <nav>
                        <span class="columns small-4"><a href="">Work</a></span>
                        <span class="columns small-4"><a href="">Experience</a></span>
                        <span class="columns small-4"><a href="">Contact</a></span>
                        <span class="columns small-2"><a href="">Recreation</a></span>
                    </nav> -->
                    <?php wp_nav_menu( array( 'theme_location' => 'secondary_navigation' ) ); // Display the user-defined menu in Appearance > Menus ?>
                </footer>

        </article>

        <!-- <div class="vignette"></div> -->
        </div>

            
            

            <div class="row bottom-half"></div>
        <!-- <canvas id="myCanvas" height="300" width="300"></canvas> -->
    </section>
    <!-- end right half -->


    <!-- fastener sits on top -->
    <div id="fastener" class="logo">
        <div class="loader-bg" id="loader-bg"></div>
        <i class="i i-logo">
            <svg xmlns="http://www.w3.org/2000/svg" id="logo" version="1.1" x="0" y="0" width="44" height="32" viewBox="0 0 44 32" enable-background="new 0 0 44 32" xml:space="preserve">
                <clipPath id="logo-clippath">
                    <rect x="1" y="1" width="42" height="30"></rect>
                </clipPath>
                    <rect id="logo-fill-1" x="1" y="1" clip-path="url(#logo-clippath)" width="42" height="30" style="fill: rgb(81, 88, 105);"></rect>
                    <rect id="logo-fill-2" x="1" y="1" clip-path="url(#logo-clippath)" width="42" height="30" style="fill: rgb(81, 88, 105);"></rect>
                    <path id="logo-mask" d="M0 0v32h44V0H0zM8 30c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6S11.3 30 8 30zM8 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6S11.3 14 8 14zM28 30h-8V2h8V30zM42 30h-8V2h8V30z">
                </path>
            </svg>
        </i>
    </div>
    <!-- end fastener -->
