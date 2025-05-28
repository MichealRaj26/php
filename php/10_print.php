<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print in PHP</title>
</head>

<body>
    <?php
        // Using print in PHP
        print "<h1>Welcome to PHP Learning Path</h1>";

        print "<p>This is a simple demonstration of using the print statement in PHP.</p>";
        print "<p>Print is similar to echo, but it can only take one argument and always returns 1.</p>";
        print "<p>The difference between print and echo is that print is a function, while echo is a language construct.</p>";
        print "<p>Here is an example of differentiate the print and echo</p>";
        print "<p>Using print:</p>";
        print "<p>print('This is printed using the print function.');</p>";
        print "<p>Using echo:</p>";
        echo "<p>echo 'This is printed using the echo construct.';</p>";

        print "<p>Both print and echo can be used to output strings, but echo can take multiple parameters.</p>";
        print "<p>For example, you can use echo like this:</p>";
        echo "<p>echo 'This is ', 'a string with multiple parts.';</p>";
        print "<p>In conclusion, both print and echo are used to output data in PHP, but they have slight differences in usage.</p>";   

        print "<p>Here is a list of PHP features:</p>";
        print "<ul>";
        print "<li>Variables</li>";
        print "<li>Control Structures</li>";
        print "<li>Functions</li>";
        print "<li>Classes and Objects</li>";
        print "<li>File Handling</li>";
        print "</ul>";
        print "<p>Happy coding!</p>";
    ?>
</body>

</html>