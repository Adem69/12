function ajouter()
{ var a;
	a=document.getElementById('CIN').value;
	if (a.length!=8) {
		alert('le cin doit etre de 8 chiffre');

	}
	var nom=document.getElementById('NOM').value;
	var n1=nom.charCodeAt(0);
	if((n1<=64)||(n1>=91)) {

		alert("veuillez maj");
	}

	
	var b=document.getElementById('PRENOM').value;
	if (b.length<2) {
		alert("le champ doit avoir au moins 2")
	}


}	