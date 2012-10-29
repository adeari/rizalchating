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
if (strcmp($Submit,"Kirim")==0) {
	$namaFile="";
if (strlen($filenya)>0)
{
	$namaFile="broadcast".date('ymdHis').basename($_FILES['filenya']['name']);
	$uploaddir = 'uploadfile/';
	$file = $uploaddir . $namaFile;
	move_uploaded_file($_FILES['filenya']['tmp_name'], $file);
}
$qry="insert into ctb_broadcast (tgl,iduser,idfakultas,pesan,filenya) ".
"values (now(),'".mysql_escape_string($_SESSION['iduser'])."','".$fakultas."','"
.mysql_escape_string($pesan)."','".mysql_escape_string($namaFile)."')";
mysql_query($qry);
?>
<center><font size="5">Pesan Broadcast telah terkirim</font></center><br/><br/>
<?
}

?>
<center><font size="5">Kirim Broadcast</font></center>
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
  <table border="0" cellpadding="0" cellspacing="0">
   <tr>
      <td nowrap="nowrap"><span class="style2">Unit Tujuan : </span></td>
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
      <td nowrap="nowrap"><span class="style2">Pesan :</span></td>
      <td><textarea name="pesan" id="pesan"></textarea></td>
    </tr>
    <tr>
      <td nowrap="nowrap"><span class="style2">File :</span></td>
      <td><input type="file" name="filenya" id="filenya"></td>
    </tr>
  </table>
  <br />
  <br />
  <input type="submit" name="Submit" value="Kirim"/>
</form>
</body>
</html>
