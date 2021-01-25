<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exempel-08</title>
</head>
<body>
    <?php
    echo "<h1>PHP NUMBERS<h1>";
    $x = 5664;
    $y = 56.8898;
    $z = 3.5e671;
    $q = acos(6);
    $test = rida;


    var_dump(is_int($x));
    echo "<br>";
    var_dump(is_float($x));
    echo "<br>";
    var_dump(is_float($y));
    echo "<br>";
    var_dump($z);
    echo "<br>";
    var_dump($q);
    echo "<br>";
    var_dump (is_numeric($x));
    echo "<br>";
    var_dump (is_numeric($test));
    echo "<br>";

   // cast float into int
    $test1 = 2345.678;
    $int_cast = (int)$test1;
    echo $int_cast;
    echo "<br>";

    //cast string into int
    $test2 = "2345.678";
    $int_cast = (int)$test2;
    echo $int_cast;



    ?>


</body>
</html>