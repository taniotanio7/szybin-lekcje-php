<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Równanie kwadratowe</title>
</head>
<body>

<?php
  function getRownanie() {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $returnStr = "";

    if (empty($a) || empty($b) || empty($c)) {
      return "Błąd: brakujące dane wejściowe";
    }

    if ($a == 0) {
      return "Błąd: to nie jest równanie kwadratowe";
    }

    if ($a == 1) {
      $aRownanie = "x<sup>2</sup>";
    } else if ($a == -1) {
      $aRownanie = "-x<sup>2</sup>";
    } else {
      $aRownanie = $a."x<sup>2</sup>";
    }

    if ($b == 1) {
      $bRownanie = "+ x";
    } else if ($b == -1) {
      $bRownanie = "- x";
    } else if ($b > 0) {
      $bRownanie = "+ $b"."x";
    } else {
      $bRownanie = $b."x";
    }

    if ($c > 0) {
      $cRownanie = "+ $c";
    } else {
      $cRownanie = "$c";
    }

    $rownanie = "<b>$aRownanie $bRownanie $cRownanie = 0</b>";
    $returnStr .= "Równanie: $rownanie <br />";
    $delta = pow($b, 2) - 4 * $a * $c;
    $returnStr .= "Δ = $delta <br />";

    if ($delta < 0) {
      $returnStr .= "Delta mniejsza niż 0, brak rozwiązań";
    } else if ($delta == 0) {
      $returnStr .= "Równanie posiada jedno rozwiązanie: <br />";
      $rozwiazanie = -1 * $b + 2 * $a;
      $returnStr .= "<pre>x = $rozwiazanie</pre>";
    } else {
      $returnStr .= "Równanie posiada dwa rozwiązania: <br />";
      $rozwiazanie1 = (-1 * $b - sqrt($delta)) / 2 * $a;
      $rozwiazanie2 = (-1 * $b + sqrt($delta)) / 2 * $a;
      $returnStr .= "<pre>x<sub>1</sub> = $rozwiazanie1</pre>";
      $returnStr .= "<pre>x<sub>2</sub> = $rozwiazanie2</pre>";
    }

    return $returnStr;
  }

  echo getRownanie();
?>
<br /><br />
<a href="zad2.html">⬅ Powróć do formularza</a>

</body>
</html>