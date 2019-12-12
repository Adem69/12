<?PHP
include "../entites/cours.php";
include "../core/ajoutercours.php";
if (isset($_GET['nom'])){
	$coursc=new coursc();
    $result=$coursc->recuperercours($_GET['nom']);
	foreach($result as $row){
		$id=$row['nom'];
		$nomprenom=$row['nbparticipant'];
		$email=$row['type'];
		$specialite=$row['duree'];
		
?>
 <form method="POST">
<table>
<caption>modifier cours</caption>

<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>nbparticipant</td>
<td><input type="number" name="nbparticipant" value="<?PHP echo $nbparticipant ?>"></td>
</tr>
<tr>

<tr>
<td>type</td>
<td><input type="text" name="type" value="<?PHP echo $type ?>"></td>
</tr>
<td>duree</td>
<td><input type="number" name="duree" value="<?PHP echo $duree ?>"></td>
</tr>


<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>



</table>
</form> 
<?PHP
	

if (isset($_POST['modifier'])){
	$cours=new cours($_POST['nom_nv'],$_POST['nbparticipant'],$_POST['type'],$_POST['duree']);
	$coursc->modifiercours($cours,$_POST['nbparticipant_nv']);
	echo $_POST['nom_nv'];
	header('Location: table-datatable.php');
}
}
}
?>