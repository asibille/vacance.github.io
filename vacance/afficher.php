<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$idc=mysql_connect("localhost","root","");

$c=mysql_select_db("vacances");


$requete = " SELECT * FROM choix";


$resultat=mysql_query($requete);





?>



<TABLE border=1>

<tr>

<td> Raison sociale </td>

<td> Etoile </td>

<td> Adresse</td>

<td>  Email </td>

<td>Tel </td>

<td> Prix </td>

<td> animal  </td>

<td> ville </td>

<td>type </td>

<td>login </td>

<td>mot de passe </td>

</tr>

<?php while($enreg=mysql_fetch_array($resultat))
{ ?>

<tr>

<td> <?php echo $enreg ["raison_soc"];?></td>
<td> <?php echo $enreg ["etoile"];?></td>
<td> <?php echo $enreg ["adresse"];?></td>
<td> <?php echo $enreg ["email"];?></td>
<td> <?php echo $enreg ["tel"];?></td>

<td> <?php echo $enreg ["prix"];?></td>
<td> <?php echo $enreg ["animal"];?></td>
<td> <?php echo $enreg ["ville"];?></td>
<td> <?php echo $enreg ["type"];?></td>
<td> <?php echo $enreg ["login"];?></td>
<td> <?php echo $enreg ["mdp"];?></td>
</tr>

<?php } ?>
	
</TABLE>
<?php
mysql_close ($idc);
?>

</body>
</html>
</body>
</html>