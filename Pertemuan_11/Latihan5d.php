<!DOCTYPE html>
<html lang="en">
<style>
  .margin {
    margin-bottom: 20px;
    margin-left: 10px;
    margin-right: 10px;
  }
</style>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <hr color="grey">
</head>

<body>
  <div class="margin">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      Masukan Angka: <input type="number" name="fname">
      <input type="submit" value="Tampilkan">
    </form>
  </div>

  <div class="margin">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST['fname'];
      for ($i = $name; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
          echo $j . " ";
        }
        echo "<br />";
      }
    }
    ?>
  </div>

</html>