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
    margin-top: 150px;
    margin-bottom: 35px;
    text-align: center;
    font-family: Verdana;
    font-size: 40px;
    color: darkolivegreen;
  }

  .kotak {
    position: fixed;
    width: 550px;
    height: px;
    text-align: center;
    left: 50%;
    margin-left: -279px;
    background-color: white;
    border: 8px solid darkgrey;
  }

  .formisian {
    margin-bottom: 40px;
    margin-top: 40px;
    margin-left: 50px;
    margin-right: 50px;
    font-family: Verdana;
    font-size: 20px;
    word-spacing: 1em;



  }

  .benarsalah {
    margin-top: 27px;
    font-style: italic;
    color: red;

  }

  .login {
    margin-top: 15px;
    margin-bottom: 20px;
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
        <label for="username">Username </label>
        <input style="font-size: 17px; width:25; border: 4px solid darkgrey" type="text" name="username" id="username">
      </div>
      <div class="formisian">
        <label for="password">Password </label>
        <input type="password" s style="font-size: 17px; width:25; border: 4px solid darkgrey" name="password" id="password">
      </div>
      <div class="benarsalah">
        <?php if (isset($error)) : ?>
          <p>Username atau Password salah!!</p>
        <?php endif; ?>
      </div>
      <div class="login">
        <button style="font-size: 17px;color:white;background-color:blue; padding: 5px 10px;border-style: outset;" type="submit" name="submit">Log in</button>
      </div>
    </form>


</body>

</html>