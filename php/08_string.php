<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>

<body>
    <h1>String in PHP</h1>

    <?php
        // string is a sequence of characters
        $string1 = "Hello, World!";

        //echo strlen($string1) . "<br>"; // length of the string

        // strlen() function returns the length of a string

        echo "The word `" . $string1 . "`contains " . strlen($string1) . " characters.<br>"; // length of the string

                                                                                                 // str_word_count() function returns the number of words in a string
        echo "The word '" . $string1 . "' contains " . str_word_count($string1) . " words.<br>"; // number of words in the string

                                                                                              // strrev() function reverses a string
        echo "The reverse of the word '" . $string1 . "' is '" . strrev($string1) . "'.<br>"; // reverse of the string

                                           // strpos() function returns the position of the first occurrence of a substring in a string
                                           // syntax: strpos(string, substring, start)
        echo strpos("Deaf", "f") . "<br>"; // position of the first occurrence of "World" in the string

        // str_replace() function replaces all occurrences of a substring in a string
        // syntax: str_replace(search, replace, string)

        echo str_replace("World", "PHP", "Hello, World!") . "<br>"; // replace "World" with "PHP" in the string

    ?>

</body>

</html>