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

    <h2 class="">Exercice 4</h2>
    <p style="color:#8080FF">Créez une variable age aléatoire. 
    Afficher vous êtes majeur ou vous êtes mineur 
    en fonction de l'âge obtenu.</p>
    <?php
        $age = rand (0, 120);
        if ($age >= 18) {
        echo $age." <p>Vous êtes majeur! </p>";
        } else {
        echo $age." <p>Vous êtes mineur! </p>";
        }
    ?>
</body>
</html>
