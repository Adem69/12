function controle ()
{
	a=f.ref.value;
	if (a.length==0) {
		alert('la ref du film est obligatoire');
		return false;
	}
	var c=f.titre.value;
if (c.length==0) {
	alert("le titre est obligatoire ");
	document.getElementById('titre').id="cnss2";
	return false;

}
if (c.length!=0 && a.length!=0) {
	alert('merci pour ajout');
	return true; 
}
}