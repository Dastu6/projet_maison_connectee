<?php session_start();?>
<?php include 'bdd_connect.php';?>


<?php
//Appartement
$appart_number = $_POST['appart_number'];
$appart_sec = $_POST['appart_sec'];
$appart_type = $_POST['appart_type'];
$room_name = $_POST['room_name'];

$_SESSION['appart_number'] = $_POST['appart_number'];
$_SESSION['appart_sec'] = $_POST['appart_sec'];
$_SESSION['appart_type'] = $_POST['appart_type'];
$_SESSION['room_name'] = $_POST['room_name'];

//Maison
$house_name = $_POST['house_name'];
$house_iso = $_POST['house_iso'];
$house_appart_nb = $_POST['house_appart_nb'];
$house_eco = $_POST['house_eco'];

$_SESSION['house_name'] = $_POST['house_name'];
$_SESSION['house_iso'] = $_POST['house_iso'];

$sqlm = "INSERT INTO `maison` (`Nom_maison`, 
`Deg_iso`, `Nb_appart`, `Eva_eco`) 
VALUES ('$house_name', '$house_iso', 
'$house_appart_nb', '$house_eco');";
mysqli_query($con, $sqlm);

$sqlm1 = "SELECT * FROM MAISON;";
$rm = mysqli_query($con, $sqlm1);
mysqli_data_seek($rm, 0);
$lm = mysqli_fetch_all($rm);
$lm = end($lm)[0];

//Adresse
$house_town = $_POST['house_town'];
$house_postcode = $_POST['house_postcode'];
$house_street = $_POST['house_street'];
$house_nb = $_POST['house_nb'];

$sqla = "INSERT INTO `adresse` (`Ville`, 
`CP`, `Rue`, `Num_maison`) 
VALUES ('$house_town', '$house_postcode',
 '$house_street', '$house_nb');";
mysqli_query($con, $sqla);

$sqla1 = "SELECT * FROM ADRESSE;";
$ra = mysqli_query($con, $sqla1);
mysqli_data_seek($ra, 0);
$la = mysqli_fetch_all($ra);
$la = end($la)[0];

//Possession
$debut_possession = $_POST['debut_possession'];
$fin_possession = $_POST['fin_possession'];

$sqlp = "INSERT INTO `possession` ( `Debut_possession`, 
`Fin_possession`) 
VALUES ('$debut_possession', '$fin_possession');";
mysqli_query($con, $sqlp);

$sqlp1 = "SELECT * FROM POSSESSION;";
$rp = mysqli_query($con, $sqlp1);
mysqli_data_seek($rp, 0);
$lp = mysqli_fetch_all($rp);
$lp = end($lp)[0];

//Location
$debut_location = $_POST['debut_location'];
$fin_location = $_POST['fin_possession'];

$sqll = "INSERT INTO `location` ( 
`Debut_location`, `Fin_location`) 
VALUES ('$debut_location', '$fin_location');";
mysqli_query($con, $sqll);

$sqll1 = "SELECT * FROM `location`;";
$rl = mysqli_query($con, $sqll1);
mysqli_data_seek($rl, 0);
$ll = mysqli_fetch_all($rl);
$ll = end($ll)[0];

//User
$uid_bdd = $_SESSION['uid'];
//récup id user
$sql1 = "SELECT Id_user
            FROM UTILISATEUR
            WHERE Nom_utilisateur = '$uid_bdd';";
            $result1 = mysqli_query($con, $sql1);
            mysqli_data_seek($result1, 0);
            $ligne1 = mysqli_fetch_row($result1);
$ligne1 = $ligne1[0];

//mettre ? et mysqli_prepare puis execute
$sql="INSERT INTO `appartement` (`Num_appart`, 
`Deg_secu`, `Type_appart`, `Libel_piece`, 
`Id_adresse`, `Id_maison`, `Id_user`, 
`Id_possession`, `Id_location`)
VALUES ('$appart_number', '$appart_sec', '$appart_type', 
'$room_name', '$la', '$lm', '$ligne1', '$lp', '$ll')";
mysqli_query($con, $sql);

header("Location: ./appartment.php?signup=success");

?>