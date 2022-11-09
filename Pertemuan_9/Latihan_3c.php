<?php

function pangkat($a, $b)
{
  $bil = $a;
  for ($i = 0; $i < ($b - 1); $i++) {
    $bil = $bil * $a;
  }
  return $bil;
}x

echo "5 pangkat 4" . " " . "= " . pangkat(5, 4);
