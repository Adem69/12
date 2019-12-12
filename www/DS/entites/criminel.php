<?php 
/**
 * 
 */
class criminel
{
	public $cin;
	public $nom;
	public $prenom;
	public $datenaissance;
	public $nbcrimes;
	function __construct($cin,$nom,$prenom,$datenaissance,$nbcrimes)
	{ $this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->datenaissance=$datenaissance;
		$this->nbcrimes=$nbcrimes;
		$
	}
	function getCin(){
		return $this->cin;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getDatedenaissance(){
		return $this->nbHeures;
	}
	function getNbcrimes(){
		return $this->tarifHoraire;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setDatedenaissance($nbHeures){
		$this->nbHeures=$nbHeures;
	}
	function setNbcrimes($tarifHoraire){
		$this->tarifHoraire=$tarifHoraire;
	}
}
 ?>