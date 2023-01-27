<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Write a factorial program using for loop in php</h1>
    <?php 
    $num = 3;
    $factorial =1;
    for($x=$num; $x>=1; $x--)
    {
        $factorial = $factorial*$x;
    }
    echo "The factorial of $num is $factorial";
    ?>
    <hr>
    <h1>Write a program to create Chess board in PHP using for loop</h1>
    <table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
        <?php
        for($row=1; $row<=8; $row++)
        {
            echo "<tr>";
            for($colum=1; $colum<+8; $colum++)
            {
                $total=$row+$colum;
                if($total%2==0)
                {
                    echo "<td height=35px width=30px bgcolor=#FFFFFF> 
                    </td>";
                }
                else {
                    echo"<td height=35px width=30px bgcolor=#000000></td>";
                }
            }
            echo"</td>";
        }
        ?>
        </table>

    
</body>
</html>