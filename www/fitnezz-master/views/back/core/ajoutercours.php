<?PHP
include "../config.php" ;
class coursc
{
	function Ajoutercours($cours)
	{
		$sql = "insert into cours (nom,nbparticipant,type,duree) values(:nom,:nbparticipant,:type,:duree)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;
			// $req->BindValue(':nom',$cours->getnom()) ;
			// $req->BindValue(':nbparticipant',$cours->getnbparticipant()) ;
			// $req->BindValue(':type',$cours->gettype()) ;
			// $req->BindValue(':type',$cours->gettype()) ;
			// $req->BindValue(':duree',$cours->getduree()) ;
		$nom=$cours->getnom();
        $nbparticipant=$cours->getnbparticipant();
        $type=$cours->gettype();
        $type=$cours->gettype();
        $duree=$cours->getduree();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':nbparticipant',$nbparticipant);
		$req->bindValue(':type',$type);
		$req->bindValue(':duree',$duree);
			
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