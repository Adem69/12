<?PHP
class film{
	private $ref;
	private $titre;
	private $description;
	private $type;
	private $dateprojection;
	function __construct($ref,$titre,$description,$type,$dateprojection){
		$this->ref=$ref;
		$this->titre=$titre;
		$this->description=$description;
		$this->type=$type;
		$this->dateprojection=$dateprojection;
	}
	
	function getref(){
		return $this->ref;
	}
	function gettitre(){
		return $this->titre;
	}
	function getdescription(){
		return $this->description;
	}
	function gettype(){
		return $this->type;
	}
	function getdateprojection(){
		return $this->dateprojection;
	}
	
function setref($ref){
		$this->ref=$ref;
	}
	function settitre($titre){
		$this->titre=$titre;
	}
	function setdescription($description){
		$this->description=$description;
	}
	function settype($type){
		$this->type=$type;
	}
	function setdateprojection($dateprojection){
		$this->dateprojection=$dateprojection;
	}
	
	
}

?>