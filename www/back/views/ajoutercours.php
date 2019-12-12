<?PHP
include "../entites/cours.php" ;
include "../core/ajoutercours.php" ;
	if ( isset($_POST['nom']) and isset ($_POST['nbparticipant']) and isset($_POST['type']) and  isset($_POST['duree'])) 
{	
$cours=new cours($_POST['nom'],$_POST['nbparticipant'],$_POST['type'],$_POST['duree']);


	

$to='ademgaied1@gmail.com';
$sujet='test mail en local' ;
$texte=$_POST['nom'];
$header='From : test@gmail.com';
mail($to, $sujet, $texte, $header);
if(mail($to, $sujet, $texte, $header))
{
	echo "envoyeeeeeeeeeeeeee";
}



 // class eli fl enteties
$coursc=new coursc() ; 
//hedhy class eli fl core
$coursc->ajoutercours($cours);
 $coursc->affichercours($cours);
 header('Location: table-datatable.php');
}
else
	{
		echo "vérifier les champs";	
	}


?>