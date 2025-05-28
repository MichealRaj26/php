<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>

<body>
    <h1>Operators in PHP</h1>
    <?php
        /* 
    Operators are special symbols that perform operations on variables and values.
    1. Arithmetic Operators
    2. Logical Operators
    3. Comparison Operators
    4. Error Control Operators
    5. Execution Operators  
    6. Increment/Decrement Operators
    7. String Operators
    8. Array Operators
    9. Bitwise Operators
    10. Assignment Operators
        i) Arithmetic Assignment Operators
        ii) Bitwise Assignment Operators
        iii) String Assignment Operators
    11. Type Operators
    */

    // Easy way to remember PHP operators:
    // Arithmetic, Assignment, Comparison, Logical, Increment/Decrement, String, Array, Bitwise, Error Control, Execution, Type
    // Mnemonic: "A Amazing Cat Loves Ice-cream And Biscuits Every Evening Time"
    // (A)rithmetic, (A)ssignment, (C)omparison, (L)ogical, (I)ncrement/Decrement, (S)tring, (A)rray, (B)itwise, (E)rror Control, (E)xecution, (T)ype

    // 1. Arithmetic Operators
    echo "<h2>Arithmetic Operators</h2>";
    $a = 10;
    $b = 5;
    echo "Addition: " . ($a + $b) . "<br>"; // Addition

    echo "Subtraction: " . ($a - $b) . "<br>"; // Subtraction

    echo "Multiplication: " . ($a * $b) . "<br>"; // Multiplication
    
    echo "Division: " . ($a / $b) . "<br>"; // Division

    echo "Modulus: " . ($a % $b) . "<br>"; // Modulus

    echo "Exponentiation: " . ($a ** $b) . "<br>"; // Exponentiation is an operator that raises the first operand to the power of the second operand
    echo "<br>";

    // 2. Assignment Operators  
    // Assignment operators are used to assign values to variables.
    echo "<h2>Assignment Operators</h2>";

    $x = 10; // Assignment
    echo "Value of x: " . $x . "<br>";

    $x += 5; // Addition assignment
    echo "After x += 5, value of x: " . $x . "<br>"; // 15

    $x -= 3; // Subtraction assignment
    echo "After x -= 3, value of x: " . $x . "<br>"; // 12

    $x *= 2; // Multiplication assignment
    echo "After x *= 2, value of x: " . $x . "<br>"; // 24

    $x /= 4; // Division assignment
    echo "After x /= 4, value of x: " . $x . "<br>"; // 6

    $x %= 2; // Modulus assignment
    echo "After x %= 2, value of x: " . $x . "<br>"; // 0

    $x **= 3; // Exponentiation assignment
    echo "After x **= 3, value of x: " . $x . "<br>"; // 0

    // 3. Comparison Operators
    echo "<h2>Comparison Operators</h2>";
    $a = 10;
    $b = 5;

    echo "Equal (==): " . ($a == $b ? 'true' : 'false') . "<br>"; // Equal
    echo "Identical (===): " . ($a === $b ? 'true' : 'false') . "<br>"; // Identical (checks value and type)
    echo "Not Equal (!=): " . ($a != $b ? 'true' : 'false') . "<br>"; // Not Equal
    echo "Not Identical (!==): " . ($a !== $b ? 'true' : 'false') . "<br>"; // Not Identical (checks value and type)
    echo "Greater Than (>): " . ($a > $b ? 'true' : 'false') . "<br>"; // Greater Than
    echo "Less Than (<): " . ($a < $b ? 'true' : 'false') . "<br>"; // Less Than
    echo "Greater Than or Equal To (>=): " . ($a >= $b ? 'true' : 'false') . "<br>"; // Greater Than or Equal To
    echo "Less Than or Equal To (<=): " . ($a <= $b ? 'true' : 'false') . "<br>"; // Less Than or Equal To
    echo "<br>";

    // 4. Logical Operators
    echo "<h2>Logical Operators</h2>";
    $x = true;
    $y = false;

    echo "AND (&&): " . ($x && $y ? 'true' : 'false') . "<br>"; // AND

    echo "OR (||): " . ($x || $y ? 'true' : 'false') . "<br>"; // OR

    echo "NOT (!): " . (!$x ? 'true' : 'false') . "<br>"; // NOT

    // 5. Increment/Decrement Operators

    echo "<h2>Increment/Decrement Operators</h2>";

    $i = 5;
    echo "Original value of i: " . $i . "<br>";
    
    echo "Post-increment (i++): " . $i++ . "<br>"; // Post-increment
    echo "Value of i after post-increment: " . $i . "<br>"; // 6
    echo "Pre-increment (++i): " . ++$i . "<br>"; // Pre-increment
    echo "Value of i after pre-increment: " . $i . "<br>"; // 7
    echo "Post-decrement (i--): " . $i-- . "<br>"; // Post-decrement
    echo "Value of i after post-decrement: " . $i . "<br>"; // 6
    echo "Pre-decrement (--i): " . --$i . "<br>"; // Pre-decrement
    echo "Value of i after pre-decrement: " . $i . "<br>"; // 5
    echo "<br>";

    // 6. String Operators
    echo "<h2>String Operators</h2>";
    $str1 = "Hello";
    $str2 = "World";
    
    echo "Concatenation (.) : " . ($str1 . " " . $str2) . "<br>"; // Concatenation
    $str1 .= " " . $str2; // Concatenation assignment

    echo "Concatenation Assignment (.=) : " . $str1 . "<br>"; // Concatenation assignment
    echo "<br>";

    // 7. Array Operators

    echo "<h2>Array Operators</h2>";
    $array1 = [1, 2, 3];
    $array2 = [3, 4, 5];
    $array3 = [1, 2, 3];

    echo "Union (+): ";

    print_r($array1 + $array2); // Union

    echo "<br>";

    echo "Equality (==): " . ($array1 == $array3 ? 'true' : 'false') . "<br>"; // Equality

    echo "Identity (===): " . ($array1 === $array3 ? 'true' : 'false') . "<br>"; // Identity

    echo "Inequality (!=): " . ($array1 != $array2 ? 'true' : 'false') . "<br>"; // Inequality

    echo "Non-identity (!==): " . ($array1 !== $array2 ? 'true' : 'false') . "<br>"; // Non-identity

    echo "Array Difference (-): ";

    print_r($array1 - $array2); // Array Difference

    echo "<br>";

    // 8. Bitwise Operators

    echo "<h2>Bitwise Operators</h2>";
    $a = 5; // 0101 in binary
    $b = 3; // 0011 in binary

    echo "Bitwise AND (&): " . ($a & $b) . "<br>"; // Bitwise AND
    echo "Bitwise OR (|): " . ($a | $b) . "<br>"; // Bitwise OR
    echo "Bitwise XOR (^): " . ($a ^ $b) . "<br>"; // Bitwise XOR
    echo "Bitwise NOT (~): " . (~$a) . "<br>"; // Bitwise NOT
    echo "Left Shift (<<): " . ($a << 1) . "<br>"; // Left Shift
    echo "Right Shift (>>): " . ($a >> 1) . "<br>"; // Right Shift
    echo "<br>";

    // 9. Error Control Operators
    echo "<h2>Error Control Operators</h2>";
    // The error control operator (@) suppresses error messages that would otherwise be displayed.
    
    $file = @fopen("non_existent_file.txt", "r"); // Suppress error if file does not exist
    if (!$file) {
        echo "Error suppressed: Unable to open file.<br>";
    } else {
        fclose($file);
    }

    echo "<br>";

    // 10. Execution Operators
    echo "<h2>Execution Operators</h2>";
    // The execution operator (`) is used to execute shell commands and return the output as a string.
    
    $output = `ls`; // Execute the 'ls' command
    echo "Output of 'ls' command:<br>";
    
    echo "<pre>" . htmlspecialchars($output) . "</pre>"; // Display the output in a preformatted way

    echo "<br>";

    // 11. Type Operators
    echo "<h2>Type Operators</h2>";

    $var = 10;

    echo "Is Integer (is_int): " . (is_int($var) ? 'true' : 'false') . "<br>"; // Check if variable is an integer

    echo "Is Float (is_float): " . (is_float($var) ? 'true' : 'false') . "<br>"; // Check if variable is a float

    echo "Is String (is_string): " . (is_string($var) ? 'true' : 'false') . "<br>"; // Check if variable is a string

    echo "Is Array (is_array): " . (is_array($var) ? 'true' : 'false') . "<br>"; // Check if variable is an array

    echo "Is Object (is_object): " . (is_object($var) ? 'true' : 'false') . "<br>"; // Check if variable is an object

    echo "Is Null (is_null): " . (is_null($var) ? 'true' : 'false') . "<br>"; // Check if variable is null

    echo "Is Resource (is_resource): " . (is_resource($var) ? 'true' : 'false') . "<br>"; // Check if variable is a resource

    echo "Is Scalar (is_scalar): " . (is_scalar($var) ? 'true' : 'false') . "<br>"; // Check if variable is a scalar value

    echo "Is Numeric (is_numeric): " . (is_numeric($var) ? 'true' : 'false') . "<br>"; // Check if variable is numeric

    echo "Is Callable (is_callable): " . (is_callable($var) ? 'true' : 'false') . "<br>"; // Check if variable is callable


    echo "Is Iterable (is_iterable): " . (is_iterable($var) ? 'true' : 'false') . "<br>"; // Check if variable is iterable

    echo "Is Countable (is_countable): " . (is_countable($var) ? 'true' : 'false') . "<br>"; // Check if variable is countable

    echo "<br>";

    
    


    ?>
</body>

</html>