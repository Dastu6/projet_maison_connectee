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
        <p>Formulaire d'inscription</p>
        <form method="POST" action="submit_treatment.php"> <!--action va permettre de rediriger vers une page après envoie du formulaire-->
            
            <fieldset>
                
                <legend>Identité</legend>
                
                <label for="first_name">Prénom (*)</label>
                <input class="chatbox" type="text" id="first_name" name="first_name" autofocus required placeholder="Prénom" size="20">
                <br>

                <label for="last_name">Nom de famille (*)</label>
                <input class="chatbox" type="text" id="last_name" name="last_name" required placeholder="Nom de famille" size="20">
                <br>

                <label for="birth_date">Date de naissance (*)</label>
                <input class="datebox" type="date" id="birth_date" name="birth_date" required size="25">
                <br>

                <label for="Genre">Homme</label>
                <input class="radio_b" type="radio" id="Genre" name="Genre" value=0>

                <label for="Genre">Femme</label>
                <input class="radio_b" type="radio" id="Genre" name="Genre" value=1>
                <br>
                
            </fieldset>

            <fieldset>

                <legend>Vos coordonnées</legend>

                <label for="Email">Adresse e-mail (*)</label>
                <input class="chatbox" type="email" id="Email" name="Email" required placeholder="Adresse e-mail" size="25">
                <br>

                <label for="Tel">Numéro de téléphone</label>
                <input class="Chatbox" type="tel" id="Tel" name="Tel" placeholder="Numéro de téléphone" size="15">
                
            </fieldset>
            
            <fieldset>

                <legend>Votre compte</legend>

                <label for="uid">Nom d'utilisateur (*)</label>
                <input class="chatbox" type="text" id="uid" name="uid" required placeholder="Nom d'utilisateur" size="15">
                <br>

                <label for="pwd">Mot de passe (*)</label>
                <input class="chatbox" type="password" id="pwd" name="pwd" required placeholder="Mot de passe" size="15">
                <br>

                <label for="cfrm_pwd">Confirmer votre mot de passe</label>
                <input class="chatbox" type="password" id="cfrm_pwd" name="cfrm_pwd" required placeholder="Confirmer" size="15">
                <button type="button" id="eye">Afficher</button>
               
            </fieldset>
            <?php $_SESSION['uid']="Moi";?>
            <button type="submit" name="submit">Valider et créer le compte</button> <!--Utilise la methode décrite dans form-->
        </form>
        <p>Les champs avec la mention (*) sont obligatoires pour finaliser l'inscription.</p>
    </div>

    <footer>
        Hello world! ^-^
    </footer>
    
</body>
</html>