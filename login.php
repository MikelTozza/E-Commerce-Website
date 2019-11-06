<center>
<?php
session_start();
$servername = "localhost";
$username ="root";
//$password="mmal5470"
$dbname ="id11075442_bonnebouffe";

$conn=new mysqli($servername,$username,"",$dbname);
    
    
    //SECTION ADMIN
if (isset ($_POST["enter2"]) && !empty ($_POST['login2']) && !empty($_POST['password2'])){
    
    $login =$_POST["login2"];
    $password=$_POST["password2"];
    
    $selection=mysqli_query($conn,"select * from admin where login='$login' and password='$password'") or die
	("Erreur de selection");

	$ligne = mysqli_fetch_row($selection);
    
    if ($ligne[0] == $login){
        $_SESSION["login"]=$ligne[0];
	    $_SESSION["password"]=$ligne[1];	
        echo '<script>window.location.href="admin/indexadmin.php";</script>';
    }
    else{
        echo 'FAILED';
 }
}

    //SECTION MEMBRE
 if (isset ($_POST["enter"]) && !empty ($_POST['login']) && !empty($_POST['password'])){
    $login =$_POST["login"];
    $password=$_POST["password"];
    
    $selection=mysqli_query($conn,"select * from membre where login='$login' and password='$password'") or die
	("Erreur de selection");

	$ligne = mysqli_fetch_row($selection);
    
    if ($ligne[6] == $login){
        $_SESSION["login"]=$ligne[6];
	    $_SESSION["password"]=$ligne[7];	
        echo '<script>window.location.href="membre/indexmembre.php";</script>';
    }
    
}
    
    //SECTION NON MEMBRE
    
?>
</center>
<table>
<tr>
<td>
<div id="loginIMG">
<img src='photo/chicken.jpeg' style="width=300px;height:300px;">
</div>
</td>
<td>
<h3> branchez-vous membre! </h3>
<form method="POST">
<table>

<tr><td> Login </td><td><input name='login' type='text' value=''></td></tr>
<tr><td> Password </td><td><input name='password' type='text' value=''></td></tr>
<tr><td>  </td><td><input name='enter' type='submit' value='Enter'></td></tr>
<td><a href='index.php?lien=nonmembre'> Non-membre! </a></td>
</table>
</form>

<h3> branchez-vous admin! </h3>
<form method="POST">
<table>

<tr><td> Login </td><td><input name='login2' type='text' value=''></td></tr>
<tr><td> Password </td><td><input name='password2' type='text' value=''></td></tr>
<tr><td>  </td><td><input name='enter2' type='submit' value='Enter'></td></tr>

</table>
</form>
</td>
</tr>
</table>
