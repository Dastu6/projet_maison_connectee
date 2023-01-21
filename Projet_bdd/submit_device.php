<?php include 'bdd_connect.php';?>

<?php
echo "Connection success";

$device_name = $_POST['device_name'];
$device_type = $_POST['device_type'];
$device_commercial_name = $_POST['device_commercial_name'];

//mettre ? et mysqli_prepare puis execute
$sql="INSERT INTO APPAREIL (`Nom_appareil`, `Type_appareil`, 
`Libel_appareil`) 
VALUES ('$device_name', '$device_type', '$device_commercial_name');";
mysqli_query($con,$sql);

header("Location: ./index.php?signup=success");

?>