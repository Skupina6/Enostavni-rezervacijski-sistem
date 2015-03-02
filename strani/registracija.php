<html>

<head>

<style>


</style>

</head>

<body>
<?php
// problem tukaj je kdaj zapreti povezavo

if(isset($_POST['ime2'])&&isset($_POST['geslo2']))
{
	$server_name="localhost";
	$u_ime=$_POST['ime2'];
	$u_geslo=$_POST['geslo2'];
	$baza="test3";
	$conn=mysqli_connect($server_name,$u_ime,$u_geslo,$baza);
	
	if(!$conn)	// ali je povezava z pb uspesna?
	{
		echo '<br>Povezava neuspesna<br>';
		echo '<a href="registracija.php">Nazaj</a>';
	}
	else 
	{
		echo 'povezava uspesna';
		echo '<form action="profil.php" method="POST">';
		echo '<input type="hidden" name="ime" value="'.$u_ime.'">';
		echo '<input type="hidden" name="geslo" value="'.$u_geslo.'">';
		echo '<input type="submit" value="Naprej"></form>';
		mysqli_close($conn);
	}
}
else 
{
	echo '<form action="registracija.php" method="POST">';
	echo 'Vpisi svoje podatke za vstop v podatkovno bazo. Ko se vpises se enkrat klikni "Naprej".<br>';
	echo 'Ime:<input type="text" name="ime2"><br>';
	echo 'Priimek:<input type="password" name="geslo2"><br>';
	echo '<input type="submit"></form>';
	

}
?>


</body>

</html>
