<?PHP
include "../entites/film.php" ;
include "../core/filmc.php" ;
	if (isset($_POST['ref']) and isset ($_POST['titre']) and isset($_POST['description']) and isset($_POST['type']) and isset($_POST['dateprojection']))
{	
$film=new film($_POST['ref'],$_POST['titre'],$_POST['description'],$_POST['type'],$_POST['dateprojection']);
$filmC=new FilmC() ;
$filmC->Ajouterfilm($film);
// $filmc->afficherfilm($film);
}
else
	{
		echo "vérifier les champs";	
	}


?>