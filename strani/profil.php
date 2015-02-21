<html>

<head>

<style>


</style>

</head>

<body>

<?php
// povezava z bazo

$server_name="localhost";
$u_ime=$_POST['ime'];
$u_geslo=$_POST['geslo'];
$baza="test3";

$conn=mysqli_connect($server_name,$u_ime,$u_geslo,$baza);

if(!$conn)
{
	die("Povezava neuspesna:".mysqli_connect_error()."<br>");
}
else echo "Povezava uspesna<br>";


// profil
// podatki se tukaj prejmejo in se nato preko POST pošljejo na naslednjo stran
// odvisno od statusa v tabeli uporabnik
// nastavi default vrednosti:
$user="username";
$ime="ime";
$priimek="priimek";
$status="status";
$email="email";
$naloga="naloga";
$prosnje_za_naloge="prosnje za naloge";
$razred="razred";

// kopiranje iz pb na podlagi tega, da je username enak imenu, ki ga je uporabnik
// vpisal pri registraciji
/*
$sql="SELECT u.username,u.ime,u.priimek,u.status,u.email 
FROM uporbnik u
WHERE u.username=".$u_ime."LIMIT 0,1";
*/
// test
$sql="SELECT u.IDu,u.ime,u.priimek FROM uporabnik u";
if(mysqli_query($conn,$sql))
{
	echo "Branje uspesno<br>";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		// izpise podatke vsake vrstice
		while($row=mysqli_fetch_assoc($result))
		{
			echo "ID:".$row['IDu'].", ime:".$row['ime'].", priimek:".$row['priimek']."<br>";
		}
	}
}
else echo "Branje neuspesno";

$user="username";
$ime="ime";
$priimek="priimek";
$status="status";
$email="email";
$naloga="naloga";
$prosnje_za_naloge="prosnje za naloge";
$razred="razred";


// forma ki izbere naslednjo stran

if($status=="ucitelj")
	echo '<form action="naloge_ucitelj.php" method="POST">';
else if($status=="kandidat")
	echo '<form action="naloge_kandidat.php" method="POST">';
else if($status=="upravitelj")
	echo '<form action="naloge_upravitelj.php" method="POST">';
else echo '<form action="profil.php" method="POST">';
?>

	<input type="checkbox" value="sprememba" id="spremeni_status" name="spremeni_status">Sprememba statusa:
	<select name="sprememba_statusa" id="seznam">
		<option value="uporabnik">Uporabnik</option>
		<option value="upravitelj">Upravitelj</option>
		<option value="ucitelj">Ucitelj</option>
	</select>
	<br>
	<input type="submit" value="naprej">

</form>
<?php
/*
// izpis podatkov

echo $user.$ime.$priimek.$status.$email.$razred;
if()	// preveri, ce ima uporabnik nalogo, ce ima prosnjo ali nic od tega
{
	echo $naloga;
}
else if()
{
	echo $prosnje_za_naloge;
}
else echo "uporabnik nima nobebe naloge in nobene prosnje za naloge";
*/
?>

<script>
function sprememba_statusa()
{
	var a=document.getElementByID("spremeni_status");
	var b=document.getElementByID("seznam");
}

</script>

</body>

</html>
