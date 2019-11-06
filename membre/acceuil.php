<center>
<?php
session_start();
?>



<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/menu.css"></head>
<title> Acceuil Cusisine Internationale </title>
<body>
    <h1>Bienvenue <?php echo $_SESSION ['login']; ?></h1>
    
<img src="../photo/Plate.png" alt="Plate">
</body>
</html>
    
    if (isset($_POST['Update'])){
            $idrecette  = $_POST['idrecette'];
            $nom = $_POST['nom'];
            $ingredients = $_POST['ingredients'];
            $preparation = $_POST['preparation'];
            $nombrepersonne = $_POST['nombrepersonne'];  
            $cout = $_POST['cout'];
            $photo = $_POST['photo'];
            $sql="Update recettes set idrecette='$idrecette', nom='$nom', ingredients='$ingredients', preparation='$preparation', nombrepersonne='$nombrepersonne',cout='$cout',photo='$photo' where idrecette = '". $_POST['idrecette'] ."';";
            $requete=mysqli_query($conn,$sql);
            echo "<meta http-equiv='refresh' content='0'>";
    } 