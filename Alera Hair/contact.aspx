﻿<%@ Page Language="VB" AutoEventWireup="false" CodeFile="contact.aspx.vb" Inherits="contact" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css"/>
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css"/>
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css"/>
        <link rel="stylesheet" type="text/css" href="resources/css/style.css"/>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel="stylesheet" type="text/css"/>
        
        <title>Alera Hair</title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
        <header>
            <nav>
                <div class="row">
                    <ul class="main-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About  Us</a></li>
                        <li><a href="http://jollyginseng.com">Shop</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>        
            
        </header>
         <section class="section-form" id="form">
            <div class="row">
                <h2>We're happy to hear from you</h2>
            </div>
             &nbsp;
            <div class="row">
                </div>
                    <div class="row">
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
                            &nbsp;<asp:Button ID="Button1" runat="server" Text="Send it!" />
                        </div>
                    </div>
                    
                </form>
                
            </div>
        </section>
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>
                    Copyright &copy; 2018 by Alera Hair. All rights reserved.
                </p>
            </div>
        </footer>
    </div>
    </form>
</body>
</html>
