<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>PRShooters</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
        <link rel="stylesheet" type="text/css" href="css/my.css" />
        <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
        <style type="text/css">
            body{ font:20px/1.3 arial; }

            #mainText{ width:50%; xmin-width:500px; margin:50px auto; }

            word{ display:inline-block; }

            a letter{ color:inherit; }
            letter{ display:inline-block; white-space:pre; background:none; transition:.4s; }
            letter.initial{ opacity:0; text-shadow:0 0 9px; color:#FFF; -webkit-transform:scale(8); -webkit-transform-origin:150% 50%; transform:scale(8); transform-origin:150% 50%; }

            .credit{ position:absolute; bottom:10px; left:10px; padding:10px 20px; color:#777; font-size:11px; text-align:center; background:#EEE; border-radius:10px;  }
        </style>
    </head>
    <body id="page">
        <ul class="cb-slideshow">
            <li><span>Image 01</span></li>
            <li><span>Image 02</span></li>
            <li><span>Image 03</span></li>
            <li><span>Image 04</span></li>
            <li><span>Image 05</span></li>
            <li><span>Image 06</span></li>
        </ul>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <div id="logo">
                    <image src="images/Logo.png" width="300px" height="250" />
                </div>
                <div id="menu">
                    <ul id="navigation">
                        <li class="active">
                            <a href="index.php"><h2>Home</h2></a>
                        </li>
                        <li>
                            <a href="about.php"><h2>About</h2></a>
                        </li>
                        <li>
                            <a href="contact.php"><h2>Contact</h2></a>
                        </li>
                        <li>
                            <a href="follow.php"><h2>Follow</h2></a>
                        </li>
                    </ul>
                </div>
                <div id="aboutcontent1">
                    <div id='mainText'>
                        <h1> ABOUT </h1>
                        <h2><strong>"PR Shooters" will be a</strong></h2>
                        <h2><strong>interactive and innovative</strong></h2>
                        <h2><strong>3D game. It will provide</strong></h2>
                        <h2><strong>a new gaming experince. This</strong></h2>
                        <h2><strong>will be hosted in PubNub</strong></h2>
                        <br>
                    </div>

                </div>


                <div id="aboutcontent2"> 
                    <h1><strong><em>wait for few days.. to get addicted..</em> </strong></h1>
                </div>

            </header>
        </div>

        <script src="js/letterer.js"></script>
        <script>
            var lettersContainer = document.getElementById('mainText'),
                    letters,
                    delay = 200,
                    delayJump = 33,
                    totalLetters;

            // Break to letters
            letterer(lettersContainer);
            // get all "letter" elements

            letters = lettersContainer.getElementsByTagName('letter');
            totalLetters = letters.length;

            for (var i = 0; i < totalLetters; i++) {
                doTimer(letters[i], delay);
                delay += delayJump;
                // if the letter is a "space" then pause for a little more, to have some delay between words 
                if (letters[i].innerHTML == ' ')
                    delay += delayJump * 3;
            }

            function doTimer(letter, delay) {
                setTimeout(function() {
                    letter.removeAttribute('class');
                }, delay);
            }
        </script>
    </body>
</html>