 <?php session_start()?>    

<html>
    <head>
        <link rel="stylesheet" href="Page_connexion.css">
        <meta charset="utf-8"/>
    </head>
        <!--Mise en place du logo et connexion/inscription-->
          <?php include("../Controleur/choix_header.php")?>        
         <body>
        <!--Information pour la connexion-->
        <div style="background-color: rgb(112, 169, 198);margin-top: -29px;border:solid 1.5px black;">
            <br> </br>
            <div style="border:solid 2.5px black; height: 300px; width:1000px;margin:auto;background-color: white;">
                <p style="font-size: 28px; margin-left:270px ;"> Votre inscription a été prise en compte. <a href="../Vue/Page_Profil.php">(Voir profil)</a></p>
            </div>
            <br>
            <br>
        <!--Bas de page-->
        <?php include'footer.php'?>
    </div>
    </body>
</html>

<?php
$Nom_club=$_POST['Nom_du_club'];
$Nom_proprietaire=$_POST['Nom_proprietaire'];
$Adresse=$_POST['Adresse_du_club'];
$Departement=$_POST['choixDepart'];
$Sport=$_POST['Sport'];
$Numero_club=$_POST['Numero_association'];
$Telephone=$_POST['Telephone_du_club'];
$Description=$_POST['Descriptif'];
if (isset($_POST)){
    if (!empty($Nom_club) and strlen($Nom_club)>5 and strlen($Nom_club)<50){
        if (!empty($Nom_proprietaire) and strlen($Nom_proprietaire)>3 and strlen($Nom_proprietaire)<50){
            if (!empty($Adresse) and strlen($Adresse)>10){
                if (!empty($Departement) and $Departement !=0){
                    if (!empty($Numero_club) and $Numero_club>99999999 and $Numero_club<100000000000){
                        if (!empty($Telephone) and $Telephone>99999999 and $Telephone<100000000000){
                            if (!empty($Sport) and $Sport!="0"){
                                
                                    extract($_POST);
                                    include ('../Modele/Bdd_connect_club.php');
                                
                            }else echo 'erreur dans le sport choisi';
                        }else echo 'erreur dans le numéro de téléphone';
                    }else echo "erreur dans le numéro d'association";
                }else echo 'erreur dans le département';
            }else echo "erreur dans l'adresse du club";
        }else echo 'erreur dans le nom du propriétaire';
    }else echo 'erreur dans le nom du club';
}    
?>