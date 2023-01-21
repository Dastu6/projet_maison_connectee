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
    <a href="index.php">
    <header>
        <p>Maison Connectée</p>
    </header>
    </a>

    <div>
        
        <p>Veuillez vous connecter</p>
        <form method="POST" action="login_treatment.php">
            <fieldset>
                <label for="uid">Nom d'utilisateur</label>
                <input class="chatbox" type="text" id="uid" name="uid" autofocus required placeholder="Nom d'utilisateur" size="15">
                <br>
                <label for="pwd">Mot de passe</label>
                <input class="chatbox" type="password" id="pwd" name="pwd" required placeholder="Mot de passe" size="15">

                <button type="button" id="eye">Afficher</button>
                <br>
            </fieldset>

            <button type="submit" name="submit">Connexion</button>
        </form>
        

    </div>

    <footer>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus ratione rerum illum vero assumenda aperiam deserunt sequi ea repellendus, sint mollitia numquam. Maxime unde dolorum quam consequatur magni voluptas reprehenderit.
    </footer>
    <?php 
    
    ?>
