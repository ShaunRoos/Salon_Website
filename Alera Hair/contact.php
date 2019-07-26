<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel="stylesheet" type="text/css">        
        <title>Alera Hair</title>
    </head>
    <body>
        <header>
            <nav>
                <div class="row">
                    <ul class="main-nav js--main-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html#features">About  Us</a></li>
                        <li><a href="http://jollyginseng.com">Shop</a></li>
                        <li><a href="contact.php#contact">Contact</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                </div>
            </nav>        
            
        </header>
         <section class="section-form" id="form">
            <div class="row">
                <h2 id="contact">We're happy to hear from you</h2>
            </div>
             &nbsp;
            <div class="row">
                <form method="post" action="mailer.php" class="contact-form">
                    
                     
                    <div class="row">  
                        <?php
                        if($_GET['success'] == 1) {
                            echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";
                        }
                        
                        if($_GET['success'] == -1) {
                            echo "<div class=\"form-messages error\">Something went wrong. Please try again!</div>";
                        }
                        ?>
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>                  
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Message</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Send it!">
                        </div>
                    </div>
                    
                </form>
                
            </div>
        </section>
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="about.html#about">About Us</a></li>
                        <li><a href="http://jollyginseng.com">Shop</a></li>
                        <li><a href="contact.php#features">Contact</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/alerahair2016"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="https://twitter.com/AleraHair?lang=en"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/jolly-ginseng-a02494162"><i class="ion-social-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>Freedom to Natural Beauty</p>
                <p>
                    Copyright &copy; 2018 by Alera Hair. All rights reserved.
                </p>
            </div>
        </footer>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
            <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="vendors/js/jquery.waypoints.min.js"></script>
            <script src="resources/js/script.js"></script>
    </body>


</html>