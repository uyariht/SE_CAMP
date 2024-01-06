<center>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://i.pinimg.com/564x/09/8f/db/098fdb0d64a4576196030ffea607a9e8.jpg');
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        #container {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 250px;
            height: 300px;
            overflow: auto;
            scrollbar-width: thin;
        }
        #container::-webkit-scrollbar {
            width: 10px;
        }
        #container::-webkit-scrollbar-thumb {
            background-color: #818080;
            border-radius: 4px;
        }
        .left-image, .right-image {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            max-width: 40%;
            border-radius: 5px;
        }
        .left-image {
            left: 5%;
        }
        .right-image {
            right: 5%;
        }
        h1 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Multiplication Table For You </h1>
    <div id="container">
        <img class="left-image" src="https://i.pinimg.com/originals/bc/20/82/bc2082436d50b29ed50c0bc0e93c80cc.gif" alt="Left Image">
        <?php
        for ($i = 1; $i <= 24; $i++) {
            echo "$myinput x {$i} = " . $myinput * $i . '<br/>';
        }
        ?>
        <img class="right-image" src="https://i.pinimg.com/originals/bc/20/82/bc2082436d50b29ed50c0bc0e93c80cc.gif" alt="Right Image">
    </div>
</body>
</html>

</center>
