<?php session_start();?>
<?php include 'bdd_connect.php';?>

<?php

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$_SESSION['uid'] = $_POST['uid'];
$_SESSION['pwd'] = $_POST['pwd'];

$sql_1="SELECT Nom_utilisateur 
FROM UTILISATEUR 
WHERE Nom_utilisateur='$uid';";
$result_1=mysqli_query($con,$sql_1);
$taille1 = count(mysqli_fetch_all($result_1));

mysqli_data_seek($result_1,0);
$row_1=mysqli_fetch_all($result_1);
mysqli_free_result($result_1);

$sql_2="SELECT Mot_de_passe 
FROM UTILISATEUR 
WHERE Nom_utilisateur='$uid';";
$result_2=mysqli_query($con,$sql_2);
$taille2 = count(mysqli_fetch_all($result_2));

mysqli_data_seek($result_2,0);
$row_2=mysqli_fetch_all($result_2);
mysqli_free_result($result_2);

for($i = 0; $i < $taille1; $i ++)
{
    if ($uid == $row_1[$i][0])
    {
        if($pwd == $row_2[$i][0])
        {
            header("Location: ./main_page_online.php");
            exit();
        }
    }
}

printf("Le nom d'utilisateur 
ou le mot de passe est incorrect.<br />");
header("Location: ./login.php?login=error");
exit();
?>