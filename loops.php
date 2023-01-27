<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Write a program to count 5 to 15 using PHP loop</h1>
    <?php 
    for($count=5; $count<=15; $count++)
    echo $count."<br>";
    ?>
    <hr>
    <h1>Write a factorial program using for loop in php</h1>
    <?php
    $num ="3";
    $factorial= 1;
    for($x=$num; $x>=1; $x--)
    {
        $factorial = $factorial*$x;
    }
    echo "the factorial of $num is $factorial";
    ?>
    <hr>
    <h1>Write a Program to create given pattern with * using for loop</h1>
    <?php
    for($i=1; $i<=8; $i++)
    {
        for($j=$i; $j<=8; $j++)
        {
            echo "*";
        }
        echo "<br>";
    }
    ?>
    <hr>
    <h1>Write a Program to create given pattern with * using for loop</h1>
    <?php
    for($i=1; $i<=8; $i++)
    {
        for($j=1; $j<=$i; $j++)
        {
            echo"*";
        }
        echo"<br>";
    }
    ?>
</body>
</html>