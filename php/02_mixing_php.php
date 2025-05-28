<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mixing PHP with HTML</title>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    </style>
</head>

<body>

    <h1>Mixing PHP with HTML</h1>

    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>25</td>
            </tr>

            <?php
                echo "
    <tr>
                <td>2</td>
                <td>Johnny</td>
                <td>28</td>
            </tr>
    ";
            ?>

            <tr>
                <td>3</td>
                <td>Jane Smith</td>
                <td>30</td>
            </tr>
        </tbody>
    </table>

</body>

</html>