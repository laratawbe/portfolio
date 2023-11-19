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
    <title>Lara Tawbeh - Main Page</title>
    
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/icons.css">
    <link rel="stylesheet" href="../css/logout.css">
</head>
<body>

    <div class="row" id="header">
        <div id="dropdown-menu">
            <span><i class="ico burger-ico"></i>MENU</span>
            <div class="dropdown-content">
                <ul>

                    <a href="Resume.php">
                        <li><i class="ico ico-l resume-ico"></i>CV</li>
                    </a>
                    <a href="gallery.php">
                        <li><i class="ico ico-l gallery-ico"></i>Gallery</li>
                    </a>
                    <a href="ContactInfo.php">
                        <li><i class="ico ico-l user-ico"></i>Contact Us!</li>
                    </a>
                </ul>
            </div>
        </div>
        <div id="hello-user">
      <?php
        echo '<span id="welcome">' . (isset($_SESSION['username']) ? 'Hello, ' . $_SESSION['username'] : '') . '</span>';
        echo '<span class="logout"><a href="../BE/logout.php" class="anchor">Logout</a></span>';
    ?>
    </div>
    </div>

    <div id="middle-bubble">
        <img src="../images/ana.png" alt="Lara Tawbeh photo" id="profile-image">
        <div id="name"><h1>Lara Tawbeh</h1></div>

        <div id="content">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. lorem. Maecenas facilisis justo et libero convallis, in laoreet ligula elementum. Phasellus vestibulum erat eu interdum consectetur. Nullam id odio nulla. Sed semper id risus a luctus. Curabitur ut turpis eget augue congue hendrerit. ILorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec libero lacinia, volutpat odio ut, aliquet est. Vestibulum lacinia, lorem at bibendum ultricies, lorem mi facilisis odio, sit amet facilisis dui odio at lorem. Maecenas facilisis justo et libero convallis, in laoreet ligula elementum. Phasellus vestibulum erat eu interdum consectetur. Nullam id odio nulla. Sed semper id risus a luctus. Curabitur ut turpis eget augue congue hendrerit. ILorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec libero lacinia, volutpat odio ut, aliquet est. Vestibulum lacinia, lorem at bibendum ultricies, lorem mi facilisis odio, sit amet facilisis dui odio at lorem. Maecenas facilisis justo et libero convallis, in laoreet ligula elementum. Phasellus vestibulum erat eu interdum consectetur. Nullam id odio nulla. Sed semper id risus a luctus. Curabitur ut turpis eget augue congue hendrerit. ILorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec libero lacinia, volutpat odio ut, aliquet est. Vestibulum lacinia, lorem at bibendum ultricies, lorem mi facilisis odio, sit amet facilisis dui odio at lorem. Maecenas facilisis justo et libero convallis, in laoreet ligula elementum. Phasellus vestibulum erat eu interdum consectetur. Nullam id odio nulla. Sed semper id risus a luctus. Curabitur ut turpis eget augue congue hendrerit. ILorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec libero lacinia, volutpat odio ut, aliquet est. Vestibulum lacinia, lorem at bibendum ultricies, lorem mi facilisis odio, sit amet facilisis dui odio at lorem. Maecenas facilisis justo et libero convallis, in laoreet ligula elementum. Phasellus vestibulum erat eu interdum consectetur. Nullam id odio nulla. Sed 
            </p>
        </div>
    </div>




 

</body>
</html>
