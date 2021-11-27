<?php
if ( isset($_POST["masuk"]) ) {
	if ($_POST["username"] == "admin" && $_POST["pass"] == "root") {
	header("Location: profileA.html");
	exit;
	} else {
		//jika salah maka muncul peringatan
	$eror = true; }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pemograman web</title>
	<link rel="stylesheet" href="cobastyleTGR.css">
</head>
<body>

	<div class="boxutama">
		<div class="atas">
			<h1>Pemograman WEB.COM</h1> <br>
			<h4>Selamat Datang</h4>
		</div>
		<div class="tengah">
		<script language="javascript" type="text/javascript" src="page/tabmenu.txt"></script>
	<div id="artikel">
		<?php
	if (isset($eror)) : ?>
		<p style="color:yellow; font-style:italic;">ID atau Password anda SALAH </p>
	<?php endif; ?>

	<div class="container">
	<h2>Login</h2>
	<form action="" method="post"> <!-- "action" dikosongkan agar inputan di proses terlebih dahulu di form ini -->
			<label for="iduser" class="text02"><b>Username : </b></label>
			<input type="text" name="username" placeholder="Masukkan Username (admin)" id="iduser">

			<label for="idpass" class="text02"><b>Password : </b></label>
			<input type="Password" name="pass" placeholder="Masukkan Password (root)" id="idpass">

			<button type="submit" name="masuk" class="reglogbtn">LOGIN</button>
			<br>
			<div>
			  <p>Belum memiliki Akun? <a href="register.html">Register</a>.</p>
			</div>
	</form>
	</div>
	</div>
</div>
<div class="bawah"><b>Copyright &copy; 2021 By : Tegar Susilo & Michael Yuan</b></div>

	</div>

	

</body>
</html>