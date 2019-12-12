<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	if (isset($_POST['envoyer'])) {

	

$to='ademgaied1@gmail.com';
$sujet='test mail en local' ;
$texte=$_POST['nom'];
$header='From : test@gmail.com';
mail($to, $sujet, $texte, $header);}
if(mail($to, $sujet, $texte, $header))
{
	echo "envoyeeeeeeeeeeeeee";
}
	 ?>

</body>
</html>