<?PHP
include "../entites/cours.php" ;
include "../core/ajoutercours.php" ;
	if (isset($_POST['nom']) and isset ($_POST['nbparticipant']) and isset($_POST['type'])   and isset($_POST['duree']))
{	
$cours=new cours($_POST['nom'],$_POST['nbparticipant'],$_POST['type'],$_POST['duree']);
$coursC=new coursc() ;
$coursC->ajoutercours($cours);
// $coursc->affichercours($cours);
}
else
	{
		echo "vérifier les champs";	
	}


?>