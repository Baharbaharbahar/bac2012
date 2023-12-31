<?php
$nom=$_POST["nom"];
$prenom=$_POST["nom"];
require('connexion.php');
$conn=mysql_connect($server,$username,$password,$bd) or die ("probleme de connxion au server ou a la base de donnees ");
$sql="select*from eleve where nom='$nom' and prenom='$prenom';";
$res=mysql_query($conn,$sql);


mysql_close($conn)
?>