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
    <title>gallery</title>
    <link rel="stylesheet" href="../css/gallery.css">
    <link rel="stylesheet" href="../css/icons.css">
    <link rel="stylesheet" href="../css/logout.css">
</head>
<body>

    <div class="top-bar">
      
            <a href="home.php">
                <li><i class="ico ico-l home-ico"></i>Home</li>
            </a>
            <a href="ContactInfo.php">
                <li><i class="ico ico-l user-ico"></i>Contact Info</li>
            </a>
            <a href="Resume.php">
                <li><i class="ico ico-l resume-ico"></i>CV</li>
            </a>

            <div id="hello-user">
      <?php
        echo '<span id="welcome">' . (isset($_SESSION['username']) ? 'Hello, ' . $_SESSION['username'] : '') . '</span>';
        echo '<span class="logout"><a href="../BE/logout.php" class="anchor">Logout</a></span>';
    ?>
    </div>
       
    </div>

    <h1 id="gallery">Gallery</h1>

    <div class="gallery" id="dynamic-gallery">

        
    </div>
    

    <script>
       
        fetch('../json/gallery.json')
            .then(response => response.json())
            .then(data => {
                
                const galleryContainer = document.getElementById('dynamic-gallery');

               
                data.images.forEach(imageName => {
                    const label = document.createElement('label');
                    label.setAttribute('for', imageName);

                    const img = document.createElement('img');
                    img.src = `../images/${imageName}`;
                    img.classList.add('my-img');

                    label.appendChild(img);

                    const checkbox = document.createElement('input');
                    checkbox.type = 'checkbox';
                    checkbox.id = imageName;
                    checkbox.classList.add('image-checkbox');

                    const popupContainer = document.createElement('div');
                    popupContainer.classList.add('image-popup');

                    const popupLink = document.createElement('a');
                    popupLink.href = `../pages/gallery.php`;

                    const popupImg = document.createElement('img');
                    popupImg.src = `../images/${imageName}`;

                    popupLink.appendChild(popupImg);
                    popupContainer.appendChild(popupLink);

                    galleryContainer.appendChild(label);
                    galleryContainer.appendChild(checkbox);
                    galleryContainer.appendChild(popupContainer);
                });
            })
            .catch(error => console.error('Error loading gallery:', error));
    </script>





</body>
</html>