<!DOCTYPE html>
<html>
<head>
    <title>Imagely</title>
    <style>
        body {

            color:white;
            background-color: #212529;
        }
        #image-container {
            width: 500px;
            height: 500px;
            margin: 0 auto;
            position: relative;
        }
        #image-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <h1>Imagely</h1>
    <div id="image-container">
        <img src="images/img1.png" alt="Image 1" />
        <img src="images/img2.png" alt="Image 2" />
    </div>
    <script>
        var images = document.querySelectorAll("#image-container img");
        var currentImageIndex = 0;
        setInterval(function() {
            images[currentImageIndex].style.display = "none";
            currentImageIndex = (currentImageIndex + 1) % images.length;
            images[currentImageIndex].style.display = "block";
        }, 4000);
    </script>
</body>
</html>
<?php /**PATH /home/vagrant/imagely_laravel/imagely/resources/views/welcome.blade.php ENDPATH**/ ?>