<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 100%;
            margin: 0 auto;
            padding: 0 20px;
            box-sizing: border-box;
        }
        .header {
            text-align: center;
            padding: 20px 0;
        }
        .navbar {
            text-align: center;
            padding: 10px 0;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .navbar a {
            text-decoration: none;
            padding: 0 10px;
            color: #d4bd5f;
            font-size: 24px;
            margin-right: 70px;
        }
        .content {
            max-width: 100%;
            margin: 0 auto;
            padding: 0;
            box-sizing: border-box;
        }
        .content img {
            max-width: 100%;
            height: auto;
        }
        .gallery {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .gallery img {
            width: 30%;
            margin-right: 10px;
            margin-left: 10px;
        }

        h2 {
            text-align: center;
            width: 250px;
            height: 67px;
            color: white;
            background-color: #D4BD5F;
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>
</head>
<body>
    <center>
    <div class="container">
        <div class="header">
            <img src="assets/dist/img/himavari.png" alt="Himawari Logo" width="216" height="87">
        </div>
        <div class="navbar">
            <a href="#">HOME</a>
            <a href="#">MAKE UP</a>
            <a href="#">SKINCARE</a>
            <a href="#">TRICKS</a>
            <a href="#">BEST SELLER</a>
            <a href="#">SHOP</a>
        </div>
        <div class="content">
            <div class="gallery">
                <img src="assets/dist/img/IMG_1239.WEBP" alt="Image 1">
                <img src="assets/dist/img/IMG_1236.JPG" alt="Image 2">
                <img src="assets/dist/img/IMG_9956.PNG" alt="Image 3">
            </div>
            <br>
            <h2>COMPLEXION</h2>
            <br>
            <div class="gallery">
                <img src="assets/dist/img/IMG_5310.JPG" alt="Image 4">
                <img src="assets/dist/img/IMG_5305.JPG" alt="Image 5">
                <img src="assets/dist/img/IMG_9948.PNG" alt="Image 6">
            </div>
        </div>
    </div>
</center>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\SE_CAMP\example-app\resources\views/ekaew.blade.php ENDPATH**/ ?>