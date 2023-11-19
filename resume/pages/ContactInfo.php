<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me - Lara Tawbeh CV</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="navigation" class="clearfix">
        <a href="home.php">
            <i class="ico ico-l home-ico"></i>Home
        </a>
        <a href="Resume.php">
            <i class="ico ico-l resume-ico"></i> CV
        </a>
        <a href="gallery.php">
            <i class="ico ico-l gallery-ico"></i>Gallery
        </a>
    </div>

    <div id="wrapper-div" class="clearfix"> 
        <div id="leftsidebar-div"> 
            <div id="wrapleft-div" class="wrap">
               
                <div id="general-div" class="wop">
                    <h1 id="name">Lara Tawbeh</h1>
                    <img src="../images/ana.png" alt="Lara Tawbeh photo"/>
                    <div class="clearfix">
                        <div id="emailicon-div" class="icon paddingbottom">
                            <i class="fa fa-envelope"></i>
                        </div>  
                        <div id="emaillink-div" class="paddingbottom">
                            <a href="mailto:laratawbe16@gmail.com" class="link">laratawbe16@gmail.com</a>
                        </div>  
                        <div id="phoneicon-div" class="icon paddingbottom">
                            <i class="fa fa-phone" style="font-size:20px;"></i>
                        </div>  
                        <div id="phonenb-div" class="paddingbottom">
                            <p style="color: white;">70667793</p>
                        </div>  
                        <div id="addressicon-div" class="icon paddingbottom">
                            <i class="fa fa-map-marker" style="font-size:20px;"></i>
                        </div>
                        <div class="paddingbottom">
                            <p style="color: white;">Bchamoun, Lebanon</p>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>

        <div id="rightsidebar-div"> 
            <div id="wrapright-div" class="wrap">
                <div id="contact-me" class="wop">
                    <div class="paddingbottom">
                        <h3 class="h3right">Contact Me</h3>
                        <hr id="hrright">
                    </div>
                    <p>If you'd like to get in touch with me, you can reach out through the following:</p>
                    <ul>
                        <li>
                            <div id="contact-div" class="wop">
                                <div class="paddingbottom">
                                    <h3 class="h34left">Contact Me</h3>
                                </div>
                                <form action="#" method="post">
                                    <div class="paddingbottom">
                                        <label for="name">Name:</label>
                                        <input type="text" id="name" name="name" required>
                                    </div>
                                    <div class="paddingbottom">
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email" required>
                                    </div>
                                    <div class="paddingbottom">
                                        <label for="message">Message:</label>
                                        <textarea id="message" name="message" rows="4" required></textarea>
                                    </div>
                                    <div class="paddingbottom">
                                        <button type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </li>             
                    </ul>
                </div>

                <div id="other-info" class="bubble">
                    <h3 class="h3right">Other Info</h3>
                    <hr class="hrright">
                    <p>This is some other useful information.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
