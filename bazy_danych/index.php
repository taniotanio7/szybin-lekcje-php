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
  // łączenie się z bazą
  $mysqli = mysqli_connect("localhost:8889", "root", "lollol123", "test");
  // host, login, hasło, nazwa bazy danych

  // lub wybór bazy danych po połączeniu
  // $mysqli = mysqli_connect("localhost", "root", ""),
  // mysqli_select_db($mysqli, "test")

  // Sprawdzanie połączenia
  if (mysqli_connect_errno()) {
    echo "Nie udało się połączyć: ".mysqli_connect_error();
  } else {
    echo "Połączono z: ".mysqli_get_host_info($mysqli)."<br />";
    echo "Baza: ".mysqli_get_server_info($mysqli)."<br />";
    echo mysqli_get_proto_info($mysqli)."<br />";

    // Tutaj nie robi się średników na końcu zapytania
    // $sql = "CREATE TABLE testowa (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, pole VARCHAR(75))";

    // $rez = mysqli_query($mysqli, $sql);

    // Czy zapytanie się udało?
    // if ($rez) {
    //   echo "Tabela testowa została utworzona <br />";
    // } else {
    //   echo "Nie udało się zrobić tabeli".mysqli_error($rez);
    // }

    // Wstawianie danych do tabeli
    $sql = "INSERT INTO testowa (pole) VALUES ('cos')";
    $res = mysqli_query($mysqli, $sql);
    if ($rez) {
      echo "Wstawiono rekord: ".mysqli_affected_rows($mysqli);
    } else {
      echo "Nie udało się: ".mysqli_error($rez);
    }

    // Aktualizacja pola
    $sql2 = "UPDATE testowa SET pole='cos2' WHERE id=2";
    $rez2 = mysqli_query($mysqli, $sql2);
    if ($rez2) {
      echo "Udało się: ".mysqli_affected_rows($mysqli);
    } else {
      echo "Nie udało się: ".mysqli_error($rez);
    }

    // Wyświetlanie
    $sql3 = "SELECT * FROM testowa";
    $rez3 = mysqli_query($mysqli, $sql);

    // Wyświetlanie ilości pobranych wierszy
    mysqli_affected_rows($mysqli);

    // while($tablica = mysqli_fetch_array($rez3, MYSQLI_BOTH) {
    //   // MYSQLI_NUM, MYSQLI_ASSOC
    //   $id = $tablica["id"];
    //   $pole = $tablica["pole"];
    //   echo "ID: $id, Pole: $pole <br />";
    // }

    // mysqli_fetch_row
    // mysqli_fetch_array

  }

  mysqli_close($mysqli);
  // Zamykamy połączenie
?>

</body>
</html>