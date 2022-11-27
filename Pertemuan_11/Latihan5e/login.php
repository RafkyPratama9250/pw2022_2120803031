<?php
if (isset($_POST["submit"])) {
  if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
    header("Location: admin.php");
    exit;
  } else {
    $error = true;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<style>
  body {
    background-color: #eaeaea;
  }

  .judul {
    margin-top: 100px;
    margin-bottom: 40px;
    text-align: center;
    font-family: Verdana;
    ;
  }

  .kotak {
    position: fixed;
    width: px;
    height: px;
    box-shadow: 0 0 5px rgba(0, 0, 0, .05), 2px 2px 5px rgba(0, 0, 0, .1);
    text-align: center;
    left: 50%;
    margin-left: -220px;
    background-color: white;
  }

  .formisian {
    margin-bottom: 50px;
    margin-top: 30px;
    margin-left: 50px;
    margin-right: 50px;


  }
</style>

<head>
  <title>Login</title>
</head>

<body>
  <h1 class="judul">Login</h1>
  <div class="kotak">
    <form action="" method="post">
      <div class="formisian">
        <label for="username">USERNAME :</label>
        <input type="text" name="username" id="username">
      </div>
      <div>
        <label for="password">PASSWORD :</label>
        <input type="text" name="password" id="password">
      </div>
      <div>
        <button type="submit" name="submit">Login</button>
      </div>
    </form>

    <?php if (isset($error)) : ?>
      <p>username atau password salah</p>
    <?php endif; ?>
  </div>

</body>

</html>