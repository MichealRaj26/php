<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contants</title>
</head>

<body>

    <?php

        // Defining constants
        // syntax: define("CONSTANT_NAME", "value");
        define("PROGRAM", "PHP");
        define("VERSION", "8.2");

        define("NAMES", ["John", "Joel", "Jero"]);

        echo "<h1> Welcome to learn " . PROGRAM . " of Version " . VERSION . "</h1>";

        echo "<h2>Name : " .NAMES[0] . "</h2>";

        echo "<h2>Names: " .NAMES[1] . ", " . NAMES[2] . "</h2>";

    ?>

</body>

</html>