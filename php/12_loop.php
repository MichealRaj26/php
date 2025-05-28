<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>

    <h1>Loops in PHP</h1>
    <p>Loops are used to execute the same block of code repeatedly.</p>
    <p>PHP supports several types of loops:</p>
    <ul>
        <li>for loop
            <pre><code>
for ($i = 0; $i &lt; 10; $i++) {
    // code to be executed
}
            </code></pre>
        </li>
        <li>while loop
            <pre><code>
$i = 0;
while ($i &lt; 10) {
    // code to be executed
    $i++;
}
            </code></pre>
        </li>
        <li>do...while loop
            <pre><code>
$i = 0;
do {
    // code to be executed
    $i++;
} while ($i &lt; 10);
            </code></pre>
        </li>
        <li>foreach loop (for arrays)
            <pre><code>
$colors = array("red", "green", "blue");
foreach ($colors as $color) {
    // code to be executed
}
            </code></pre>
        </li>
    </ul></code>



</body>

</html>
