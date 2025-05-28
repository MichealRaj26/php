<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables in PHP</title>
</head>

<body>
    <h1>Variables in PHP</h1>

    <?php
        // Defining variables by $
        $name = "John Doe";
        $age  = 30;
    ?>

    <h2>Welcome Mr. <?php echo $name; ?></h2>

    <?php
        // unset() function
        // unset($name);
        // Trying to access an unset variable will result in a notice
        // echo $name; // This will not output anything since $name is unset

        // displaying the variable type
        $name = "John Doe";
        $age = 30;
        $is_student = true;

        var_dump($name);
        var_dump($age);
        var_dump($is_student);
    ?>
</body>

</html>