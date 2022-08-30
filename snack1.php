<!-- SNACK 1  -->

<!-- Creo l'array contenente i risultati delle partite -->


<?php
$games = [
    [

        'home_team' => 'pippoteam',
        'visiting_team' => 'plutoteam',
        'score' => '28-45',
    ],
    [
        'home_team' => 'paperinooteam',
        'visiting_team' => 'topolinoteam',
        'score' => '28-45'
    ],
    [
        'home_team' => 'nonteam',
        'visiting_team' => 'moltoteam',
        'score' => '28-45'
    ],
    [
        'home_team' => 'pocoteam',
        'visiting_team' => 'mancotroppoteam',
        'score' => '28-45'
    ],
];
var_dump ($games);


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
        <?php for($i = 0; $i< count($games); $i++):?>
        <li>
            <h1>Home Team: <?php echo $games[$i]['home_team'];?> </h1>
            <h3>Visiting Team: <?php echo $games[$i]['visiting_team'];?></h3>
            <span>Score: <?php echo $games[$i]['score'];?></span>
        </li>
        <?php endfor;?>
    </ul>
    
</body>
</html>