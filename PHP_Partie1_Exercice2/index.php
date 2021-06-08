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

    <h2 class="">Exercice 2</h2>
    <p style="color:#8080FF">Créez trois variables : nom, prénom, âge. 
    Afficher ces variables dans une phrase
    (ex: Je m'appelle "nom prénom" et j'ai "age" ans.)</p>
    <?php 
        $name = 'Momo';
        $firstName = 'Julie';
        $age = '32';
        // echo "<p>Je m'appelle $firstName $name et j'ai $age ans.</p>"; 
        echo 'Je m\'appelle '.$name.' '.$firstName.' '.'et j\'ai '.$age.'ans.'
    ?>
</body>
</html>
