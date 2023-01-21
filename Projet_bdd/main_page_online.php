<?php session_start();?>
<?php include 'bdd_connect.php';?>

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
    
    <?php echo "Connection success";?>
    

        <header>
            <a href="main_page_online.php">
                <p>Maison Connectée</p>
            </a>
            <p id="horloge"><?php echo date ('d/m/Y H:i:s'); ?></p>
        </header>
    

    <div>

        <a href="profile_page.php">
            <button id="Profile_page_index" type="button">Profil</button>
        </a>

        <a href="appartment.php">
            <button id="Debug_page" type="button">Appartement & Maison</button>
        </a>

        <a href="device.php">
            <button id="Debug_page" type="button">Appareils</button>
        </a>

        <a href="graphe_conso.php">
            <button id="Debug_page" type="button">Consommations</button>
        </a>

        <a href="advice.php">
            <button id="Debug_page" type="button">Conseils écologiques</button>
        </a>

        <br>
        <a href="disconnect.php">
            <button id="Disconnect_index" type="button">Déconnexion</button>
        </a>

    </div>

    <footer>
        
    </footer>
    
</body>
</html>
