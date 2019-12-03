<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Potęgowanie</title>
  </head>
  <body>
    <h1>POTĘGOWANIE</h1>
    <a href="strona2.html">⬅︎ Powrót do formularza</a>
    <div>
      <b>Wynik działania wynosi:</b>
      <div>
      <?php
        function handleForm() {
          $podstawa = $_POST["podstawa"];
          $wykladnik = $_POST["wykladnik"];

          if ($podstawa === "" || $wykladnik === "") {
            echo "Wpisz podstawę i wykładnik potęgi";
            return;
          }

          if ($wykladnik < 0) {
            echo "Wykładnik potęgi musi być dodatni";
            return;
          }

          echo pow($podstawa, $wykladnik);
        }

        handleForm();
      ?>
      </div>
    </div>
  </body>
</html>
