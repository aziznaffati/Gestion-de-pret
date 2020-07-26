<?
$con=mysql_connect('localhost','root','') or die ("<font size=7px color=blue>probleme au serveur</font>");
mysql_select_db('pret') or die ("<font size=7px color=blue>probleme de base</font>");
$mat_p=$_POST['mat_p'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mdp=$_POST['mdp'];
$mdp1=$_POST['mdp1'];
$num_pas=$_POST['num_pas'];
$sex=$_POST['R1'];
$tel=$_POST['tel'];
$sit_adm=$_POST['R2'];
if($mdp==$mdp1){
$req="select mat_p from personnel where mat_p= '$mat_p'";
$res= mysql_query($req)or die (mysql_error($con));
if (mysql_fetch_row($res)){
	echo"<font size=4px color=gray>Login deja utilise</font>";
	
}
else{
	$req1="insert into personnel values ('$mat_p','$nom','$prenom','$mdp','$num_pas','$sex','$tel','$sit_adm')";
	$res1= mysql_query($req1)or die (mysql_error($con));
	if (($res1)==1){
		echo"<font size=3px color=gray>Ajout fait avec succès</font>";
		echo"<script>window.open('Connect.html')</script>";
	
	
	}
	
}
}else{
		echo"<font size=4px color=gray>Confirmer votre mot de passe</font>";

}
   



?>