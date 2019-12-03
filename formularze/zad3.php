<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Wynik</title>
</head>
<body>

<?php

  function getOperation() {
    $a = $_REQUEST["a"];
    $b = $_REQUEST["b"];
    $operacja = $_REQUEST["operacja"];

    if (empty($a) || $b == "") {
      return "Błąd: brakujące dane";
    }

    switch ($operacja) {
      case "+":
        $result = $a + $b;
        return "$a + $b = $result";
      case "-":
        $result = $a - $b;
        return "$a - $b = $result";
      case "*":
        return "$a * $b = ".$a*$b;
      case "/":
        if ($b == 0) {
          return "Błąd: Nie można dzielić przez zero!";
        }
        return "$a / $b = ".$a/$b;
      default:
        return "Błąd: Nie wybrano operatora!";
    }
  }

  echo getOperation();
?>

<br />
  <a href="zad3.html">⬅ Powróć do formularza</a>

</body>
</html>