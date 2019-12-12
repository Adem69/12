<?PHP
class bug{
	
	private $project;
	private $issueType;
	private $summary;
	private $lot;
	private $phase;
	
	private $priority;
	private $date;
	private $module;
	private $reporter;
	private $assignee;
	private $environment;
	private $description;
	
	function __construct($project,$issueType,$summary,$lot,$phase,$priority,$date,$module,$reporter,$assignee,$environment,$description){
		
		$this->project=$project;
		$this->issueType=$issueType;
		$this->summary=$summary;
		$this->lot=$lot;
		$this->phase=$phase;
        
        $this->priority=$priority;
		$this->date=$date;
		$this->reporter=$reporter;
		$this->assignee=$assignee;
		$this->environement=$environement;
		$this->description=$description;

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
	function getlot(){
		return $this->lot;
	}
	function getphase(){
		return $this->phase;
	}

	
function getpriority(){
		return $this->priority;
	}
	function getdate(){
		return $this->date;
	}
	function getreporter(){
		return $this->reporter;
	}
	function getassigne(){
		return $this->assigne;
	}
	function getenvironement(){
		return $this->environement;
	}
	function getdescription(){
		return $this->description;
	}


	

	
}

?>