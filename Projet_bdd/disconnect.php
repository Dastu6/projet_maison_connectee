<?php session_start();?>
<?php include 'bdd_connect.php';?>

<?php session_destroy();

header("Location: ./index.php?disconnect=success");

?>