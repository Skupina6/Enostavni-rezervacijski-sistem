<html>

<head>

<style>


</style>

</head>

<body>
<?php


if(isset($_POST['ime2'])&&isset($_POST['geslo2']))
{
	$server_name="localhost";
	$u_ime=$_POST['ime2'];
	$u_geslo=$_POST['geslo2'];
	$baza="enostavnirezervacijskisistem2";
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
		echo '<input type="submit" value="Naprej na profil"></form>';
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
	

	echo '<form action="registracija.php" method="POST">';
	
	
	echo 'REGISTRAICJA<br>Vpisi svoje podatke. Ko se vpises se enkrat klikni "Naprej".<br>';
	echo 'Uporabnisko ime:<input type="text" name="uime3"><br>';
	echo 'Ime:<input type="text" name="ime3"><br>';
	echo 'Priimek:<input type="text" name="priimek"><br>';
	echo 'Geslo:<input type="password" name="geslo3"><br>';
	echo 'Emso:<input type="number" name="emso"><br>';
	echo 'Davcna:<input type="number" name="davcna"><br>';
	echo 'Email:<input type="email" name="email"><br>';
	
	echo 'Vrsta profila:<select name="vrsta">';		// ucitelj ali dijak?
		echo '<option value="prazno">Izberi</option>';
		echo '<option value="uporabnik">uporabnik</option>';
		echo '<option value="ucitelj">ucitelj</option>';
	echo '<select><br>';
	
	echo '<input type="submit"></form>';

}
if(isset($_POST['ime3']) && isset($_POST['geslo3']))
{
	// registracija
	$server_name="localhost";
	$user=$_POST['uime3'];
	$u_ime=$_POST['ime3'];
	$u_priimek=$_POST['priimek'];
	$u_geslo=$_POST['geslo3'];
	$u_emso=$_POST['emso'];
	$u_davcna=$_POST['davcna'];
	$u_vrsta=$_POST['vrsta'];
	$u_status="aktiven";
	if(isset($_POST['email']))
		$u_email=$_POST['email'];
	else $u_email='NULL';
	$baza="enostavnirezervacijskisistem2";
	$conn=mysqli_connect($server_name,'user1','user1',$baza);
	
	if(!$conn)	// ali je povezava z pb uspesna?
	{
		echo '<br>Povezava neuspesna<br>';
		echo '<a href="registracija.php">Nazaj</a>';
	}
	else 
	{
		// povezava uspesna
		
		
		// vpis novega uporabnika
		$sql="CREATE USER '".$user."'@'localhost' IDENTIFIED BY '".$u_geslo."';";
		
		if(mysqli_query($conn,$sql))
		{
			echo "Zapisovanje novega uporabnika uspesno!<br>";
			$result=mysqli_query($conn,$sql);
		}
		else 
		{
			echo "Zapisovanje novega uporabnika neuspesno! sql:".$sql."<br>";
		}
		
		// dodelitev pravic 
		switch($u_vrsta)
		{
			case "uporabnik":	// skupina uporabniki. glej mysql admin
				$sql="GRANT SELECT ON *.* TO '".$user."'@'localhost';";
				break;
				
			case "ucitelj":		// skupina ucitelji
				$sql="GRANT INSERT ON *.* TO '".$user."'@'localhost';";
				break;
				
			default:
				echo "Dodeljevanje k skupini ni uspelo<br>";
				break;
		}
		
		if(mysqli_query($conn,$sql))
		{
			echo "Dodeljevanje pravic uspesno!<br>";
			//$result=mysqli_query($conn,$sql);
		}
		else 
		{
			echo "Dodelitev pravic neuspesno! sql:".$sql."<br>";
		}
		
		// vpisovanje podatkov v tabelo uporabnik
		
		// !!! pusti te posebne narekovaje, ker ce jih spremenis, poizvedba ne dela !!!
		
		if($u_vrsta=="uporabnik")
			$sql="INSERT INTO `enostavnirezervacijskisistem2`.`uporabnik` (`Emso`, `Davcna_st`, `Username`, `Ime`, `Priimek`, `Status`, `Email`, `Datum_prijave`, `Datum_prekinitve`, `Password`)  VALUES ('".$u_emso."', '".$u_davcna."', '".$user."', '".$u_ime."', '".$u_priimek."', '".$u_status."', NULL , CURRENT_DATE(), NULL, NULL);";
		else if($u_vrsta=="ucitelj")
			$sql="INSERT INTO `enostavnirezervacijskisistem2`.`ucitelj` (`Ime`, `Priimek`, `Username`, `Password`, `Email`) VALUES ('".$u_ime."', '".$u_priimek."', '".$user."', NULL, '".$u_email."');";
		else {}
		
		if(mysqli_query($conn,$sql))
		{
			echo "Zapisovanje v tabelo uporabnik uspesno!<br>";
			//$result=mysqli_query($conn,$sql);
		}
		else 
		{
			echo "Zapisovanje v tabelo uporabnik neuspesno! sql:".$sql."<br>";
		}
		
		// prenos podatkov v profil.php
		
		echo '<form action="profil.php" method="POST">';
		echo '<input type="hidden" name="uime3" value="'.$user.'">';
		echo '<input type="hidden" name="geslo3" value="'.$u_geslo.'">';
		echo '<input type="hidden" name="status" value="'.$u_status.'">';
		echo '<input type="hidden" name="email" value="'.$u_email.'">';
		
		echo '<input type="submit" value="Naprej na profil"></form>';
		
		mysqli_close($conn);
	}
}
?>


</body>

</html>
