<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $investment= $_POST['investment'];
        $rate=$_POST['rate'];
        $years= $_POST['year'];
        $futureValue=$investment *(1+$rate/100)** $years;
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Future Value Calculator</h1>
        <lable>Investment Amount:</lable>
        <span>$<?php echo $investment?></span> <br><br>

        <lable>Yearly Interest Rate:</lable>
        <span><?php echo $rate?>%</span><br><br>

        <lable>Number of Years</lable>
        <span><?php echo $years?></span><br><br>

        <lable>Future Value:</lable>
        <span>$<?php echo $futureValue?></span>
    </div>
</body>
</html>
