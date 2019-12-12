<?php 
include "../config.php" ;
class coachc
{
	function ajoutercoach($coach)
	{
		$sql = "insert into coach (id,nomprenom,email,specialite,age,image) values(:id,:nomprenom,:email,:specialite,:age,:image)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;
			
			//$req->BindValue(':id',$coach->getid()) ;
		$id=$coach->getid();
        $nomprenom=$coach->getnomprenom();
        $email=$coach->getemail();
        $specialite=$coach->getspecialite();
        $age=$coach->getage();
        $image=$coach->getimage();
		$req->bindValue(':id',$id);
		$req->bindValue(':nomprenom',$nomprenom);
		$req->bindValue(':email',$email);
		$req->bindValue(':specialite',$specialite);
		$req->bindValue(':age',$age);
		$req->bindValue(':image',$image);
			
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
function affichercoach()
 	{
		$sql="SElECT * From coach";
 		$db = config::getConnexion();
 		try{
 		$liste=$db->query($sql);
 		return $liste;
 		}
         catch (Exception $e){
             die('Erreur: '.$e->getMessage());
        }	
         header("Location:../views/table-datable1.php");


	}
	function supprimercoach($id)
	{
		$sql="DELETE FROM coach where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercoach($coach,$id)
{
		$sql="UPDATE coach SET id=:id, nomprenom=:nomprenom,email=:email WHERE specialite=:specialite";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id=$coach->getid();
        $nomprenom=$coach->getnomprenom();
        $email=$coach->getemail();
        $specialite=$coach->getspecialite();
		$datas = array(':id'=>$id, ':nomprenom'=>$nomprenom, ':email'=>$email,':specialite'=>$specialite);
		$req->bindValue(':id',$id);
		$req->bindValue(':nomprenom',$nomprenom);
		$req->bindValue(':email',$email);
		$req->bindValue(':specialite',$specialite);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercoach($id){
		$sql="SELECT * from coach where id=$id";
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