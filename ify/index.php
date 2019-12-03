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

    /* if (warunek) {
      instrukcja1;
      instrukcja2;
      itd
    }

    if (warunek) instrukcja1

    if (warunek)
    instrukcja1

    if (warunek) {
      instruckaj
    } else {
      instruckaj3
    }

    if (warunek) {
      ...
    } else if (warunek2) {
      ...
    } else {
      ...
    }

    Zagnieżdżanie
    if (warunek) {
      if (warunek2) {
        ...
      } else {
        ...
      }
    } else {
      ...
    }
    */

    // Operator warunkowy (turnary operator)

    // wyrażenie1 ? wyrażenie2 : wyrażenie3
    $max = 12;
    $wynik = ($max == 100) ? "równe" : "nie równe";

    print $wynik;

  ?>
</body>
</html>