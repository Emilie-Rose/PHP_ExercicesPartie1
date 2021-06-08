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

    <h2 class="">Exercice 3</h2>
    <p style="color:#8080FF">Créez une variable age. Afficher vous êtes majeur 
    ou vous êtes mineur en fonction de l'âge.</p>
    <?php
        $age = 7;
        if($age>0 && $age <120) {
        if ($age >= 18) {
            echo "Vous êtes majeur!";
            } else {
                echo "Vous êtes mineur!";
            } 
        } else {
            echo "Veuillez entrez un age valide svp!";
        }
    ?>
</body>
</html>
