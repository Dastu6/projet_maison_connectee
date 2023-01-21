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

    <a href="main_page_online.php">
        <header>
            <p>Maison Connectée</p>
        </header>
    </a>

    <div>
        <p>Conseils écologiques</p>
            
            <fieldset>
                <legend>Sur l'utilisation de ses propres appareils</legend>
                <legend>Micro-ondes</legend>
                <iframe width="560" height="315"
                src="https://www.youtube.com/embed/JerpYmjhW3Q" 
                frameborder="0" allowfullscreen>
                </iframe>
                <br>
            </fieldset>

        </p> 
    <br>
        <p></p>
            <fieldset>
                <legend>Sur ses habitudes quotidiennes</legend>
                <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/2tESNUb0QIo" 
                    frameborder="0" allowfullscreen>
                </iframe>
            </fieldset>
        </p>
        <?php include 'bdd_connect.php';?>
    </div>
</body>