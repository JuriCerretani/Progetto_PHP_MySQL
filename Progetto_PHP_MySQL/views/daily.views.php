<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>Progetto PHP MySQL</title>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>

    <?php
    require "../controllers/read.php";
    require "../models/trash.php";
    require "../models/database.php";
    require "../helpers/dbcls.php";
    ?>

    <?php trashToday($DT,$dailyTrash); ?>

    <a href="../">back</a>

  </body>
</html>
