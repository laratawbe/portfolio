<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lara Tawbeh CV</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/icons.css">
    <link rel="stylesheet" href="../css/logout.css">
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

        <div id="hello-user">
             <?php
                 echo '<span id="welcome">' . (isset($_SESSION['username']) ? 'Hello, ' . $_SESSION['username'] : '') . '</span>';
                 echo '<span class="logout"><a href="../BE/logout.php" class="anchor">Logout</a></span>';
            ?>
        </div>

     
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
                            <i class="fa fa-phone" style="font-size:20px; ;"></i>
                        </div>  
                        <div id="phonenb-div" class="paddingbottom">
                            <p style="color: white;">70667793</p>
                        </div>  


                        <div id="addressicon-div" class="icon paddingbottom">
                            <i class="fa fa-map-marker"style="font-size:20px "></i>
                        </div>
                        <div class="paddingbottom">
                            <p style="color: white;">Bchamoun,Lebanon</p>
                        </div>


                    </div>
                 </div>
                <div id="education-div" class="wop">
                    <div class="paddingbottom">
                        <h3 class="h34left">Education</h3>
                        <hr id="hrleft">
                    </div>
                
                <h4 class="h34left paddingbottom">BS in Computer Science</h4>
                <pre style="color: white;" class="paddingbottom">
<a href="https://www.lau.edu.lb/" class="link"><em>Lebanese American University</em></a>
2021-present
Current CGPA: 3.7
                </pre>
                <h4 class="h34left paddingbottom">Lebanese Baccalaureate - GS</h4>
                <pre style="color: white;">
<em>Beirut International School</em>
2006–2021
                </pre>
            </div>

            <div id="languages-div" class="wop">
                <div class="paddingbottom">
                    <h3 class="h34left"> Languages</h3>
                    <hr id="hrleft">
                </div>

                <ul>
                    <li class="white indented">English</li>
                    <li class="white indented">Arabic</li>
                </ul>

            </div>
        </div>
     </div>



        <div id="rightsidebar-div"> 

            <div id="wrapright-div" class="wrap">

                <div id="profile-div" class="wop">
                    <div class="paddingbottom">
                        <h3 class="h3right">Profile</h3>
                        <hr id="hrright">
                    </div>
                    <p> Motivated computer science student seeking a challenging internship position in AI and ML. I am looking forward to contributing to my workplace by applying my skills to real-world projects. I am a detail-oriented problem solver, eager to learn from professionals and colleagues to grow in a collaborative environment.</p>
                </div>

                <div id="experience-div" class="wop">
                    <div class="paddingbottom paddingtop">
                        <h3 class="h3right">Professional Experience</h3>
                        <hr id="hrright">
                    </div>
                    <p class="title">Software Customer Support Intern</p>
                    <p style="padding-bottom: 3px;"><a href="https://edm.com.lb/" class="linkB"><em>EDM Lebanon</em></a></p>
                    <p class="date">Jul 2023 - Aug2023</p>
                    <ul>
                        <li class="indented">Assisted in identifying and resolving database-related problems to guarantee system integrity.</li>
                        <li class="indented">Assisted in installing, configuring, and maintaining Microsoft SQL Server instances.</li>
                        <li class="indented">Developed and optimized SQL queries for retrieving and manipulating data.</li>
                    </ul>
                </div>

                <div id="projects-div" class="wop">
                    <div class="paddingbottom paddingtop">
                        <h3 class="h3right">Projects</h3>
                        <hr id="hrright">
                    </div>

                    <p class="title">Expense Tracker</p>
                    <p class="date">Nov 2022 – Dec 2022</p>
                    <p class="paddingbottom">The Expense Tracker is a JavaFX-based GUI application that provides an  interface for tracking personal expenses.</p>

                    <p class="title">Car Dealership Management System</p>
                    <p class="date">May 2023 – May 2023</p>
                    <p class="paddingbottom">The Car Dealership Management System is a Java-based GUI application that provides a user-friendly interface for managing a car dealership database.The system uses a MySQL database to store and retrieve data.</p>

                </div>
                <div id="technicalskills-div">
                    <div class="paddingbottom paddingtop">
                        <h3 class="h3right">Technical Skills</h3>
                        <hr id="hrright">
                    </div>
                   
                <div class="div">Java</div>
                <div class="hide">
                    <div class="container">
                        <div class="skills java">
                         90%
                        </div>
                    </div>     
                </div>  
                </div>

                <div class="div">C</div>
                <div class="hide">
                    <div class="container">
                        <div class="skills C">
                            60%
                        </div>
                    </div>

                </div>

                <div class="div">HTML/CSS</div>
                <div class="hide">
                    <div class="container">
                        <div class="skills html-css">
                            30%
                        </div>
                    </div>

                </div>

                <div class="div">MySQL</div>
                <div class="hide">
                    <div class="container">
                        <div class="skills mysql">
                            70%
                        </div>
                    </div>

                </div>

                <div class="div">Microsoft Server SQL</div>
                <div class="hide">
                    <div class="container">
                        <div class="skills mssql">
                            70%
                        </div>
                    </div>

                </div>

                <div class="div">Django/CSS</div>
                <div class="hide">
                    <div class="container">
                        <div class="skills Django">
                            20%
                        </div>
                    </div>

                </div>

                <div class="div">Micrososft Office</div>
                <div class="hide">
                    <div class="container">
                        <div class="skills Mo">
                            90%
                        </div>
                    </div>

                </div>

                <div id="softskills-div" class="wop">
                    <div class="paddingbottom paddingtop">
                        <h3 class="h3right">Soft Skills</h3>
                        <hr id="hrright">
                    </div>

                    <pre>
Communication    |   Teamwork   |   Problem-Solving    |   Leadership   |   Adaptability</pre>

                </div>
                <div id="volunterring-div">
                    <div class="paddingbottom paddingtop">
                        <h3 class="h3right">Volunteering</h3>
                        <hr id="hrright">
                    </div>
                    <p class="title">Tutor</p>
                    <p class="date">2019 - 2022</p>
                    <p>Private tutoring services for high school students in Mathematics, physics, and coding</p>
                </div>

            </div>

        </div>

    </div>
</html>