<?php
include('config.php');
if(!$_SESSION['username'])
{
die('anda harus login dahulu');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
body {
	margin-left: 5px;
	margin-top: 5px;
	margin-right: 5px;
	margin-bottom: 5px;
	background-color: #CCCCCC;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
h2 {
margin: 0;
}
.style2 {color: #000000}
</style></head>

<body>
<?php
if($_POST['username']) {
	$javaskriplanjut="";
	if (strlen($_POST['password']) > 0)
	{
   if (($_POST['password'] == $_POST['confirm'])
   && (strlen($_POST['password']) >= 5) && (strlen($_POST['password']) < 20)
   ) {
	$query="update ctb_user set pas='".mysql_escape_string(md5($_POST['password']))."' where iduser = '".mysql_escape_string ($_SESSION['iduser'])."'";
	mysql_query($query);
	$javaskriplanjut="";
   }
   else if (($_POST['password'] != $_POST['confirm']) || ((strlen($_POST['password']) > o) && (strlen($_POST['password']) < 5)) ) 
   { $error .= 'Password salah.<br />'; }
	}

$query = 'SELECT username,foto FROM `ctb_user` WHERE iduser = '.mysql_escape_string ($_SESSION['iduser']);

$result = mysql_query($query);
if($row = mysql_fetch_array($result)) {
	if (strlen($error)<1){
 $namaFile="";
if (strlen($foto)>0)
{
	$namaFile="profile".date('ymdHis').basename($_FILES['foto']['name']);
	$uploaddir = 'uploadfile/';
	if (strlen($row['foto'])>0)
	@unlink($uploaddir.$row['foto']);
	$file = $uploaddir . $namaFile;
	move_uploaded_file($_FILES['foto']['tmp_name'], $file);
	$query="update ctb_user set foto='".mysql_escape_string($namaFile)."' where iduser = '".mysql_escape_string ($_SESSION['iduser'])."'";
	mysql_query($query);
	$javaskriplanjut.="window.opener.document.getElementById('fotokita').src = '".$uploaddir.$namaFile."';";
}
if (strlen($nama)>0) {
$query = "update `ctb_user` set nama='".mysql_escape_string($nama)."'  where iduser = '".mysql_escape_string ($_SESSION['iduser'])."'";

mysql_query($query);
$javaskriplanjut.="window.opener.document.getElementById('namakita').innerHTML = 'Nama : ".$nama."';";
}

die('<div style="border: 1px #00CC00 solid; padding: 5px;"><h2>Edit Profile</h2>Berhasil</div><br /><a href="javascript:'.$javaskriplanjut.'window.close();">Tutup</a></body></html>');
	}
}
if($error) {
echo '<div style="border: 1px #FF0000 solid; padding: 5px;"><h2>Error</h2>'.$error.'</div>';
}
}
?>
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
  <table border="0" cellpadding="0" cellspacing="0">
	<input name="username" type="hidden" value="edit" />
    <tr>
      <td><span class="style2">Password:</span></td>
      <td><input name="password" type="password" id="password" />
      <span class="style2">      5-20 karakter</span></td>
    </tr>
    <tr>
      <td nowrap="nowrap"><span class="style2">Ulangi Password: </span></td>
      <td><input name="confirm" type="password" id="confirm" /></td>
    </tr>
    <tr>
      <td nowrap="nowrap" colspan="2" align="center"><span class="style2">Profile Anda</span></td>
    </tr>
    <tr>
      <td nowrap="nowrap"><span class="style2">Nama Lengkap: </span></td>
      <td><input name="nama" type="text" id="nama" /></td>
    </tr>
    <tr>
      <td nowrap="nowrap"><span class="style2">Foto: </span></td>
      <td><input name="foto" type="file" id="foto" /></td>
    </tr>
  </table>
  <br />
  <br />
  <input type="submit" name="Submit" value="Edit" />
</form>
</body>
</html>
