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
    Function proccessMark($marksArr){
        $sum = 0;
        foreach ($marksArr as $value) {
            $sum += $value;
        }
        return $sum;
    }
    $rishabh = [99,97,94,97,96,89];
    $rishabhMarks = proccessMark($rishabh);
     
    $xyz = [56,95,48,98,76,87];
    $xyzMarks = proccessMark($xyz);
     
    echo "Total marks scored by Rishabh out of 600 is $rishabhMarks <br>";
    echo "Total marks scored by xyz out of 600 is $xyzMarks <br>";

    ?>
    <hr>
    <?php
    echo "Hello Rishi <br>";
    function avgMarks($avgArr){
        $sum = 0;
        $i = 1;
        echo "<table border =1><tr> <th>marks</th> <th>Avg</th></tr>";
        foreach ($avgArr as  $value) {
            $sum += $value;
            $i++;
        }
        return $sum/$i;
    }
    $rishi = [99,97,95,95,92,99];
    $rishiAvg = avgMarks($rishi);

    $abc = [96,88,90,98,65,97,];
    $abcAvg = avgMarks($abc);
     echo "<td>$rishiAvg</td>";
     echo "<td>$abcAvg</td>";
    echo "</table>";
    ?>
    
</body>
</html>