<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        hr {
            border: 2px solid black;
        }
    </style>
</head>

<body>

    <?php

    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* &nbsp";
        }
        echo "<br>";
    }

    echo "<hr>";

    for ($i = 5; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* &nbsp";
        }
        echo "<br>";
    }

    echo "<hr>";

    for ($j = 1; $j <= 10; $j = $j + 2) {
        for ($k = 10; $k > $j; $k--) {
            echo "&nbsp";
        }
        for ($l = 1; $l <= $j; $l++) {
            echo "*";
        }

        echo "<br>";
    }

    echo "<hr>";


    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* &nbsp";
        }
        echo "<br>";
    }

    echo "<hr>";

    for ($a = 1; $a <= 5; $a++) {
        for ($j = 6; $j > $a; $j--) {
            echo "&nbsp &nbsp";
        }
        for ($b = 1; $b <= $a; $b++) {
            echo " *";
        }

        echo "<br>";
    }





    ?>


</body>

</html>