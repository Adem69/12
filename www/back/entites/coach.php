<?PHP
class coach{
	private $id;
	private $nomprenom;
	private $email;
	Private $specialite;
	Private $age;
	Private $image;
	
	
	function __construct($id,$nomprenom,$email,$specialite,$age,$image){
		$this->id=$id;
		$this->nomprenom=$nomprenom;
		$this->email=$email;
		$this->specialite=$specialite;
		$this->age=$age;
		$this->image=$image;
	}
	
	function getid(){
		return $this->id;
	}
	function getnomprenom(){
		return $this->nomprenom;
	}
	function getemail(){
		return $this->email;
	}
	
	function getspecialite(){
		return $this->specialite;
	}
	function getage(){
		return $this->age;
	}
	
	function getimage(){
		return $this->image;
	}
	
function setid($id){
		$this->id=$id;
	}
	function setnomprenom($nomprenom){
		$this->nomprenom=$nomprenom;
	}
	function setemail($email){
		$this->email=$email;
	}
	
	function setspecialite($specialite){
		$this->specialite=$specialite;
	}
	function setage($age){
		$this->age=$age;
	}
	
	function setimage($image){
		$this->image=$image;
	}
	
	
}

?>