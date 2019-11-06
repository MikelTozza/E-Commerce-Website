<?php session_start(); ?>

<head>
<link rel="stylesheet" type="text/css" href="../css/menu.css"></head>
    <br>
        <br>

<form action="checkbox-form.php" method="post" >
    <br>
    <center>
    <table border=1>
        
        <tr>
            <th> </th>
            <th> Idrecette </th>

        
            <th> Nom  </th>         
        
            <th> Ingredients </th>   
        
            <th> Preparation</th>   
        
            <th> Nombre de Personnes</th> 
        
            <th> Cout </th>         
        
            <th> Photo </th>
        </tr>
        
<?php
$servername = "localhost";
$username ="root";
//$password="mmal5470"
$dbname ="id11075442_bonnebouffe";

$conn=new mysqli($servername,$username,"",$dbname);
    
$result=mysqli_query($conn,"select * from recettes") or die("Erreur de requete!");

while($row= mysqli_fetch_array($result)){
    //echo "<tr>";
   //echo "<td><input type='checkbox' name='no[]' value='".$row['idmembre']."'></td>
  // <td>".$row['nom']."</td>
    echo "<tr>";
    echo "<td><input type='checkbox' name='no[]' value='".$row['idrecette']."'></td>
          <td>" . $row['idrecette'] . "</td>
          <td>" . $row['nom'] . "</td>
          <td>" . $row['ingredients'] . "</td>
          <td>" . $row['preparation'] . "</td>
          <td>" . $row['nombrepersonne'] . "</td>
          <td>" . $row['cout'] . "</td>
          <td>" . $row['photo'] . "</td>";
    echo"</tr>";
}
?>
        </table>
        </center>
</form>
        
<form method="post">
<table border=1>


            <tr><td> idrecette</td><td><input type="text" name="idrecette" ></td></tr>
                
            <tr><td> Nom</td><td><input type="text" name="nom" ></td></tr>
                
            <tr><td> ingredients</td><td><input type="text" name="ingredients" ></td></tr>
                
            <tr><td> preparation</td><td><input type="text" name="preparation"></td></tr>
                
            <tr><td> Nombre de personnes</td><td><input type="text" name="nombrepersonne" ></td></tr>
                
            <tr><td> Cout</td><td><input type="text" name="cout"></td></tr>
                
            <tr><td> Photo</td><td><input type="text" name="photo"></td></tr>
                
            <tr><td> Idmembre</td><td><input type="text" name="idmembre"></td></tr>
<input type="submit" name="Insert" id="Insert" value="Insert" />
<input type="submit" name="Update" id="Update" value="Update" />
<input type="submit" name="Delete" id="Delete" value="Delete" />
    </table>
</form>


                
<?php

$servername = "localhost";
$username ="root";
//$password="mmal5470"
$dbname ="id11075442_bonnebouffe";

$conn=new mysqli($servername,$username,"",$dbname);
        
        if (isset($_POST['Insert'])){
            $idrecette  = $_POST['idrecette'];
            $nom = $_POST['nom'];
            $ingredients = $_POST['ingredients'];
            $preparation = $_POST['preparation'];
            $nombrepersonne = $_POST['nombrepersonne'];  
            $cout = $_POST['cout'];
            $photo = $_POST['photo'];
            $idmembre = $_POST['idmembre'];
            $sql="INSERT INTO recettes (idrecette, nom,ingredients, preparation, nombrepersonne, cout, photo,idmembre) VALUES (" . " '" . $idrecette . "', '" . $nom . "', '" . $ingredients . "', '" . $preparation . "', '" . $nombrepersonne . "', '" . $cout . "', '" . $photo . "', '" . $idmembre . "')";
            $requete=mysqli_query($conn,$sql);
            echo "<meta http-equiv='refresh' content='0'>";
    }   
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
    if (isset($_POST['Delete'])){
                $sql="Delete from recettes where idrecette = '".$_POST['idrecette']."';";
                $idrecette = "";
                $nom = "";
                $ingredients = "";
                $preparation = "";
                $nombrepersonne = "";
                $cout = "";
                $photo = "";
                $requete=mysqli_query($conn,$sql);
                echo "<meta http-equiv='refresh' content='0'>";
        }  
?>
