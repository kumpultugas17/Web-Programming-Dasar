<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggal</title>
</head>
<body>
   <select name="" id="">
        <?php 
            for ($i=1; $i <= 31; $i++) { 
                echo "<option>".$i."</option>";
            }
        ?>
   </select> 
   <select>
        <?php 
            $x = 12;
            while ($x >= 1) { 
            echo "<option>".$x."</option>";
            $x--;
            }
        ?>
   </select>
   <select>
        <?php 
            $t = 1990;
            do {
                echo "<option>".$t."</option>";
                $t++;
            } while ($t <= 2020);
        ?>
   </select>
</body>
</html>