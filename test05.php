<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Welcome<br>
    <?php
        $mid_score = 10;
        $final_score = 50;
        $stu_name = "สมชาย";
        $empSalary = 15000.75;
        $total_score = $mid_score + $final_score;
        
        echo "สวัสดี " . $stu_name;
        echo "<br>";
        echo $mid_score . " + " . $final_score . " = " . $total_score;
        echo '<br>';
        echo "{$mid_score} + {$final_score} = {$total_score}";

        //Constant คือ ค่าคงที่
        const NUM1 = 20;//แบบที่1
        echo '<br>';
        echo NUM1;
        echo '<br>';
        define('WOW' , 'ComSci');//แบบที่2
        echo WOW;

        echo '<br>';

        echo 50 > 100 ? "Hi..." : "Hey...";
        echo '<br>';

        



    ?>

</body>
</html>