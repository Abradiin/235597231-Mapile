<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise for Php</title>
</head>
<body>
    <?php
        //Exercise 1:
        echo "<h1>Exercise 1: </h1>";
        $a = 15;
        $b = 7;

        $sum = ($a + $b);
        $diff = ($a - $b);
        $product = ($a * $b);
        $quo = ($a / $b);

        echo "<p>The sum of ". $a. " and ". $b. " is ". $sum. "</p>";
        echo "<p>The difference of ". $a. " and ". $b. " is ". $diff. "</p>";
        echo "<p>The product of ". $a. " and ". $b. " is ". $product. "</p>";
        echo "<p>The quotient of ". $a. " and ". $b. " is ". $quo. "</p>";

        //Exercise 2:
        echo "<h1>Exercise 2: </h1>";
        $value = 20;

        if ($value % 2 == 0) {
            echo "<p>The number is even</p>";
        } else {
            echo "<p>The number is not even</p>";
        }   
        
        if ($value > 0){
            echo "<p>The number is positive</p>";
        } elseif ($value < 0){
            echo "<p>The number is negative</p>";
        } elseif ($value == 0){
            echo "<p>The number is equal to zero</p>";
        } else {
            echo "<p>The number is not even</p>";
        }
                
    ?>
</body>
</html>