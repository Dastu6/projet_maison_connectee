<?php session_start(); ?>
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
        <p>Appartement</p>
        <form method="POST" action="submit_appartment.php"> <!--action va permettre de rediriger vers une page après envoie du formulaire-->
            <fieldset>
                <legend>Ajouter un appartement/une maison</legend>
                <fieldset>
                    <legend>Maison</legend>

                    <label for = "house_name" > Nom de la maison </label>
                    <input class = "chatbox" type = "text" id = "house_name" 
                    name = "house_name" autofocus placeholder = "Nom de la maison" 
                    size = "20">
                    <br>

                    <label for = "house_iso" > Coefficient d'isolation (murs) </label>
                    <input class = "chatbox" type = "text" id = "house_iso" 
                    name = "house_iso" autofocus placeholder = "Coefficient d'isolation" 
                    size = "20">
                    <br>

                    <label for = "house_appart_nb" > Nombre d'appartements </label>
                    <input class = "chatbox" type = "text" id = "house_appart_nb" 
                    name = "house_appart_nb" autofocus placeholder = "Nombre d'appartements" 
                    size = "20">
                    <br>

                    <label for = "house_eco" > Evaluation écologique (A, B,...) </label>
                    <input class = "chatbox" type = "text" id = "house_eco" 
                    name = "house_eco" autofocus placeholder = "Evaluation écologique" 
                    size = "20">
                    <br>

                    
                </fieldset>
                <fieldset>
                    <legend>Adresse de la maison</legend>

                    <label for = "house_town" > Ville </label>
                    <input class = "chatbox" type = "text" id = "house_town" 
                    name = "house_town" autofocus placeholder = "Ville" 
                    size = "20">
                    <br>

                    <label for = "house_postcode" > Code postal </label>
                    <input class = "chatbox" type = "text" id = "house_postcode" 
                    name = "house_postcode" autofocus placeholder = "Code postal" 
                    size = "20">
                    <br>

                    <label for = "house_street" > Nom de la rue </label>
                    <input class = "chatbox" type = "text" id = "house_street" 
                    name = "house_street" autofocus placeholder = "Nom de la rue" 
                    size = "20">
                    <br>

                    <label for = "house_nb" > Numéro de rue </label>
                    <input class = "chatbox" type = "text" id = "house_nb" 
                    name = "house_nb" autofocus placeholder = "Numéro de rue" 
                    size = "20">
                    <br>

                    
                </fieldset>
<br>
<br>
                <fieldset>
                    
                    <legend>Appartement</legend>
                    
                    <label for = "appart_number" > Numéro d'appartement </label>
                    <input class = "chatbox" type = "text" id = "appart_number" name = "appart_number" autofocus placeholder = "Numéro d'appartement" size = "20">
                    <br>

                    <label for = "appart_type" > Type d'appartement </label>
                    <input class = "chatbox" type = "text" id = "appart_type" name = "appart_type" autofocus placeholder = "Type d'appartement" size = "20">
                    <br>

                    <label for = "appart_sec" > Degré de sécurité </label>
                    <input class = "chatbox" type = "text" id = "appart_sec" name = "appart_sec" autofocus placeholder = "Degré de sécurité" size = "20">
                    <br>

                </fieldset>

                <fieldset>

                    <legend> Informations sur les pièces </legend>

                    <label for="room_name"> Liste du nom des pièces de l'appartement (salon, cuisine...) </label>
                    <input class="chatbox" type="text" id="room_name" name="room_name" autofocus placeholder = "Libellé" size = "30">
                    <br>
                    
                </fieldset>
                <br>
                <br>
                <fieldset>
                    <legend>Propriété</legend>

                    <label for = "q1">Êtes-vous le propriétaire de la maison ? 
                        (Si oui, veuillez remplir les champs suivants. Si non, laissez vide.)   </label>
                    <br>
                    <label for="q1">Oui</label>
                    <input class="radio_d" type="radio" id="q1" name="q1" value=1 required size ="0">

                    <label for="q1">Non</label>
                    <input class="radio_b" type="radio" id="q1" name="q1" value=0 required size ="0">
                    <br>
                    <br>
                    <label for = "debut_possession" padding: 0px> Date de début de possession </label>
                    <input class="datebox" type="date" id="debut_possession" name="debut_possession">
                    <br>
                    <br>
                    <label for = "fin_possession" > Date de fin de possession (si indéterminée, laissez vide.) </label>
                    <input class="datebox" type="date" id="fin_possession" name="fin_possession">
                    <br>

                    
                </fieldset>

                <fieldset>
                    <legend>Location</legend>

                    <label for = "q2"> Êtes-vous locataire dans cette maison ? 
                        (Si oui, veuillez remplir les champs suivants. Si non, laissez vide.)  </label>
                    <br>
                    <label for="q2">Oui</label>
                    <input class="radio_b" type="radio" id="q2" name="q2" value=1 required size ="0">
                    <label for="q2">Non</label>
                    <input class="radio_b" type="radio" id="q2" name="q2" value=0 required size ="0">

                    <br>
                    <br>
                    <label for = "debut_location"> Date de début de location </label>
                    <input class="datebox" type="date" id="debut_location" name="debut_location">
                    <br>
                    <br>
                    <label for = "fin_location" > Date de fin de location (si indéterminée, laissez vide.) </label>
                    <input class="datebox" type="date" id="fin_location" name="fin_location">
                    <br>

                    
                </fieldset>
            </fieldset>
            

            <button type="submit" name="submit">Ajouter cet appartement</button> <!--Utilise la methode décrite dans form-->
        </form><?php include 'bdd_connect.php';?>
        <br>
        <fieldset>
            <legend>Liste de vos appartements :</legend>
            <br>
            
            <?php
            //partie affichage donnees bd 
                $uid_bdd = $_SESSION['uid'];

                //pour récupérer l'id user
                $sql1 = "SELECT Id_user
                FROM UTILISATEUR
                WHERE Nom_utilisateur = '$uid_bdd';";
                $result1 = mysqli_query($con, $sql1);
                mysqli_data_seek($result1, 0);
                $ligne1 = mysqli_fetch_row($result1);

                $sql_p="SELECT Num_appart, Deg_secu, Type_appart, 
                Libel_piece
                FROM `appartement` 
                WHERE Id_user = $ligne1[0] ;";
                $result_p=mysqli_query($con,$sql_p);
                $nb_lignes = count(mysqli_fetch_all($result_p));
                mysqli_data_seek($result_p,0);
                $row_p=mysqli_fetch_all($result_p);

                /*pour voir valeur de $uid_bdd
                printf("%s", $uid_bdd);
                */

                mysqli_free_result($result_p);
                ?>


                <?php for($i = 0; $i < $nb_lignes; $i++)
                {
                    printf("Caractéristiques de votre appartement n°%d : <br />
                    Numéro d'appartement : %s <br />
                    Type : %s <br />
                    Sécurité : %s <br />
                    Pièces : %s <br />
                    <br />", $i + 1, $row_p[$i][0], $row_p[$i][1], 
                    $row_p[$i][2], $row_p[$i][3]);
                } 
                ?><br>
            </fieldset>

</body>