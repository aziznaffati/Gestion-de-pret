<?
$con=mysql_connect('localhost','root','') or die ("<font size=7px color=blue>probleme au serveur</font>");
mysql_select_db('pret') or die ("<font size=7px color=blue>probleme de base</font>");

$mat_p=$_POST['mat_p'];
$mdp=$_POST['password'];

$req="SELECT mat_p,mdp FROM personnel WHERE mat_p ='$mat_p' AND mdp ='$mdp'";
$res= mysql_query($req) or die (mysql_error($con));
if ($row=mysql_fetch_array($res)){
			echo "<a href='demandepret.html'><button>Ajouter votre demande de pret</button></a><br><br>";
		$req1="SELECT * FROM suivi_retenu WHERE mat_p ='$mat_p'";
		$res1= mysql_query($req1) or die (mysql_error($con));
		while ($row=mysql_fetch_array($res1)){
	
		echo"<p align=center>Suivi pret</p>
	<table border=1 width=100%>
	<tr>
			<td>mONTANT RETENU</td>
			<td>date restant</td>
			<td>mATRICULE pERSONNE</td>
		</tr>
		<tr>
			<td>$row[0]</td>
			<td>$row[1]</td>
			<td>$row[2]</td>
		</tr>
	</table>";
	
}
}else{
		echo"<font size=6px color=gray>Veriffier Votre matricule ou votre Mot de passe</font><br>";
		echo "<a href='personnel.html'><button>Ajouter votre Compte Personnel</button></a><br><br>";


}


?>