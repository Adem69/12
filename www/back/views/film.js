function controle ()
{
	var a=document.getElementById('id').value;
	if (a.length==0) {
		alert('id  est obligatoire');
		return false;
	}
	var c=document.getElementById('nomprenom').value;
if (c.length==0) {
	alert("le nom prenom est obligatoire ");
	document.getElementById('nomprenom').id="cnss2";
	return false;

}
if (c.length!=0 && a.length!=0) {
	alert('merci pour ajout');
	return true; 
}
}