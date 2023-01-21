<?php session_start();?>
<?php include 'bdd_connect.php';?>

<?php /*corps de la requete pour graphe conso :
SELECT SUM(Conso_kWh * Duree_conso_en_h) Conso_totale_eau, MONTH(Date_conso) Mois
FROM `consommation` 
GROUP BY Mois, Id_Ressource
HAVING Id_Ressource = 1;*/?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
	<script src="main.js" defer></script>
    <title>Maison Connectée</title>
</head>

<body>

    <a href="main_page_online.php">
        <header>
            <p>Maison Connectée</p>
        </header>
    </a>

    <div>
        <div>
        <p>Graphe de mes consommations</p>
            <fieldset>
                <?php echo "<img src = './test.php' />";?>
            </fieldset>
        </div>
    </div>
</body>

