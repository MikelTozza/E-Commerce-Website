
<table>
<tr>
    <td>
        <img src='photo/chicken.jpeg' style="width=300px;height:300px;">
    </td>
<td>

<h3> Inscrivez-vous !! </h3>

<form method="POST">
    <table
        <tr><td> Id </td><td><input name='idmembre' type='text' value=''></td></tr>
        <tr><td> Nom </td><td><input name='nom' type='text' value=''></td></tr>
        <tr><td> Prenom </td><td><input name='prenom' type='text' value=''></td></tr>
        <tr><td> tel </td><td><input name='telephone' type='text' value=''></td></tr>
        <tr><td> Adresse </td><td><input name='adresse' type='text' value=''></td></tr>
        <tr><td> Date de naissance </td>

        <td>
            <input type="text" name="datedenaissance" placeholder="YYYY-MM-DD" required 
pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
title="Enter a date in this format YYYY-MM-DD"/>
            
        <tr><td> Login </td><td><input name='login' type='text' value=''></td></tr>
        <tr><td> Password </td><td><input name='password' type='text' value=''></td></tr>
        <tr><td>  </td><td><input name='NEWENTER' type='submit' value='INSCRIRE'></td></tr>
    </table>
</form>

</td>
</tr>
</table>

<?php
$servername = "localhost";
$username ="root";//id11075442_mikel
//$password="mmal5470"
$dbname ="id11075442_bonnebouffe";

$conn=new mysqli($servername,$username,"",$dbname);

if (isset($_POST['NEWENTER'])){
        $idmembre  = $_POST['idmembre'];
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $telephone = $_POST['telephone'];
        $adresse = $_POST['adresse'];  
        $datedenaissance = $_POST['datedenaissance'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $sql="INSERT INTO membre (idmembre, prenom, nom, telephone, adresse, datedenaissance, login, password) VALUES (" . " '" . $idmembre . "', '" . $prenom . "', '" . $nom . "', '" . $telephone . "', '" . $adresse . "', '" . $datedenaissance . "', '" . $login . "', '" . $password ."')";
        $requete=mysqli_query($conn,$sql);
    }   
	
?>