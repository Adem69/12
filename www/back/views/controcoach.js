function test1()
{
	var verif=0;
	if (f1.id.value=="") {
		alert("le id est obligatoire");
	}
	else
	{
		 verif+=1;
	}
	if(f1.nomprenom.value=="")
	{
		alert("le nomprenom est obligatoire");
	}
	else
	{
		 verif+=1;
	}
	if(f1.email.value==0)
	{
		alert(" email est obligatoire");
	}
	else
	{
		 verif+=1;
	}
	if(f1.specialite.value==0)
	{
		alert("la specialite est obligatoire");
		verif+=1;
	}
	if(f1.age.value=="")
	{
		alert(" age est obligatoire");
		verif+=1;
	}
	
	if(verif==5)
	{
		alert("merci pour votre ajout");
	}
	
	
	
	

}