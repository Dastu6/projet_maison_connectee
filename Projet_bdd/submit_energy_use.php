<?php session_start();?>
<?php include 'bdd_connect.php';?>

<?php
echo "Connection success";

//mettre ? et mysqli_prepare puis execute

/*$sql_2 =
$result_1 = mysqli_query($con, $sql_1);*/

///!\ MODIFIER LA BD AVANT !!!! /!\

$house_name = $_POST['house_name'];
$house_iso = $_POST['house_iso'];
$house_flat_nb = $_POST['house_flat_nb'];
$house_eco = $_POST['house_eco'];


$sql_1 = "INSERT INTO `maison` (`Nom_maison`, 
`Deg_iso`, `Nb_appart`, `Eva_eco`) 
VALUES ('$house_name', '$house_iso', 
'$house_flat_nb', '$house_eco')";
mysqli_query($con,$sql_1);

header("Location: ./graphe_conso.php?adding=success");

?>