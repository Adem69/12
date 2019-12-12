<?PHP
include "../config.php" ;
class FilmC
{
	function Ajouterfilm($film)
	{
		$sql = "insert into film (ref,titre,description,type,dateprojection) values(:ref,:titre,:description,:type,:dateprojection)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;
			// $req->BindValue(':ref',$film->getref()) ;
			// $req->BindValue(':titre',$film->gettitre()) ;
			// $req->BindValue(':description',$film->getdescription()) ;
			// $req->BindValue(':type',$film->gettype()) ;
			// $req->BindValue(':dateprojection',$film->getdateprojection()) ;
		$ref=$film->getref();
        $titre=$film->gettitre();
        $description=$film->getdescription();
        $type=$film->gettype();
        $dateprojection=$film->getdateprojection();
		$req->bindValue(':ref',$ref);
		$req->bindValue(':titre',$titre);
		$req->bindValue(':description',$description);
		$req->bindValue(':type',$type);
		$req->bindValue(':dateprojection',$dateprojection);
			
			$req->execute();
			return true ;
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
	}}
	?>