<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
 /* 
 foreach($posts as $key => $value){
     echo $key;
    foreach($value as $sub_key => $sub_val){
         if (is_array($sub_val)) {
            echo $sub_key . " : \n";
            foreach ($sub_val as $k => $v) {
                 echo  "\t"  .$k . " = " . $v  . "\n" ;
            }
        } else {
             echo $sub_key . " = " . $sub_val . "\n";
        }
    }
    
 }
 

  */
 
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
    <ul>
        <?php
        foreach($posts as $key => $value){
            ?>
            <li>
                <h1><?= $key;?> </h1>
            
           <?php foreach($value as $sub_key => $sub_val){
               // if (is_array($sub_val)) {
               //     echo $sub_key . " : \n";
                   foreach ($sub_val as $k => $v) {
                      
                   
               // } else {
               //     echo $sub_key . " = " . $sub_val . "\n";
               
           
           
       // }      
        ?>
        
            <h2> <?= $k . " "."="." ". $v;?> </h2>
            

        </li>
        <?php } ?>
        <?php } ?>
        <?php } ?>
    </ul>

    
    
</body>
</html>