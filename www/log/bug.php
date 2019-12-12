<?PHP
class bug{
	
	private $project;
	private $issueType;
	private $summary;
	private $tarifHoraire;
	private $nbHeures;
	function __construct($project,$nom,$prenom,$tarif,$nb){
		$this->project=$project;
		$this->issueType=$issueType;
		$this->summary=$summary;
		$this->tarifHoraire=$tarif;
		$this->nbHeures=$nb;
	}
	
	function getproject(){
		return $this->project;
	}
	function getissueType(){
		return $this->issueType;
	}
	function getsummary(){
		return $this->summary;
	}
	function getNbHeures(){
		return $this->nbHeures;
	}
	function getTarifHoraire(){
		return $this->tarifHoraire;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setNbHeures($nbHeures){
		$this->nbHeures=$nbHeures;
	}
	function setTarifHoraire($tarifHoraire){
		$this->tarifHoraire=$tarifHoraire;
	}
	
}

?>