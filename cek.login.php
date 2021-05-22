<?php
$user="root";
$pass="-root-";
$server="localhost";
$db="pemkot";
$MySQLi=new MySQLi($server, $user, $pass, $db);

if(isset($_POST['tblSubmit']))
{
	if($_POST['tblSubmit']=="daftar") // daftar
	{

		$iPanjangPassword=strlen($_POST['strPassword']);
		if($iPanjangPassword<8)
			echo "panjang password minimal harus 8 karakter dan harus angka";
		else
		{

			if(!is_numeric($_POST['strPassword']))
				echo "password harus numeric";
			else
			{
				$query="INSERT INTO p_muser 
						SET strUsername='".$_POST['strUsername']."', 
							strPassword='".MD5($_POST['strPassword'])."',
							usrCreate='".$_POST['strUsername']."', 
							dtCreate=NOW()
						";
				//die($query);
				$MySQLi->query($query);
				header("location:index.php");
			}
		}

	}
	elseif($_POST['tblSubmit']=="batal") // batal
	{
		header("location:index.php");
	}
	elseif($_POST['tblSubmit']=="login") // login
	{
		$query="SELECT ID
				FROM p_muser 
				WHERE strUsername='".$_POST['strUsername']."' AND 
					  strPassword='".MD5(".$_POST['strPassword'].")."' AND 
					  stsAktif=1
				";
		$hasil=$MySQLi->query($query);
		/*
		if($hasil-)
		*/
	}
}
?>