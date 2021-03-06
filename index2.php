<?php

$to = 'ernestsmillers@gmail.com';
$subject = 'Email from website';

$name = $_POST['name'];
$email = $_POST['email'];

$message = $_POST['message'];

$body = <<<EMAIL

From $name

$message

My email $email
EMAIL;

$header = "From: $email";

if($_POST){
    if($name == '' || $email == '' || $message == ''){
        $feedback = 'Please fill out all the fields';
    }else {
        mail($to, $subject, $body, $header);
        $feedback = 'Thanks for your email';
    }
}
?>



<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head class="no-js">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Ernests Millers</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/main.js"></script>
        <script src="js/jquery.visible.min.js"></script>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">


        <link rel="stylesheet" type="text/css" href="animate.css" />
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script>
        	//paste this code under head tag or in a seperate js file.
        	// Wait for window load
        	$(window).load(function() {
        		// Animate loader off screen
        		$(".se-pre-con").fadeOut("slow");;
        	});
        </script>
        <link href="mediaq.css" rel="stylesheet">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--********************************************************************
                LANDING PAGE - HEADER
        *********************************************************************-->

        <!--****HEADER SPLASH, BUTTON****-->
    <div class="se-pre-con"></div>
    <div class="background animatedParent" id="home-jump">
        <section class="splash-container animated bounceInDown delay-250">
            <div class="splash">
                <h1 class="pageheader" class="animated bounceInDown">Ernests Millers</h1>
                <p>Front-end Developer</p>
            </div>
        </section>
        <div></div>

        <!--****NAVBAR****-->

        <section class="navbar animated bounceInDown delay-250">
            <div class="navbar-center">
                <ul>
                    <li class="hover-jump"><a href="#about-jump" > About </a></li>
                    <li class="hover-jump"><a href="#projects-jump" > Projects </a></li>
                    <li class="hover-jump"><a href="#contact-jump"> Contact </a></li>
               </ul>
           </div>
       </section>
   </div>


        <!--********************************************************************
                ABOUT ME
        *********************************************************************-->

        <section class="section-container grey" id="about-jump">
            <div class="section-wrapper">
                <div class="section-title">
                    <h2>About</h2>
                    <small class="small-text">Bits and pieces about myself.</small>
                </div>
                <div class="section-content">
                    <div class="abouttext">
                        <h3>Ernests Millers</h3>
                        <h4>Web Developer from Bournemouth</h4>
                        <p>
                            I love creating new things, for a while my main interest have been web devolpment. I am mostly experienced in front-end development but I also make servers do stuff. I frequently seek for new website designs and try to catch up with the latest technologies.
                        </p>
                        <p>
                            When it comes to hobbies I could say that I am quite an active guy. I frequently go running near the seaside in mornings to see the beatiful Bournemouth view, I am quite active in gym too. Did I mention I also do martial arts and own a longboard?
                        </p>
                        <a href="Ernests_Millers_CV.pdf" class="resume-button" target="_blank">Preview my Resume to see more</a>
                    </div>
                </div>
            </div>
        </section>

        <!--********************************************************************
                PROJECTS
        *********************************************************************-->

        <section class="section-container blue"  id="projects-jump">
            <div class="section-wrapper">
                <div class="section-title">
                    <h2>Projects</h2>
                    <small class="small-text">Things I create.</small>
                </div>
                <div class="section-content">
                    <div class="project-container clearfix">
                        <div class="project-example">
                            <img src="/img/project.jpg" alt="first-project" class="project-image">
                            <p>
                                Hello
                            </p>
                        </div>
                        <div class="project-example">
                            <img src="/img/project.jpg" alt="second-project" class="project-image">
                        </div>
                        <div class="project-example">
                            <img src="/img/project.jpg" alt="third-project" class="project-image">
                        </div>
                        <div class="project-example">
                            <img src="/img/project.jpg" alt="fourth-project" class="project-image">
                        </div>
                        <div class="project-example">
                            <img src="/img/project.jpg" alt="fifth-project" class="project-image">
                        </div>
                        <div class="project-example">
                            <img src="/img/project.jpg" alt="sixth-project" class="project-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--********************************************************************
                SKILLSET
        *********************************************************************-->

        <section class="section-container grey" id="skillset-jump">
            <div class="section-wrapper">
                <div class="section-title">
                    <h2>Skillset</h2>
                    <small class="small-text">I am certain I can do few things.</small>
                </div>
                <div class="section-content clearfix">
                    <div class='skillset-example'>
                      <figure>
                        <canvas height='120' id='html_css' width='120'></canvas>
                        <figcaption>
                          HTML
                        </figcaption>
                      </figure>
                    </div>
                    <div class='skillset-example'>
                      <figure>
                        <canvas height='120' id='sass' width='120'></canvas>
                        <figcaption>
                          Sass
                        </figcaption>
                      </figure>
                    </div>
                    <div class='skillset-example'>
                      <figure>
                        <canvas height='120' id='jquery' width='120'></canvas>
                        <figcaption>
                          jQuery
                        </figcaption>
                      </figure>
                    </div>
                    <div class='skillset-example'>
                      <figure>
                        <canvas height='120' id='rails' width='120'></canvas>
                        <figcaption>
                          Photoshop
                        </figcaption>
                      </figure>
                    </div>
                    <div class='skillset-example'>
                      <figure>
                        <canvas height='120' id='backbone' width='120'></canvas>
                        <figcaption>
                          PHP
                        </figcaption>
                      </figure>
                    </div>
                    <div class='skillset-example'>
                      <figure>
                        <canvas height='120' id='photoshop' width='120'></canvas>
                        <figcaption>
                          Inkscape
                        </figcaption>
                      </figure>
                    </div>
                </div>
            </div>
        </section>

        <!--********************************************************************
                CONTACT
        *********************************************************************-->

        <section class="section-container blue" id="contact-jump">
            <div class="section-wrapper">
                <div class="section-title">
                    <h2>Get In Touch</h2>
                    <small class="small-text">I am open for anything.</small>
                </div>
                <div class="section-content clearfix">
                    <div class="contact-details">
                        <h4 class="contact-title">Contact details</h4>
                        <p>ernestsmillers@gmail.com</p>
                        <p>07580504257</p>
                    </div>
                    <div class="message-form">
                        <h4 class="contact-title">Send me a message!<h4>
                        <p id="feedback"><?php echo $feedback; ?></p>
                        <form action="#contact-jump" method="POST" name="cform" id="cform" class="clearfix">
                            <input type="text" name="name" id="name" placeholder="Your name..." />
                            <input type="email" name="email" id="email" placeholder="Your email..." />
                            <textarea name="message" id="comments" placeholder="Your message..." style="margin: 0px;" ></textarea>
                            <input type="submit" id="submit" name="send" class="submitBtn" value="Send Message" />
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!--********************************************************************
                Footer
        *********************************************************************-->

        <section class="footer-container grey">
            <ul class="footer-icons clearfix">
                <li class="footer-example">
                    <a href="https://twitter.com/ernestsmillers">
                        <img src="img/twitter.svg" alt="twitter-icon" onmouseover="this.src='img/twitter-hover.svg';" onmouseout="this.src='img/twitter.svg';">
                    </a>
                </li>
                <li class="footer-example">
                    <a href="https://github.com/ErnestsMillers">
                        <img src="img/github.svg" alt="twitter-icon" onmouseover="this.src='img/github-hover.svg';" onmouseout="this.src='img/github.svg';">
                    </a>
                </li>
                <li class="footer-example">
                    <a href="https://uk.linkedin.com/in/ernests-millers-12731ab6">
                        <img src="img/linkedin.svg" alt="twitter-icon" onmouseover="this.src='img/linkedin-hover.svg';" onmouseout="this.src='img/linkedin.svg';">
                    </a>
                </li>
                <li class="footer-example">
                    <a href="https://www.facebook.com/ernests.millers">
                        <img src="img/facebook.svg" alt="twitter-icon"  onmouseover="this.src='img/facebook-hover.svg';" onmouseout="this.src='img/facebook.svg';">
                    </a>
                </li>
            </ul>
            <div>
                <h4>Ernests Millers</h4>
                <p>All rights reserved &copy; </p>
            </div>
        </section>



        <!--********************************************************************
                SCRIPTS
        *********************************************************************-->

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>


        <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/0.2.0/Chart.min.js'></script>
        <script src='js/css3-animate-it.js'></script>
        <script src="js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>-->
    </body>
</html>
