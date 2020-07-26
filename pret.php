<?
$con=mysql_connect('localhost','root','') or die ("<font size=7px color=blue>probleme au serveur</font>");
mysql_select_db('pret') or die ("<font size=7px color=blue>probleme de base</font>");
$mat=$_POST['mat_p'];
$montant=$_POST['montant'];
$date1=$_POST['date_deb'];
$date2=$_POST['date_fin'];
$nbm=$_POST['Nbm'];
$ty_pr=$_POST['R1'];
$n=$montant/$nbm;
$req2="SELECT * FROM type_pret WHERE desc='$ty_pr'";
		$res2= mysql_query($req2) or die (mysql_error($con));
		if ($row=mysql_fetch_array($res2)){
			$code=$row['code_p'];
$req="select mat_p,code_p from pret where mat_p= '$mat'AND code_p='$code'";
$res= mysql_query($req)or die (mysql_error($con));
if (mysql_fetch_row($res)){
	echo"<font size=4px color=gray>Matricule et code deja utilise</font>";
	
}
else{
	$req1="insert into pret values ('$montant','$n','$date1','$date2','$nbm','$mat','$code')";
	$res1= mysql_query($req1)or die (mysql_error($con));
	if (($res1)==1){
		echo"<font size=3px color=gray>Ajout fait avec succès</font>";
	
	
	}
	
}
		}else{echo"erreur";}
   



?>