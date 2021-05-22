<?php
if($_GET['pil']=="daftar" && isset($_GET['pil']))
{
?>
	<form name="daftarpage" action="cek.login.php" method="post" enctype="multipart/form-data">
		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td><a href="index.php?pil=login">Login</td>
				<td><a href="index.php?pil=daftar">Daftar</td>
			</tr>
			<tr>
				<td colspan="2" align="center">Pendaftaran Pengguna Baru</td>
			</tr>
				<td>Username</td>
				<td><input type="text" name="strUsername" title="Masukan username anda"></td>
			<tr>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="strPassword" title="masukan password numeric anda"></td>
			</tr>
			<tr>
				<td><input type="submit" name="tblSubmit" value="batal"></td>
				<td><input type="submit" name="tblSubmit" value="daftar"></td>
			</tr>
		</table>
	</form>
<?php
}
else
{
?>
	<form name="loginpage" action="cek.login.php" method="post" enctype="multipart/form-data">
		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td><a href="index.php?pil=login">Login</td>
				<td><a href="index.php?pil=daftar">Daftar</td>
			</tr>
			<tr>
				<td colspan="2" align="center">Login Pengguna</td>
			</tr>
				<td>Username</td>
				<td><input type="text" name="strUsername" title="Masukan username anda"></td>
			<tr>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="strPassword" title="masukan password numeric anda"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="tblSubmit" value="login"></td>

			</tr>
		</table>
	</form>
<?php	
}
?>