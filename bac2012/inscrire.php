<?php
$num=$_POST["num"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$genre=$_POST["genre"];
$ns=$_POST["ns"];
require('connexion.php');
$conn=mysql_connect($server,$username,$password,$bd)or die ("probleme de connxion au server ou a la base dr donnees");
$req="select* from eleve where num='$num";
$rep=mysql_query($req)or die (mysql_error());
if (mysql_num_rows()==1)
   echo "Eleve deja inscrit ";
   else {
    $req="insert into eleve values ('$num','$nom','$prenom','$genre','$ns');";
    $rep=mysql_query($req)or die (mysql_error())
    if (mysqlaffected_rows()!=-1)
 echo "confirmation de l'inscription"
}
mysql_close();
?>