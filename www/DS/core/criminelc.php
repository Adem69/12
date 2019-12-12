    
<?php

    function ajouterCriminel($criminel){
		$sql="insert into criminel (cin,nom,prenom,datenaissance,nbcrimes) values (:cin, :nom,:prenom,:datenaissance,:nbcrimes)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$employe->getCin();
        $nom=$employe->getNom();
        $prenom=$employe->getPrenom();
        $datenaissance=$employe->getDatenaissance();
        $nbcrimes=$employe->getNbcrimes();
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':datenaissance',$datenaissance);
		$req->bindValue(':nbcrimes',$nbcrimes);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	} ?>