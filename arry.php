<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Hello Rishabh <br>";
    $arr = array("rishabh","Rishi","Rajat","Rachit");
    for ($i=0; $i < count($arr); $i++) { 
        echo ucfirst($arr[$i]);
        echo "<br>";
    }
    ?>
    <hr>
    <?php
    echo "Hello Rishi <br>";
    $arr = array("applles","bananas","harpic","bread");
    foreach ($arr as $value) {
        echo  strtoupper($value) ."<br>";
    }
    ?>
</body>
</html>