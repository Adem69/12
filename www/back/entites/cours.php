<?PHP
class cours{
	private $nom;
	private $nbparticipant;
	private $type;
	Private $duree;
	
	
	function __construct($nom,$nbparticipant,$type,$duree){
		$this->nom=$nom;
		$this->nbparticipant=$nbparticipant;
		$this->type=$type;
		$this->duree=$duree;
	}
	
	function getnom(){
		return $this->nom;
	}
	function getnbparticipant(){
		return $this->nbparticipant;
	}
	function gettype(){
		return $this->type;
	}
	
	function getduree(){
		return $this->duree;
	}
	
function setnom($nom){
		$this->nom=$nom;
	}
	function setnbparticipant($nbparticipant){
		$this->nbparticipant=$nbparticipant;
	}
	function settype($type){
		$this->type=$type;
	}
	
	function setduree($duree){
		$this->duree=$duree;
	}
	
	
}

?>