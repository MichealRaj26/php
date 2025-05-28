<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math in PHP</title>
</head>

<body>

    <h1>Math in PHP</h1>

    <?php 
   echo (pi() . "<br>"); // Returns the value of pi

   // min() and max() functions
   echo (max(1, 2, 3, 4, 5) . "<br>"); // Returns the largest value from the arguments
   echo (min(1, 2, 3, 4, 5) . "<br>"); // Returns the smallest value from the arguments

    // abs() function
    echo (abs(-5) . "<br>"); // Returns the absolute value of a number

    // sqrt() function
    echo (sqrt(16) . "<br>"); // Returns the square root of a number example : 4

    // round() function
    echo (round(3.6) . "<br>"); // Rounds a floating-point number to the nearest integer

    // rand() function
    echo (rand() . "<br>"); // Generates a random integer
    
    echo (rand(1, 10) . "<br>"); // Generates a random integer between the specified range (inclusive)

       
    ?>


</body>

</html>