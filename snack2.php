<?php

$name = $_GET['name'];
/* $mail = $_GET['mail'];
$age = $_GET['age']; */
$access_message = '';
echo strlen($name);
 if (strlen($name) > 3 ){
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

    
</body>
</html>