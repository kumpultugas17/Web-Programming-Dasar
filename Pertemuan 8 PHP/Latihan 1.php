<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $a = 1;
    while ($a <= 10) {
        echo $a.'';
        $a++;
    }
    echo "<br>========================<br>";
    $b = 1;
    do {
        echo $b.'';
        $b++;
    } while ($b <= 10);
    echo "<br>========================<br>";
    $ab = 10;
    $ac = 9;
    echo "Anak ayam turun 10";
    do {
        echo "<br>Anak ayam turun ".$ab.", Mati satu tinggal ".$ac;
        $ab--;
        $ac--;
    } while ($ab >= 1);
    ?>
</body>
</html>