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

        <form action="result.php" method="post">
            <div>
                <lable>Investment Amount:</lable>
                <input type="text" name="investment" placeholder="0"><br><br>

                <lable>Yearly Interest Rate:</lable>
                <input type="text" name="rate" placeholder="0"><br><br>

                <lable>Number of Years:</lable>
                <input type="text" name="year" placeholder="0">
            </div>

            <div>
                <input type="submit" value="Calculate">
            </div>
        </form>
    </div>
</body>
</html>
