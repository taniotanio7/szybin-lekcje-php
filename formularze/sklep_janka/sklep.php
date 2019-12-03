<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sklep Janka</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<h1>
  Części samochodowe Janka
</h1>

<h2>Wyniki zamówienia</h2>

<?php
  function getReference($ref) {
    switch($ref) {
      case "staly-klient":
        return "Stały klient";
      case "reklama":
        return "Reklama TV";
      case "internet":
        return "Internet";
      case "znajomi":
        return "Znajomi";
    }
  }

  $CENAOPON = 400;
  $CENAOLEJU = 100;
  $CENASWIEC = 20;
  $opony = intval($_POST["opony"]);
  $olej = intval($_POST["olej"]);
  $swiece = intval($_POST["swiece"]);
  $polecenie = getReference($_POST["ref"]);

  if (empty($opony) || empty($olej) || empty($swiece) || empty($polecenie)) {
    echo "<b>Nie złożono żadnego zamówienia!!!</b>";
  } else {


    setlocale(LC_TIME, "pl_PL");
    $date = strftime("%H:%M, %d %B %Y");
    echo "<p>Zamówienie przyjęte o: $date</p>";
    echo "<p>Zamówienie Państwa wygląda następująco:</p>";
    echo "<ul>
      <li>$opony opon</li>
      <li>$olej butelek oleju</li>
      <li>$swiece swiec zaplonowych</li>
    </ul>";

    $suma = $opony + $olej + $swiece;
    echo "<p>Zamówionych częśći: $suma</p>";
    $sumaNetto = $CENAOPON * $opony + $CENAOLEJU * $olej + $CENASWIEC * $swiece;
    echo "<p>Cena netto: $sumaNetto zł</p>";
    $sumaBrutto = $sumaNetto * 1.22;
    echo "<p>Cena brutto: $sumaBrutto zł</p>";

    if ($opony < 10) {
      $znizka = 0;
    } else if ($opony <= 49) {
      $znizka = 0.05;
    } else {
      $znizka = 0.1;
    }

    $znizkaStr = $znizka * 100;

    echo "<p>Zniżka: $znizkaStr%</p>";

    echo "<p><b>Po zniżce:</b></p>";
    $sumaNetto -= $sumaNetto * $znizka;
    echo "<p>Cena netto: $sumaNetto zł</p>";
    $sumaBrutto = $sumaNetto * 1.22;
    echo "<p>Cena brutto: $sumaBrutto zł</p>";

    echo "<p>Wiadomośc o sklepie Janka: $polecenie<b></b></p>";
  }
?>



</body>
</html>