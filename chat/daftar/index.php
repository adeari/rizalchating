<?php
include('../config.php');
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
if(($_POST['password'] != $_POST['confirm']) || (strlen($_POST['password']) < 5) || (strlen($_POST['password']) > 20)) { $error .= 'Password salah.<br />'; }

if((strlen($_POST['username']) < 5) || (strlen($_POST['username']) > 20))  { $error .= 'Username terlalu pendek<br />'; }

if(eregi('[^a-z0-9_ ]', $_POST['username'])) { $error .= 'Username harus berupa karakter<br />'; }

$query = 'SELECT username FROM `ctb_user` WHERE username = \''.mysql_escape_string (urlencode($_POST['username'])).'\'';
$result = mysql_query($query);
if($row = mysql_fetch_array($result)) {
$error .= 'Username sudah terpakai';
}
if($error) {
echo '<div style="border: 1px #FF0000 solid; padding: 5px;"><h2>Error</h2>'.$error.'</div>';
}else{
$namaFile="";
if (strlen($foto)>0)
{
	$namaFile="profile".date('ymdHis').basename($_FILES['foto']['name']);
	$uploaddir = '../uploadfile/';
	$file = $uploaddir . $namaFile;
	move_uploaded_file($_FILES['foto']['tmp_name'], $file);
}
$query = 'INSERT INTO `ctb_user` (username, pas,waktu_online,nama,jenis_klamin,idfakultas,foto) VALUES (\''.mysql_escape_string ($_POST['username']).'\', \''.
mysql_escape_string (md5($_POST['password'])).'\',now(),\''.$nama.'\','.$jenis_kelamin.','.$fakultas.',\''.$namaFile.'\')';
$result = mysql_query($query);
die('<div style="border: 1px #00CC00 solid; padding: 5px;"><h2>Terdaftar</h2>Pendaftaran berhasil</div><br /><a href="javascript:window.close();">Tutup</a></body></html>');
}
}
?>
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
  <table border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td><span class="style2">Username:</span></td>
      <td><input name="username" type="text" id="username" value="<?php echo $_POST['username']; ?>" />       
        <span class="style2">5-20 karakter</span> </td>
    </tr>
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
      <td nowrap="nowrap"><span class="style2">Jenis Kelamin: </span></td>
      <td><select name="jenis_kelamin"  id="jenis_kelamin">
      <option value="0">Laki - Laki</option>
      <option value="1">Perempuan</option>
      </select></td>
    </tr>
    <tr>
      <td nowrap="nowrap"><span class="style2">Unit: </span></td>
      <td><select name="fakultas"  id="fakultas">
      <?
      $query = "SELECT idfakultas,nama_fakultas FROM ctb_fakultas WHERE idfakultas<>'0' order by  idfakultas;";
      $result = mysql_query($query);
      while ($row = mysql_fetch_array($result)) {
      ?>
      <option value=<?=$row[0]?>><?=$row[1]?></option>
      <? } ?>
      </select></td>
    </tr>
    <tr>
      <td nowrap="nowrap"><span class="style2">Foto: </span></td>
      <td><input name="foto" type="file" id="foto" /></td>
    </tr>
  </table>
  <br />
  <br />
  <input type="submit" name="Submit" value="Daftar" />
</form>
</body>
</html>
