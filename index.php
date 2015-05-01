<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="css.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,400' rel='stylesheet' type='text/css'>
    <script src="js/vendor/modernizr.js"></script>
  </head>



<body>



    <section id="leftSection" class="leftSide">

        <div class="top-half">
            <figure id="left-image" class="left-image"></figure>
            <!-- <div class="vignette"></div> -->
        </div>
        <div class="bottom-half">

        </div>
        
    </section>
    <section id="rightSection" class="rightSide">

            <!-- <canvas id="myCanvas" height="300" width="300"></canvas> -->
            
            <article class="middle-section">
                <header class="row">
                    <h1>Mustafa Ishaq</h1>
                    <h3>Web Developer</h3>
                    <h3>Chicago , Illinois</h3>
                    <h3>moose @ moosecodes . com</h3>
                    <!-- <h3>312.810.2010</h3> -->
                </header>
                <footer class="row">
                    <!-- <nav>
                        <span class="columns small-4"><a href="">Work</a></span>
                        <span class="columns small-4"><a href="">Experience</a></span>
                        <span class="columns small-4"><a href="">Contact</a></span>
                        <span class="columns small-2"><a href="">Recreation</a></span>
                    </nav> -->
                </footer>
            </article>

    </section>


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



<script>

        // var canvas = document.getElementById('myCanvas');
        
                        
        // if (canvas.getContext) {
        //     var ctx = canvas.getContext("2d");
               
        //     for (var i=0; i<200; i=i+10*1){
        //         ctx.beginPath();
        //         ctx.arc(i, 15.5, 2, 100, Math.PI*2, true); 
        //         ctx.closePath();
        //         ctx.fill();
        //     }

        //     ctx.strokeStyle = "rgba(255, 255, 255, 1)";
        //     ctx.strokeRect (i, 20.5, 10, 10);
        // }

        
    </script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
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