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

    <h2 class="">Exercice 6</h2>
    <p style="color:#8080FF">Créez une variable magnitude allant de 0 à 9. 
    Gérez l'affichage selon la magnitude.</p>
    <h3>
        1. Micro-séisme impossible à ressentir
	    2. Micro-séisme impossible à ressentir mais enregistrable par les sismomètres
	    3. Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti
	    4. Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats
	    5. Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes
	    6. Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre
	    7. Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance
	    8. Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres
	    9. Séisme capable de tout détruire sur une très vaste zone
    </h3>
    <?php
        $richter = rand(1,9);
            switch ($richter) {
                case 1:
                    echo $richter.'. '."Micro-séisme impossible à ressentir.";
                    break;
                case 2:
                    echo $richter.'. '."Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
                    break;
                case 3:
                    echo $richter.'. '."Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
                    break;
                case 4:
                    echo $richter.'. '."Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
                    break;
                case 5:
                    echo $richter.'. '."Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
                    break;
                case 6:
                    echo $richter.'. '."Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
                    break;
                case 7:
                    echo $richter.'. '."Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
                    break;
                case 8:
                    echo $richter.'. '."Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
                    break;
                case 9:
                    echo $richter.'. '."Séisme capable de tout détruire sur une très vaste zone.";
                    break;
            }
    ?>
</body>
</html>
