<?php
    if(isset($_POST["matricul1"]) && isset($_POST["nom1"]) && isset($_POST["prenom1"]) && isset($_POST["adresse1"]) && isset($_POST["niveau1"]) && isset($_POST["mention1"]) &&
     isset($_POST["montant1"]) && isset($_POST["dates1"])  ){
         include("conx.php");
         $requete=$con->exec("insert into inscription(matricul,nom,prenom,adresse,niveau,mention,montant,dates) values('".$_POST["matricul1"]."', '".$_POST["nom1"]."', 
         '".$_POST["prenom1"]."', '".$_POST["adresse1"]."', '".$_POST["niveau1"]."', '".$_POST["mention1"]."', '".$_POST["montant1"]."', '".$_POST["dates1"]."')");
     }
     elseif(isset($_POST["matricul1"]) && isset($_POST["nom1"]) && isset($_POST["prenom1"]) && isset($_POST["adresse1"]) && isset($_POST["niveau1"]) && isset($_POST["mention1"]) &&
      isset($_POST["montant1"]) && isset($_POST["dates1"])  ){
          include("conx.php");
          $requete=$con->exec("update  inscription set nom='".$_POST["nom1"]."',prenom='".$_POST["prenom1"]."', adresse='".$_POST["adresse1"]."', 
          niveau='".$_POST["niveau1"]."', mention='".$_POST["mention1"]."', montant='".$_POST["montant1"]."', dates='".$_POST["dates1"]."'  where matricul='".$_POST["matricul1"]."'");
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="../StyleCSS/Style.css">
    <script src="../script/jquery-3.6.3.min.js"></script>
    <script src="../script/JavaScript.js"></script>
    <link rel="shortcut icon" href="../Images/home.png" type="image/x-icon">
</head>
<body>
    <div id="tete">
        <form action="Recherche.php" method="get">            
            <input type="text" name="reche" placeholder="Recherche..." id="txtreche">
            <input type="submit" value="Rechercher" id="reche">
        </form>
        <button id="menu" ><img src="../Images/Accueil.png" alt="icon"  > </button>
        <!--<button id="menu1" ><img src="../Images/Accueil.png" alt="icon"  > </button>-->
        <button id="menu2" ><img src="../Images/ajouter.png" alt="icon"  > </button>
        <div id="choixmenu">
            <a href="Accueil.php"><button>Accueil</button></a><br><br>
            <a href="Listes.php"><button>Listes</button></a><br><br>
            <a  href="../Sources/login.php"><button>Quitter<img src="../Images/logout.png" alt="icon" id="quitter"> </button></a>
        </div>
    </div>
    <div id="block" class="accueil">
        <div id="blockAjout">
            <div id="champs1">
                <div id="formulair1">
                    <h3>Enrégistrement d'un payement</h3>
                    <form action="Accueil.php" method="post">
                        <input type="text" name="matricul1" placeholder="Matricul...">
                        <input type="text" name="nom1" placeholder="Nom...">
                        <input type="text" name="prenom1" placeholder="Prenom...">
                        <input type="text" name="adresse1" placeholder="Adresse...">
                        <p id="autre">Autre Champs</p>
                </div>                
            </div>
            <div id="champs2">
                <div id="formulair2">
                    <h3>Enrégistrement d'un payement</h3>
                        <input type="text" name="niveau1" placeholder="Niveau...">
                        <input type="text" name="mention1" placeholder="Mention...">
                        <input type="text" name="montant1" placeholder="Montant...">
                        <input type="text" name="dates1" placeholder="Date...">
                        <input type="submit" value="Ajouter">
                        <input type="reset" value="Annuler">     
                        <p id="autre1">Retour</p>             
                    </form>
                </div>
            </div>
        </div>
        
    <div id="LogoEmit">
        <img src="../Images/Emit.jpg" alt="">
    </div>
    <div id="LogoUniv">
        <img src="../Images/uf.jpg" alt="">
    </div>
    <div id="Gest">
        <h1> <img src="../Images/money.png" alt="icon"> Gestion Frais De Scolarité  <img src="../Images/money.png" alt="icon"></h1>
        <hr>        
        <marquee behavior="" direction="left">
        <h2>Ecole de Management et d'Innovation Technologies</h2>
        </marquee>
    </div>


    </div>
</body>
</html>