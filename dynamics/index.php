<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
        <title>Título bonito</title>
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php

$size = $_POST["size"];

echo "<table border='2'>";

for ($i = 0; $i < $size; $i++) {
    echo "<tr>";

    for ($j = 0; $j < $size; $j++) {
        if ($i % 2 === $j % 2) {
            echo "<td><img src='../assets/blanco.png'></td>";
        } else {
            echo "<td><img src='../assets/negro.png'></td>";
        }
    }

    echo "</tr>";
}

echo "</table>";

?>

</body>

</html>

