<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN_PROJET</title>    
    <link rel="stylesheet" href="../StyleCSS/style_log.css">
    <link rel="shortcut icon" href="../Images/javascript.ico" type="image/x-icon">
</head>
<body >
    <div id="login">
        <img src="../Images/security.png" alt="icon" id="lock">
        <form action="login.php" method="get">
        <label for="use" class="lab_log">User</label>
        <input type="text" name="names" id="use" class="champs" placeholder="Nom d'utilisateur...">
        <label for="mdp" class="lab_log">Password</label>
        <input type="password" name="psswd" id="mdp" class="champs" placeholder="Mot de passe..."><br><br>
        <input type="submit" value="Login" id="validation">
        </form>
    </div>
    <div id="err">Impossible de se connecter !</div>

        
<?php
if(isset($_GET["names"]) && !empty($_GET["names"]) && isset($_GET["psswd"]) && !empty($_GET["psswd"])  ){
    include("conx.php");
    $cmd=$con->query("select * from login where nom='".$_GET["names"]."' AND mdp='".$_GET["psswd"]."'");
    if ($aff=$cmd->fetch()){
        header("location:Accueil.php");
    }
    else{
        ?>
        <script>
            var log=document.getElementById("login");
            var err=document.getElementById("err");
            err.style.visibility="visible";
            err.style.bottom="58px";
            err.style.animation=" annim 0.3s";
            log.style.animation="annimLog 0.3s";
        </script>
       <?php
    }
}
?>


</body>
</html>