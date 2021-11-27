<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register - Pemograman web</title>
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
        <h2>Register</h2>
        <p>Cek terlebih dahulu data yang telah diinputkan!</p>
        <hr>
        <div id="info" class="text01">
            <p>Nama : 
            <?php echo $_GET['name'];?></p>
            <p>Username : 
            <?php echo $_GET['username'];?></p>
            <p>Jenis Kelamin : 
            <?php echo $_GET['kelamin'];?></p>
        </div>
        <hr>
        <p>Apakah Anda yakin dengan data ini?</p>
        <button type="button" onclick="window.location.href='menu.html'" class="reglogbtn">Yakin dan Daftar</button>
        <button type="button" onclick="goBack()" class="batalkembalibtn">Kembali</button>
        <script>
        function goBack() {
        window.history.back();}
        </script>
        <div><p></p></div>
	</div>
</div>
<div class="bawah"><b>Copyright &copy; 2021 By : Tegar Susilo & Michael Yuan</b></div>
	</div>
	
</body>
</html>