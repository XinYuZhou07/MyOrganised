<?php
/*
    $json = file_get_contents('http://localhost/myorganized/APIs/usr/getRoutines.php');
    $data = json_decode($json, true);
    echo $json;
    $routines = $data['routines'];
    foreach ($routines as $routine) {
        echo $routine['title'] . ' - ' . $routine['price'];
    }
*/

include("../APIs/usr/getRoutines.php");

?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyOrganized – Store</title>

  <!-- Libraries -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
  <link href="https://fonts.cdnfonts.com/css/segoe-ui-variable-static-display" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- CSS globali -->
  <link rel="stylesheet" href="../CSS/fontSettings.css">
  <link rel="stylesheet" href="../CSS/interCSS.css">

  <!-- CSS pagina Store -->
  <link rel="stylesheet" href="../CSS/store.css">
</head>

<body>

  <!-- NAVBAR (gestita da interCSS) -->
  <div class="navBar">
    <div class="navBar-L">
      <span class="navBar-Brand">MyOrganized</span>
      <div class="navBar-Link">
        <a href="./home.html">Panoramica</a>
        <a href="#" class="Active">Store</a>
        <a href="./planner.html">Planner</a>
      </div>
    </div>

    <div class="navBar-R">
      <span class="navBar-UsrName">John Appleseed</span>
      <img class="navBar-Avatar" src="./img/defaultProfile.jpg" alt="">
    </div>
  </div>

  <!-- CONTENUTO -->
  <div class="mainView">
    <div class="storeContent">

                <!-- HTML -->
        <?php foreach ($tagsInfos as $tag) { ?>
            <article class="store-card">
                <div class="store-cardImageWrapper">
                    <img src="./img/gordon.jpg" alt="" class="store-cardImage">
                </div>

                <div class="store-cardBody">
                    <div class="store-cardMeta"><?php echo htmlspecialchars($tag['metatag']) ?></div>
                    <h4 class="store-cardTitle"><?php echo htmlspecialchars($tag['title']) ?></h4>
                    <p class="store-cardText"><?php echo htmlspecialchars($tag['subtitle']) ?></p>
                </div>

                <div class="store-cardFooter">
                    <span class="store-cardPrice"><?php echo $tag['price'] ?>€</span>
                    <button class="store-cardButton">
                        Scopri di Più <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </article>
        <?php } ?>
      </div>

    </div>
  </div>

  
</body>

</html>
