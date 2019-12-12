<?PHP
include "../Core/ajoutercours.php";
$coursC=new coursC();
if (isset($_POST['nom'])){
	$coursC->supprimercours($_POST["nom"]);
	header('Location: table-datatable.php');
}

?>
