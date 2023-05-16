<?php
// controllo se è stata inserita la parola da censurare
//isset restituisce true se una variabile è stata settata
// empty restituisce true se la variabile esiste ma è vuota
// questo controllo verifica l'esistenza della variabile e che contenga qualcosa

$validForm = true;

if(!isset($_POST['badword']) || empty($_POST['badword'])){
  $validForm = false;
}

if(!isset($_POST['text']) || empty($_POST['text'])){
  $validForm = false;
}



// die interrompe lo script
//die();


$badword = $_POST['badword'];
$text = $_POST['text'];

$fixedText = str_replace($badword, '***',$text);

//var_dump($badword);
//var_dump($text);



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
    <h1>Badwords server</h1>

    <?php if($validForm){ ?>

      <h3>Testo originale (lunghezza <?php echo strlen($text)  ?> caratteri) </h3>
      <p>
        <?php echo $text ?>
      </p>

      <hr>

      <h3>Testo corretto (lunghezza <?php echo strlen($fixedText)  ?> caratteri) </h3>
      <p>
        <?php echo $fixedText ?>
      </p>

    <?php } else { ?>

      <h4 class="text-danger">Compilare tutti i campi</h4>

    <?php }  ?>
      
    <a href="./index.php" type="submit" class="btn btn-success mt-3">torna</a>

 
  </div>
  
</body>
</html>
