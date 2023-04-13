<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <h1>This file icludes all the operator that I learn from book ch1 php</h1>
    <?php
        $num1 = 24;
        $num2 = 14;
        echo var_dump($num1 < $num2);
        echo "<br>";
        echo var_dump($num1 > $num2);
        echo "<br>";
        echo var_dump($num1 <= $num2);
        echo "<br>";
        echo var_dump($num1 >= $num2);
        echo "<br>";
        echo var_dump($num1 == $num2);
        echo "<br>";
        echo var_dump($num1 === $num2);
        echo "<br>";
        echo var_dump($num1 != $num2);
        echo "<br>";
        echo var_dump($num1 !== $num2);
        echo "<br>";
        echo var_dump($num1 && $num2);
        echo "<br>";
        echo var_dump($num1 || $num2);
        echo "<br>";
        echo var_dump($num1 XOR $num2);
        echo "<br>";
        echo var_dump(! $num1);
        echo "<br>";
    ?>
</body>
</html>