<?php
if (isset($_GET["angka"])) {
} $N = $_GET["angka"];
for ($i = $N; $i >= 1; $i--) {
  for ($x = 1; $x <= $i; $x++) {
    echo $x . " ";
  }
  echo "<br />";
}

