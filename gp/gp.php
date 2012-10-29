<html>
<head>
<title>7405 030 038 - Final Project 2008</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
body {
	background-color: #353535;
}
.style1 {
	font-family: verdana;
	font-size: 10px;
	color: #68757b;
}
.style5 {font-family: verdana; font-size: 12px; color: #68757b; }
.style9 {color: #FFFFFF}
.style10 {
	font-family: verdana;
	font-size: 13px;
	color: #FFFFFF;
	font-weight: bold;
}
.style11 {
	color: #68757b;
	font-size: 17px;
	font-weight: bold;
}
.style18 {
	color: #FFFFFF;
	font-size: 13px;
	font-weight: bold;
}
.style20 {
	color: #FF6600;
	font-weight: bold;
}
.style27 {
	font-family: verdana;
	font-size: 13px;
}
.style28 {
	color: #FF6600;
	font-weight: bold;
	font-family: verdana;
	font-size: 13px;
}
</style></head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="show_clock()">
<table width="729" height="769" border="0" align="center" cellpadding="0" cellspacing="0"   id="Table_01">
	<tr>
		<td rowspan="16">&nbsp;</td>
		<td colspan="20">&nbsp;</td>
		<td>
			<img src="../images/spacer.gif" width="1" height="30" alt=""></td>
	</tr>
	<tr>
		<td colspan="5"background="../images/index_04.gif">&nbsp;</td>
		<td colspan="5" background="../images/index_04.gif">&nbsp;</td>
		<td colspan="7" background="../images/index_04.gif"><div align="center" class="style5">
	
	  
<script language="javascript" src="../scripts/tanggal.js">
</script></div></td>
		<td colspan="2">
			<img src="../images/index_06.gif" width="29" height="36" alt=""></td>
		<td rowspan="15">&nbsp;</td>
		<td>
			<img src="../images/spacer.gif" width="2" height="36" alt=""></td>
	</tr>
	<tr>
		<td colspan="19" background="../images/pic.jpg">&nbsp;</td>
		<td>
			<img src="../images/spacer.gif" width="1" height="216" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" background="../images/menu_bg.gif"><div align="center" class="style1"><a href="../index.php" class="style18">Home</a></div></td>
		<td>
			<img src="../images/index_10.gif" width="13" height="31" alt=""></td>
		<td colspan="2" background="../images/menu_bg.gif"><div align="center" class="style1"><a href="../articles/articles0.php" class="style18">Artikel</a></div></td>
		<td>
			<img src="../images/index_12.gif" width="15" height="31" alt=""></td>
		<td background="../images/menu_bg.gif"><div align="center" class="style1"><a href="../chat/index.php" class="style18">Chat</a></div></td>
		<td>
			<img src="../images/index_14.gif" width="15" height="31" alt=""></td>
		<td colspan="2" background="../images/menu_bg.gif"><div align="center" class="style1"><a href="../download/download.php" class="style18">Download</a></div></td>
		<td colspan="3">
			<img src="../images/index_16.gif" width="18" height="31" alt=""></td>
		<td background="../images/menu_bg.gif"><div align="center" class="style10">G&amp;P </div></td>
		<td>
			<img src="../images/index_18.gif" width="14" height="31" alt=""></td>
		<td colspan="3" background="../images/menu_bg.gif"><div align="center" class="style1"><a href="../contact/contact.php" class="style18">Kontak</a> </div></td>
		<td>
			<img src="../images/spacer.gif" width="1" height="31" alt=""></td>
	</tr>
	<tr>
		<td colspan="19" rowspan="10" valign="top" bgcolor="#111A1F"><div align="center">
		  <div class="style20 style27" id="judul">BUKU TAMU</div>
<form action="cek.php" name="kom" method="post">
  <p align="center">
<? 
//buka database
@ $db = mysql_pconnect('localhost','root','');
if (!$db)
{
	echo "error...tidak bisa membuka database";
	exit;
}
	mysql_select_db('chat') or die(mysql_error());

//tampilkan isi tabel
	$query = "SELECT * FROM tamu";
	$result = mysql_query($query);
	$jml= mysql_affected_rows();
	$i=0;
	while($jml>$i)
	{ 
		 $nama=mysql_result($result,$jml-1,"nama");
		 $email=mysql_result($result,$jml-1,"email");
		 $komen=mysql_result($result,$jml-1,"komentar");
		 $tgl=mysql_result($result,$jml-1,"tanggal");
		
		 echo "<font color='white'; family='verdana'>Tanggal: $tgl</font><br>";
 		 echo "<font color='white'>Nama: $nama</font><br>";
  		 echo "<font color='white'>E-mail: $email</font><br>";
	  	 echo "<font color='white'>Komentar: $komen</font><br><hr>";		 

		 $jml--; 		
	}
?>
  </p>
  <p align="center">
    <?php $d=date("D d/m/Y");?></p>
  <table width="200" border="0">
    <tr>
      <td><span class="style10">Tanggal</span></td>
      <td class="style10">:</td>
      <td><input name="tgl" class="komentar" type="text" id="tgl" value="<?php echo "$d $t";?>" size="13"></td>
    </tr>
    <tr>
      <td><span class="style10">Nama</span></td>
      <td><span class="style10">:</span></td>
      <td><input class="komentar" name="nama" id="nama" type="text"></td>
    </tr>
    <tr>
      <td><span class="style10">E-mail</span></td>
      <td><span class="style10">:</span></td>
      <td><input class="komentar" name="email" type="text" id="email"></td>
    </tr>
    <tr>
      <td><span class="style10">Komentar</span></td>
      <td><span class="style10">:</span></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p align="center"><textarea rows="5" cols="38" class="textbox" name="komen" id="komen"></textarea>
    <br>
    <input class="button" value="OK" name="kirim" type="submit">
  </p>
  </form>
  
<p class="style28">POLLING</p>
<table width="100" border="0">
  <tr>
    <td bgcolor="#FFFFFF">
	
	    <div align="left">
	      <?php include "polling.php"; ?>
	      </div></td>
  </tr>
</table>
  <table width="100" border="0">
  <tr>
    <td bgcolor="#FFFFFF">
	
	    <div align="left">
	      <?php include "polling2.php"; ?>
	      </div></td>
  </tr>
</table>
 <table width="100" border="0">
  <tr>
    <td bgcolor="#FFFFFF">
	
	    <div align="left">
	      <?php include "polling3.php"; ?>
	      </div></td>
  </tr>
</table>
</p>
<p>&nbsp; </p>
<p align="justify" class="style11"></p>
</div></td>
<td>
<img src="../images/spacer.gif" width="1" height="9" alt=""></td>
</tr>
	<tr>
		<td>
			<img src="../images/spacer.gif" width="1" height="12" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="../images/spacer.gif" width="1" height="6" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="../images/spacer.gif" width="1" height="141" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="../images/spacer.gif" width="1" height="17" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="../images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="../images/spacer.gif" width="1" height="16" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="../images/spacer.gif" width="1" height="177" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="../images/spacer.gif" width="1" height="12" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="../images/spacer.gif" width="1" height="13" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="../images/index_35.gif" width="22" height="27" alt=""></td>
		<td colspan="15" background="../images/bg_footer.gif" class="style5"><div align="center" class="style9">heryasa @ 2008</div></td>
		<td colspan="2">
			<img src="../images/index_37.gif" width="29" height="27" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="1" height="27" alt=""></td>
	</tr>
	<tr>
		<td colspan="19">&nbsp;</td>
		<td>
			<img src="../images/spacer.gif" width="1" height="24" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="../images/spacer.gif" width="41" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="9" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="13" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="81" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="13" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="62" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="34" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="15" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="90" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="15" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="84" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="10" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="4" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="1" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="13" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="88" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="14" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="71" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="18" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="11" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="41" height="1" alt=""></td>
		<td></td>
	</tr>
</table>
<div style="font-size: 0.8em; text-align: center; margin-top: 1.0em; margin-bottom: 1.0em;"></div>
</body>
</html>