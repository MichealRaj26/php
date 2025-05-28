<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataType in PHP</title>
</head>

<body>

    <h1>Data type in PHP</h1>

    <?php
        // String
        $string = "Hello, World!";
        var_dump($string);
        echo "<br>";

        // Integer
        $integer = 42;
        var_dump($integer);
        echo "<br>";

        // Float
        $float = 3.14;
        var_dump($float);
        echo "<br>";

        // Boolean
        $boolean = true;
        var_dump($boolean);
        echo "<br>";

        // Array
        $array = ["apple", "banana", "cherry"];
        var_dump($array);
        echo "<br>";

        // Object
        class Car
        {
            public $color;
            public $model;

            public function __construct($color, $model)
            {
                $this->color = $color;
                $this->model = $model;
            }
        }

        $car = new Car("red", "Toyota");
        var_dump($car);
        echo "<br>";

        // NULL
        $nullValue = null;
        var_dump($nullValue);
        echo "<br>";

        // Resource (Example: Database connection)
        // Note: Resources are not easily displayed with var_dump, so we will just mention it.
        $resource = fopen("example.txt", "w");
        if ($resource) {
            echo "Resource opened successfully.<br>";
            fclose($resource); // Close the resource after use
        } else {
            echo "Failed to open resource.<br>";
        }
                                      // Type Casting
        $stringToInt = (int) $string; // Casting string to integer
        var_dump($stringToInt);
        echo "<br>";
        $intToString = (string) $integer; // Casting integer to string
        var_dump($intToString);
        echo "<br>";

        // Checking data types
        if (is_string($string)) {
            echo "The variable 'string' is of type string.<br>";
        }

        // Octal value
        $octalValue = 0123; // Octal representation of 83
        var_dump($octalValue);
        echo "<br>";

        // Hexadecimal value
        $hexValue = 0x1A; // Hexadecimal representation of 26
        var_dump($hexValue);
        echo "<br>";

        // Scientific notation
        $scientificValue = 1.23e4; // 1.23 * 10^4
        var_dump($scientificValue); 
        echo "<br>";

        echo "<br>";
        // Integer Max Value
        echo "Integer Max Value is: ".PHP_INT_MAX;

        echo "<br>";

        // Type Conversion
        $speed = 507.623; // speed in km/h
        
        echo "Speed in km/h: " . $speed . "<br>";
        
        // cast to integer
        $newSpeed = (integer) $speed;
        echo "Speed in km/h after type conversion: " . $newSpeed . "<br>";

        // Checking the type of the variable
        $data = "Micheal Learning PHP";

        echo "is String". is_string($data) . "<br>";

        $data = 12;

        echo "is int". is_integer($data) . "<br>";

        $data = 12.5;
        echo "is float". is_float($data) . "<br>";


        // get type of variable
        $data = "Micheal Learning PHP";
        echo "Type of variable is: " . gettype($data) . "<br>";

        // get type of variable
        $data = 12;
        echo "Type of variable is: " . gettype($data) . "<br>";
        // get type of variable
        $data = 12.5;

        echo "The " . $data . " is a " . gettype($data) . "<br>";
    ?>



</body>

</html>