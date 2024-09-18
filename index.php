<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste déroulante des mois</title>
</head>
<body>
    <?php
        echo "Hello, Djibril Gharbi";
    ?>

    <form>
        <label for="mois">Choisissez un mois :</label>
        <select name="mois" id="mois">
            <?php
                $mois = [
                    1 => 'Janvier', 
                    2 => 'Février', 
                    3 => 'Mars', 
                    4 => 'Avril', 
                    5 => 'Mai', 
                    6 => 'Juin', 
                    7 => 'Juillet', 
                    8 => 'Août', 
                    9 => 'Septembre', 
                    10 => 'Octobre', 
                    11 => 'Novembre', 
                    12 => 'Décembre'
                ];

                foreach ($mois as $numero => $nom) {
                    echo "<option value=\"$numero\">$nom</option>";
                }
            ?>
        </select>
    </form>
</body>
</html>