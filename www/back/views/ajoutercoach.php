<?PHP
include "../entites/coach.php" ;
include "../core/coachC.php" ;
	if (isset($_POST['id']) and isset ($_POST['nomprenom']) and isset($_POST['email']) and  isset($_POST['specialite'])and  isset($_POST['age']) and  isset($_POST['image'])) 
{	
$coach=new coach($_POST['id'],$_POST['nomprenom'],$_POST['email'],$_POST['specialite'],$_POST['age'],$_POST['image']); // class eli fl enteties
$coachC=new coachc() ; //hedhy class eli fl core
$coachC->ajoutercoach($coach);
 $coachC->affichercoach($coach);
 header('Location: table-datatable1.php');
}

else
	{
		echo "vérifier les champs";	
	}


?>