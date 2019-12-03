<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Równanie liniowe</title>
</head>
<body>
<?php
  $a = -1;
  $b = -5;
  $c = -1;

  if ($a == 0 && ($b != $c)) {
    echo "Równanie: <pre>0x + $b ≠ $c</pre> <br />";
    echo "Rozwiązanie: <b>Brak rozwiązań, równanie sprzeczne<b> <br />";
  } else if ($a == 0 && ($b == $c)) {
    echo "Równanie: <pre>$b = $c</pre> <br />";
    echo "Rozwiązanie: <b>Każda liczba rzeczywista<b> <br />";
  } else {
    // Równanie oznaczone
    if ($b >= 0) {
      if ($a == 1) {
        echo "Równanie: <pre>x + $b = $c</pre> <br />";
      } else if ($a == -1) {
        echo "Równanie: <pre>-x + $b = $c</pre> <br />";
      } else {
        echo "Równanie: <pre>$a"."x + $b = $c</pre> <br />";
      }
    } else {
      $absB = abs($b);
      if ($a == 1) {
        echo "Równanie <pre>x - $absB = $c</pre> <br />";
      } else if ($a == -1) {
        if ($b < 0) {
          echo "Równanie <pre>-x - $absB = $c</pre> <br />";
        } else {
          echo "Równanie <pre>-x + $absB = $c</pre> <br />";
        }
      } else {
        if ($b < 0) {
          echo "Równanie <pre>$a"."x - $absB = $c</pre> <br />";
        } else {
          echo "Równanie <pre>$a"."x + $absB = $c</pre> <br />";
        }
      }
    }
    $rozwiazanie = ($c - $b) / $a;
    // if ($c == 0) {
    //   $rozwiazanie = -1 * $b / $a;
    // } else if ($b == 0) {
    //   $rozwiazanie = $c / $a;
    // } else if ($b == $c) {
    //   $rozwiazanie = 0;
    // } else {
    //   $rozwiazanie = ($c - $b) / $a;
    // }
    echo "Rozwiązanie: <b>x = $rozwiazanie</b>";
  }
?>
</body>
</html>