<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];  
$access_message = '';
//  echo strlen($name);
 
 if (strlen($name) > 3 && str_contains($mail , '@') && str_contains($mail , '.') && is_numeric($age)){
    $access_message = 'accesso riuscito';

 } else {
    $access_message = 'accesso negato';
 }
 ; 
  echo $access_message

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
      <!--   <label for="name">Inserisci il tuo nome </label>
        <input type="text" id="name" name="name" required />
        <label for="mail">Inserisci la tua mail </label>
        <input type="email" id="mail" name="mail" required />
        <label for="age">Inserisci la tua età  </label>
        <input type="number" id="age" name="age" required /> -->
        
    </div>

    
</body>
</html>