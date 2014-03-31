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

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/fancyInput.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src='js/fancyInput.js'></script>
    <script type="text/javascript" src="js/my.js"></script>
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


            <script type='text/javascript'>
                function subscribe(e, x)
                {

                    if ((cod = e.keyCode ? e.keyCode : e.which) == 13)
                    {
                        if (window.XMLHttpRequest) {
                            xmlhttp = new XMLHttpRequest();
                        } else {
                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }

                        xmlhttp.onreadystatechange = function()
                        {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                            {
                                document.getElementById("outdiv").innerHTML = xmlhttp.responseText;
                            }
                        }
                        xmlhttp.open("GET", "subscribe.php?mail=" + x, true);
                        xmlhttp.send();

                    }

                }
            </script>
            <div id="newContent1">
                <div id="mainText">
                    <h1><strong>NEW WORD... NEW PEOPLE... GET READY FOR A FRESH JOURNEY</strong></h1>
                    <h2><strong>WITH PTSHOOTERS</strong></h2>

                </div>
            </div>

            <div id="newContent" >
                <div id='content'>
                    <section class='input'>
                        <h2>SUBSCRIBE HERE TO GET MORE UPDATES...</h2>
                        <div>                                
                            <input type='text' name="subemail" placeholder='type your mail address...' onkeypress='subscribe(event, this.value);'>


                        </div>
                    </section>
                </div>
            </div>
            <div id="outdiv">

                <?php
                if (isset($m))
                    echo $m;
                ?>
            </div>



        </header>
    </div>
    <script src='js/fancyInput.js'></script>
    <script>
                                (function() {
                                    var viewTogglers = $('menu.radio input');

                                    $(document).on('keydown', function(e) {
                                        if (e.key == 'tab' || e.keyCode == 9) {
                                            var $checked = viewTogglers.filter(':checked');
                                            var $next = viewTogglers.eq(viewTogglers.index($checked) + 1);
                                            if (!$next.length) {
                                                $next = viewTogglers.first();
                                            }
                                            $next.prop("checked", true).change();

                                            return false;
                                        }
                                    });
                                })();

                                $('section :input').val('').fancyInput()[0].focus();

                                // Everything below is only for the DEMO
                                function init(str) {
                                    var input = $('section input').val('')[0],
                                            s = 'Place your email address here'.split('').reverse(),
                                            len = s.length - 1,
                                            e = $.Event('keypress');

                                    input.nextElementSibling.className = '';

                                    var initInterval = setInterval(function() {
                                        if (s.length) {
                                            var c = s.pop();
                                            fancyInput.writer(c, input, len - s.length).setCaret(input);
                                            input.value += c;
                                            //e.charCode = c.charCodeAt(0);
                                            //input.trigger(e);

                                        }
                                        else
                                            clearInterval(initInterval);
                                    }, 150);
                                }

                                init();

                                $('menu').on('click', 'button', toggleEffect);
                                $('menu.radio').on('change', 'input', changeForm).find('input:first').prop('checked', true).trigger('change');

                                // change effects
                                function toggleEffect(num) {
                                    var className = '';
                                    idx = $(this).index() + 1,
                                            $fancyInput = $('.fancyInput');

                                    if (idx > 1)
                                        className = 'effect' + idx;

                                    $('#content').prop('class', className);
                                    $fancyInput.find(':input')[0].focus();

                                    $(this).addClass('active').siblings().removeClass('active');
                                }

                                function changeForm(e) {
                                    // radio buttons stuff
                                    var page = this.value,
                                            highlight = $(e.delegateTarget).find('> div'),
                                            label = $(this.parentNode),
                                            marginLeft = parseInt(label.css('margin-left'), 10),
                                            xPos;

                                    highlight.css({'left': label.position().left + marginLeft, 'width': label.width()});

                                    // page change stuff
                                    xPos = '-' + label.index() * 50;
                                    $('#content').css('transform', 'translateX(' + xPos + '%)');

                                    setTimeout(function() {
                                        $('#content').find('.' + page + ' :input')[0].focus();
                                    }, 100);
                                }

                                // social sharing stuff
                                setTimeout(addSocial, 500);

                                function addSocial() {
                                    // tweet button
                                    var tweeter = $('<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>');
                                    // facebook 'like' button
                                    var fbLike = $('<iframe class="fbLike" src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fdropthebit.com%2Fdemos%2Ffancy_input%2FfancyInput.html&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;font=arial&amp;action=like&amp;height=35&amp;colorscheme=light&amp;layout=button_count&amp;appId=2398652648"></iframe>');
                                    $('.social').append(fbLike, tweeter);

                                    !function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (!d.getElementById(id)) {
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src = "http://platform.twitter.com/widgets.js";
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }
                                    }(document, "script", "twitter-wjs");

                                    window.getComputedStyle(fbLike[0]).getPropertyValue('top');
                                    $('.social').addClass('show');
                                }
                                ;
    </script>
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