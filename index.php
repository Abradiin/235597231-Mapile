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

        //Exercise 3:
        echo "<h1>Exercise 3: </h1>";;

    echo "FizzBuzz:<br>";
    for ($i = 1; $i <= 100; $i++) {
        if($i % 3 == 0){
            if($i % 5 == 0){
                echo "FizzBuzz, ";
            }
            else{
                echo "Fizz, ";
            }
        }
        elseif($i % 5 == 0){
            if($i % 3 == 0){
                echo "FizzBuzz, ";
            }
            else{
                echo "Buzz, ";
            }
    }
    }
    echo"<br>";
    echo"<br>";

    echo"Fibonacci:<br>";
    $n = 10;  
    $fib = [0, 1]; 

    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    foreach ($fib as $num) {
        if ($num % 2 == 0) {
            echo $num . " ";
        }
    }
?>

    <?php

        //Exercise 4
    echo "<h1>Exercise 4: </h1>";
    echo"<br>";
    echo"Greeting function:<br>";
    function greet($name) {
        return "Good day, " . $name . "! Nice meeting you!";
    }
    echo greet("Ibrahim");
    echo"<br>";
    echo"<br>";
    echo"Square function:<br>";

    function square($num) {
        return $num * $num;
    }
    
    echo"Square of number 10: ";
    echo square(10);
?>
  
    <!--Exercise 5-->
    <h1>Exercise 5: <br></h1>
    <h5>HTML Form:<br></h5>
    <h2>Enter Some Text:</h2>
        <form action="repo.php" method="post">
            <input type="text" name="user_text" required>
            <button type="submit">Submit</button>
        </form>
                

</body>
</html>