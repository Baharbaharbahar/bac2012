<?php
$e=$_POST["e"];
$file=$_POST["file"];
$garcon=$_POST["garcon"];
require('connexion.php');
$req="select * from vote where e='$e";
$rep=mysql_query($req)or die (mysql_error());
if (mysql_num_rows($req)==0)
   echo "Vous n'etre pas inscrit ";
   else 
   {
       $req="select * from vote where e='$e'and file='$file' and garcon='$garcon'";
       $rep=mysql_query($req)or die (mysql_error());
       if (mysql_num_rows()==1)
       echo "Vous avez deja voté";
   }
   else {
       $d=date('Y-m-d');
       $req="insert into vote values ('$e', '$file','$garcon');";
       $rep=mysql_query($req)or die (mysql_error())
       if (mysqlaffected_rows()!=-1)
    echo "electeur avec success!!"
   }
   mysql_close();
?>
