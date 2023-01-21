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
            <p>Appareils</p>
            <form method="POST" action="submit_device.php"> <!--action va permettre de rediriger vers une page après envoie du formulaire-->
            <fieldset>
                <legend>Ajouter un appareil</legend>
                <fieldset>
                    
                    <legend>Informations générales</legend>
                    
                    <label for = "device_name" > Nom de l'appareil </label>
                    <input class = "chatbox" type = "text" id = "device_name" name = "device_name" autofocus placeholder = "Nom de l'appareil" size = "30">
                    <br>

                    <label for = "device_type" > Fonction de l'appareil (cuisson, éclairage...) </label>
                    <input class = "chatbox" type = "text" id = "device_type" name = "device_type" autofocus  placeholder = "Fonction de l'appareil" size = "20">
                    <br>

                    <label for = "device_commercial_name" > Libellé (son nom commercial) </label>
                    <input class = "chatbox" type = "text" id = "device_commercial_name" name = "device_commercial_name" autofocus placeholder = "Libellé" size = "15">
                    <br>

                </fieldset>

                <fieldset>

                    <legend>Ressources utilisées</legend>

                    <label for="resources"> Nom de la ressource 1 </label>
                    <input class="chatbox" type="text" id="resources_name" name="resources_name" autofocus placeholder = "Nom" size = "15">
                    <br>

                    <label for="min_consu"> Consommation minimale </label>
                    <input class="chatbox" type="text" id="min_consu" name="min_consu" autofocus placeholder = "Consommation minimale" size = "10">
                    <br>

                    <label for="max_consu"> Consommation maximale </label>
                    <input class="chatbox" type="text" id="max_consu" name="max_consu" autofocus placeholder = "Consommation maximale" size = "10">
                    <br>

                    <label for="lim_consu"> Consommation limite </label>
                    <input class="chatbox" type="text" id="lim_consu" name="lim_consu" autofocus placeholder = "Consommation limite" size = "10">
                    <br>

                    <label for="ideal_consu"> Consommation idéale </label>
                    <input class="chatbox" type="text" id="ideal_consu" name="ideal_consu" autofocus placeholder = "Consommation idéale" size = "10">
                    <br>
                    
                </fieldset>

                <fieldset>

                    <legend>Substances générées</legend>

                    <label for="room_name">Libellé (son nom)</label>
                    <input class="chatbox" type="text" id="room_name" name="room_name" autofocus placeholder = "Libellé" size = "15">
                    <br>

                    <label for="min_consu">Type (salon, salle de bain...)</label>
                    <input class="chatbox" type="text" id="min_consu" name="min_consu" autofocus placeholder = "Type" size = "10">
                    <br>
                    <br>
                    <button type="add_room" name="add_room">Ajouter une pièce</button>
                    <br>
                    
                </fieldset>
            </fieldset>
            <button type="submit" name="submit">Valider et ajouter cet appareil</button> <!--Utilise la methode décrite dans form-->
        </form><?php include 'bdd_connect.php';?>
</body>