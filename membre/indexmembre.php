<!-- Site de la Bonne bouffe -->

<style>
    li {
        display:inline;
        margin-right: 100px;
    }
</style>

<center>
<div style='width:80%;height:25%;border:1px solid black;'>
    
</div>

<div style='width:80%;height:5%;border:1px solid black;'>
    <!-- Section menu -->
    <ol>
        <li><a href="indexmembre.php?lien=accueil"> Accueil</a></li>
        <li><a href="indexmembre.php?lien=recettes"> Recettes</a></li>
        <li><a href="indexmembre.php?lien=contact"> Contact</a></li>
        <li><a href="indexmembre.php?lien=references"> References</a></li>
    </ol>
</div>

<div style='width:80%;height:65%;'>
<!-- Section detail -->
<?php
    //Recuperation du lien
    if(isset($_REQUEST["lien"]))
    {
        $lien=$_REQUEST["lien"];
        //selon le lien cliquer
        switch($lien)
        {
                case"accueil":
                    include("acceuil.php");
                break;
                
                case"login":
                    include("login.php");
                break;
                
                case"recettes":
                    include("recettes.php");
                break;
                
                case"contact":
                    include("contact.php");
                break; 
                
                case"references":
                    include("references.php");
                break;

                case"nonmembre":
                    include("nonmembre.php");
                break;
        }
    }
    else
        include("acceuil.php")

?>
</div>

<div style='width:80%;height:5%;border:1px solid black;'>

</div>
</center>