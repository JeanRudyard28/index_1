<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modification</title>
    <link rel="stylesheet" href="../StyleCSS/Style.css">
    <script src="../script/jquery-3.6.3.min.js"></script>
    <script src="../script/JavaScript.js"></script>
</head>
<body>
    <?php
    if( isset($_GET["matricul"]) && isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["adresse"]) && isset($_GET["niveau"]) && isset($_GET["mention"]) && isset($_GET["montant"]) && isset($_GET["dates"])){
    ?>    
    <div id="blockMod">
            <div id="champs1">
                <div id="formulair1">
                    <h3>Enrégistrement d'un payement</h3>
                    <form action="Listes.php" method="post">
                        <input type="text"  value="<?php echo $_GET["matricul"] ?>" name="matricul1" placeholder="Matricul...">
                        <input type="text"  value="<?php echo $_GET["nom"] ?>" name="nom1" placeholder="Nom...">
                        <input type="text"  value="<?php echo $_GET["prenom"] ?>" name="prenom1" placeholder="Prenom...">
                        <input type="text"  value="<?php echo $_GET["adresse"] ?>" name="adresse1" placeholder="Adresse...">
                        <p id="autre">Autre Champs</p>
                </div>                
            </div>
            <div id="champs2">
                <div id="formulair2">
                    <h3>Enrégistrement d'un payement</h3>
                        <input type="text"  value="<?php echo $_GET["niveau"] ?>" name="niveau1" placeholder="Niveau...">
                        <input type="text"  value="<?php echo $_GET["mention"] ?>" name="mention1" placeholder="Mention...">
                        <input type="text"  value="<?php echo $_GET["montant"] ?>" name="montant1" placeholder="Montant...">
                        <input type="text"  value="<?php echo $_GET["dates"] ?>" name="dates1" placeholder="Date...">
                        <input type="submit" value="Modifier">
                        <p id="autre1">Retour</p>             
                    </form>
                </div>
            </div>
    </div>
    <?php 
        }
    ?>



</body>
</html>