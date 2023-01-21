<?php session_start();?>
<?php include 'bdd_connect.php';?>

<?php
 if (!$con) 
 {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }
 else
 {
        /*voir pour les dates d'allumage/d'extinction 
        de chaque appareil...*/
         $sql_1 ="SELECT * FROM `appareil`
         NATURAL JOIN `utilisation`
         NATURAL JOIN `ressource`
         NATURAL JOIN `emission`
         NATURAL JOIN `substance`";
         $result_1 = mysqli_query($con, $sql_1);
         $chart_data="";
         while ($row = mysqli_fetch_array($result_1)) 
         { 
 
            $devicename[]  = $row['Nom_appareil']  ;
            $energy_use[] = $row['utilisation'];
         }
 
 }
?>