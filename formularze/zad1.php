<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Zad 1</title>
</head>
<body>

<?php
  $imie = $_REQUEST["imie"];
  $nazwisko = $_REQUEST["nazwisko"];
  $email = $_REQUEST["email"];
  $wiek = $_REQUEST["wiek"];
  $br = "<br />";
  $pelnoletni;

  if ($wiek >= 18) {
    $pelnoletni = "pełnoletni";
  } else {
    $pelnoletni = "nie pełnoletni";
  }

  if (empty($imie) || empty($nazwisko) || empty($email) || empty($wiek)) {
    echo "Brakujące dane!";
  } else {
    echo "Imię: <b>$imie</b>".$br;
    echo "Nazwisko <b>$nazwisko</b>".$br;
    echo "E-mail <b>$email</b>".$br;
    echo "Wiek: <b>$wiek</b>".$br;
    echo "<b>$pelnoletni</b>";
  }
?>

</body>
</html>