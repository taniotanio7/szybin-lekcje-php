<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php
  // Tablica suberglobalna
  $imie = $_GET['imie'];
  $nazwisko = $_GET['nazwisko'];

  /*
  Funkcja isset() - zwraca wartość logiczną
  Jeżeli istnieje jedna zmienna lub więcej, które posiadają wartości, zwraca true

  Funkcja empty() - zwraca wartość logiczną
  Jeżeli zmienna nie istnieje lub posiada przypisany pusty ciąg tekstowy, 0, "0", NULL lub nie posiada przypisanej wartości to zwróci true
  */

  $errors = [];

  if (empty($nazwisko)) {
    array_push($errors, "Podaj nazwisko!");
  }

  if (empty($imie)) {
    array_push($errors, "Podaj imię!");
  }

  if (!empty($errors)) {
    $str = "";
    foreach ($errors as $val) {
      $str += $val;
    }
    echo $str;
  } else {
    echo "Witaj na mojej stronie <b>".$imie." ".$nazwisko."</b>! <br />";
  }

?>
</body>
</html>