<?PHP
include "../config.php" ;
class coursc
{
	function ajoutercours($cours)
	{
		$sql = "insert into cours (nom,nbparticipant,type,duree) values(:nom,:nbparticipant,:type,:duree)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;
			
			//$req->BindValue(':nom',$cours->getnom()) ;
		$nom=$cours->getnom();
        $nbparticipant=$cours->getnbparticipant();
        $type=$cours->gettype();
        $duree=$cours->getduree();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':nbparticipant',$nbparticipant);
		$req->bindValue(':type',$type);
		$req->bindValue(':duree',$duree);
			
			$req->execute();
			return true ;
			echo "les valeurs sont enregistres avec succes";
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
	}
function affichercours()
 	{
		$sql="SElECT * From cours";
 		$db = config::getConnexion();
 		try{
 		$liste=$db->query($sql);
 		return $liste;
 		}
         catch (Exception $e){
             die('Erreur: '.$e->getMessage());
        }	
         header("Location:../views/table-datable.php");


	}
	function supprimercours($nom)
	{
		$sql="DELETE FROM cours where nom= :nom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$nom);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function trie(){
		$sql="SELECT * from cours order by nom desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }}
	function modifiercours($cours,$nom)
{
		$sql="UPDATE cours SET nom=:nom, nbparticipant=:nbparticipant,type=:type ,duree=:duree WHERE nom=:nom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nom=$cours->getnom();
        $nbparticipant=$cours->getnbparticipant();
        $type=$cours->gettype();
        $duree=$cours->getduree();
		$datas = array(':nom'=>$nom, ':nbparticipant'=>$nbparticipant, ':type'=>$type,':duree'=>$duree);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':nbparticipant',$nbparticipant);
		$req->bindValue(':type',$type);
		$req->bindValue(':duree',$duree);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercours($nom){
		$sql="SELECT * from cours where nom=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recherchercours($nom){
		$sql="SELECT * from cours where nom like '%".$nom."%' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}
	
	
	 
	?>