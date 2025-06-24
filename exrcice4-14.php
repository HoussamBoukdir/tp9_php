<?php
$les_nombres = [];
for ($i = 0; $i < 10; $i++) {
    $les_nombres[] = rand(1, 20);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      echo '<pre>';
      print_r($les_nombres);
      echo '</pre>';
      // tester si le chiffre 11 existe dans le tableau
      // premier methode
        if (in_array(11, $les_nombres)) {
            echo "Le chiffre 11 existe dans le tableau.";
        } else {
            echo "Le chiffre 11 n'existe pas dans le tableau.";
        }
    ?>    </br> <?php
      // deuxieme methode
        $trouve = true;
        foreach ($les_nombres as $nombre) {
            if ($nombre != 11) {
                $trouve = false;
                break;
            }
        }
        if ($trouve = false) {
            echo "Le chiffre 11 n'existe pas dans le tableau.";
        } else {
            echo "Le chiffre 11 existe dans le tableau.";
            
        }
        ?>
</body>
</html>