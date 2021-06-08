<!-- var_dump(array('CodeIgniter', 'php', 'phpMyAdmin', 'lucidar.me') ); -->
<html lang="fr"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Exercices PHP - Partie 1</h1>

    <h2 class="">Exercice 5</h2>
    <p style="color:#8080FF">Créez une variable âge et une variable genre. 
    Afficher aléatoirement vous êtes une femme et 
    vous avez xans ou vous êtes un homme et vous avez xans.</p>
    <?php
        // $genre = array('un homme','une femme');
        // $key = array_rand($genre);
        // // $age = rand (0, 120);
        // echo"vous êtes " . $genre[$key]." et vous avez " .$age." ans .";

        $age1 = rand(0, 100);
        $sexe = array('homme', 'femme');
        $genre = $sexe[rand(0,1)];
        $result = $age1 + 
        if ($age1 > 0 && ($genre == 'femme' || $genre = 'homme')){
            if ($age1 >= 18 && $genre == 'femme'){
            echo 'vous êtes une femme et vous êtes majeure';
        }elseif ($age1 < 18 && $genre == 'femme'){
            echo 'vous êtes une femme et vous êtes mineure';
        }elseif ($age1 >= 18 && $genre == 'homme'){ 
            echo 'Vous êtes un homme et vous êtes majeur';
        }elseif ($age1 < 18 && $genre == 'homme'){
            echo 'vous êtes un homme et vous êtes mineur';
        }            
        }else{
            echo 'veuillez rentrer des infos valides!';
        }
    ?>
</body>
</html>
