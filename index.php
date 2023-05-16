<?php

/*
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare

*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <title>Badwords</title>
</head>
<body>

  <div class="container my-5">
    <h1>Badwords</h1>
    <div>

      <form action="./server.php" method="POST">
      <div class="mb-3">
        <input type="text" class="form-control" id="badword" name="badword" placeholder="Parola da censurare">
      </div>
      <div class="form-floating">
        <textarea class="form-control" placeholder="Testo" name="text" id="floatingTextarea2" style="height: 100px"></textarea>
      </div>

      <button type="submit" class="btn btn-success mt-3">Invia</button>

      </form>

    </div>
  </div>
  
</body>
</html>