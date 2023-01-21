<?php session_start();?>
<?php include 'bdd_connect.php';?>


<?php
echo "Connection success";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$birth_date = $_POST['birth_date'];
$Genre = $_POST['Genre'];
$Email = $_POST['Email'];
$Tel = $_POST['Tel'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$_SESSION['first_name'] = $_POST['first_name'];
$_SESSION['last_name'] = $_POST['last_name'];
$_SESSION['birth_date'] = $_POST['birth_date'];
$_SESSION['Genre'] = $_POST['Genre'];
$_SESSION['Email'] = $_POST['Email'];
$_SESSION['Tel'] = $_POST['Tel'];
$_SESSION['uid'] = $_POST['uid'];
$_SESSION['pwd'] = $_POST['pwd'];


//mettre ? et mysqli_prepare puis execute
$sql="INSERT INTO UTILISATEUR (`Nom`,`Prenom`,`Date_naissance`,`Genre`,`Email`,`Tel`,`Nom_utilisateur`,`Mot_de_passe`,`Date_creation_cpt`) VALUES ('$last_name','$first_name','$birth_date','$Genre','$Email','$Tel','$uid','$pwd',NOW());";
mysqli_query($con,$sql);

header("Location: ./index.php?signup=success");

?>