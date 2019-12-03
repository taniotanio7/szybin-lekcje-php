<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Wynik</title>
  <style>
    td {
      padding: 5px;
      text-align: center;
    }
    thead {
      font-weight: bold;
    }
  </style>
</head>
<body>

<div>
<?php
  $mysqli = mysqli_connect("localhost:8889", "root", "lollol123", "test");

  // Testujemy połączenie
  if (mysqli_connect_errno($mysqli)) {
    echo "<p>Nie udało się połączyć!</p>";
    echo "<p>".mysqli_connect_error($mysqli)."</p>";
  }

  // Zapisywanie danych
  $dane = $_GET["data"];
  $sql = "INSERT INTO testowa (pole) VALUES ('$dane')";
  $res = mysqli_query($mysqli, $sql);

  if ($res) {
    echo "<p>Pomyślnie wstawiono teskt!</p>";
  } else {
    echo "<p>Błąd wstawiania tekstu do bazy danych: </p>";
    echo "<pre>".mysqli_error($res)."</pre>";
  }

  // Odczytywanie istniejących rekordów
  $sql2 = "SELECT * FROM testowa";
  $res2 = mysqli_query($mysqli, $sql2);

  if ($res2) {
    echo "<table>";
    echo "<thead><td>ID</td><td>Wartość</td></thead>";
    while ($tablica = mysqli_fetch_array($res2, MYSQLI_ASSOC)) {
      $id = $tablica["id"];
      $tekst = $tablica["pole"];
      $do_wyswietlenia = <<<EOD
      <tr>
        <td>$id</td>
        <td>$tekst</td>
      </tr>
      EOD;
      echo $do_wyswietlenia;
    }
    echo "</table>";
  } else {
    echo "<p>Błąd wczytywania z bazy danych</p>";
    echo "<pre>".mysqli_error($res2)."</pre>";
  }

?>
</div>

</body>
</html>