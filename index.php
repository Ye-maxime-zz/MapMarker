<?php
    require './vendor/autoload.php';
    $faker = Faker\Factory::create();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Title</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 style="padding-left: 30px;">Où acheter le meilleur <strong>chocolat pain</strong></h1>

   <div class="container">
        <div class="list">
            <?php for($i=0; $i<30; $i++): ?>
                <div class="item js-marker" data-lat="<?= $faker->latitude(43,44) ?>" data-lng="<?= $faker->longitude(2,4) ?>" data-price="<?= $faker->numberBetween(0,100) ?>""
                    <img src="https://via.placeholder.com/400x260">
                    <h4>3 barres de chocolat pour le prix de 2!</h4>
                    <p>
                        Ici une petite description qui explique pourquoi c'est mieux ici
                    </p>
                </div>
            <?php endfor; ?>
        </div>

    <div class="map" id="map">
    </div>
<script src="vendor.js"></script>
<script src="app.js"></script>
</body>
</html>

<!--直接打开右上角browser 看功能-->

<!--参考的链接-->
<!--https://www.grafikart.fr/tutoriels/google-maps-airbnb-1006-->
<!--https://www.grafikart.fr/tutoriels/google-maps-marker-personnalise-1005-->
<!--https://developers.google.com/maps/documentation/javascript/tutorial?hl=zh-cn-->