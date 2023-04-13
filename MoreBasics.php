<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            background-color : yellow;
            color : red;
            margin : auto;
        }
    </style>
</head>
<body>
    <div class="container">
        Hello World
    </div>
    <?php
        $age = 18;
        if($age >18){
            echo "you can get voting card.";
        } else {
            echo "you can't get voting card.";
        }
    ?>
</body>
</html>