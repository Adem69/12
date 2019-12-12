<?PHP
include "bug.php";
include "bugc.php";

if (isset($_POST['project']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['nbH']) and isset($_POST['tarifH'])){
$employe1=new employe($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['nbH'],$_POST['tarifH']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$employe1C=new bugc();
$employe1C->ajouterbug($bug);
//header('Location: afficherEmploye.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>