<?PHP
include "../entites/coach.php";
include "../core/coachC.php";
if (isset($_GET['id'])){
	$coachc=new coachc();
    $result=$coachc->recuperercoach($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nomprenom=$row['nomprenom'];
		$email=$row['email'];
		$specialite=$row['specialite'];
		$age=$row['age'];
		$image=$row['image'];
		
?>
 <form method="POST">
<table>
<caption>modifier Coach</caption>

<td>NomPrenom</td>
<td><input type="text" name="nomprenom" value="<?PHP echo $nomprenom ?>"></td>
</tr>
<tr>
<td>Mail</td>
<td><input type="email" name="email" value="<?PHP echo $email ?>"></td>
</tr>
<tr>

<tr>
<td>Specialite</td>
<td><input type="text" name="specialite" value="<?PHP echo $specialite ?>"></td>
</tr>
<td>age</td>
<td><input type="number" name="age" value="<?PHP echo $age ?>"></td>
</tr>
<tr>

<td>image</td>
<td>	<label>FILE:</label><input type="file" name="image" />  
</td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_nv" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>



</table>
</form> 
<?PHP
	

if (isset($_POST['modifier'])){
	$coach=new coach($_POST['id_nv'],$_POST['nomprenom'],$_POST['email'],$_POST['specialite'],$_POST['age'],$_POST['image']);
	$coachc->modifiercoach($coach,$_POST['id_nv']);
	echo $_POST['id_nv'];
	header('Location: table-datatable1.php');
}
}
}
?>