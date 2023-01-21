document.getElementById("eye").addEventListener("click", function(e){ //Switcher pour afficher/masquer le password
    var Password = document.getElementById("pwd");
    var Password_confirm = document.getElementById("cfrm_pwd");
    if (Password.getAttribute("type")=="password"){
        Password.setAttribute("type","text");
        Password_confirm.setAttribute("type","text");
    }
    else {
        Password.setAttribute("type","password");
        Password_confirm.setAttribute("type","password");
    }
});

/*
<?php
$serverName = "localhost";
$userName="root";
$password="";
$dbName="Maison_Connect";

$con = mysqli_connect($serverName,$userName,$password,$dbName);

if(mysqli_connect_errno()){
    echo "Failed to connect";
    exit();
}
echo "Connection success";

//Requête de test : on arrive bien à faire des SELECT mais il y a un problème (page blanche et pas d'insertion) avec la requête INSERT INTO
$sql2 = "SELECT * FROM SUBSTANCE";

if ($result2=mysqli_query($con,$sql2)){
    while ($row = mysqli_fetch_assoc($result2)){
        echo " Nom_substance : ".$row['Nom_substance'];
    }
}
else{
    echo "Error :". $sql2. "<br>". mysqli_error($con);
}

mysqli_close($con);

?>
*/