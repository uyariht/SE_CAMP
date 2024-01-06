<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://i.pinimg.com/originals/08/aa/e4/08aae4694586dc13e60fc8ef053befcf.jpg');
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        #container {
            text-align: center;
            background-color: #fff3de;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input {
            padding: 10px;
            font-size: 16px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div id="container">
    <h1>Multiplication Table</h1>
    <form method="post" action="{{ url('/my-multiply') }}">
        @csrf
        <input type="text" name="myinput">
        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
