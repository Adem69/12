<?PHP
include "../Core/coachC.php";
$coachC=new coachC();
if (isset($_POST['id'])){
	$coachC-> supprimercoach($_POST["id"]);
	header('Location: table-datatable1.php');
}


?>