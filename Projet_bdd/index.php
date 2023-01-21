<?php session_start();?>
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
    
        <header>
            <a href="index.php">
                <p>Maison Connectée</p>
            </a>
            <p id="horloge"><?php echo date ('d/m/Y H:i:s'); ?></p>
        </header>
    

    <div>

        <a href="login.php">
            <button id="Connect_index" type="button">Se connecter</button>
        </a>

        <a href="sign_in.php">
            <button id="Sign_in_index" type="button">S'inscrire</button>
        </a>

        <a href="test.php">
            <button id="test_index" type="button">test</button>
        </a>

    </div>

    <footer>
        Hello world! ^-^
    </footer>
    
</body>
</html>
