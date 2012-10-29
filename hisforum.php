<?
include('chat/config.php');
?>
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
.style2 {
	font-family: verdana;
	font-size: 11px;
	color: #68757b;
}
.style5 {font-family: verdana; font-size: 12px; color: #68757b; }
.style7 {
	font-family: verdana;
	font-size: 14px;
	color: #284452;
	font-weight: bold;
}
.style14 {
	color: #FFFFFF;
	font-weight: bold;
}
.style15 {color: #FFFFFF}
.style23 {color: #FFFFFF; font-size: 12px; font-weight: bold; }
.style2x {color: #FFFFFF; font-size: 12px; }
.style26 {font-family: verdana; font-size: 13px; color: #FFFFFF; font-weight: bold; }
.style27 {font-size: 13px}
.style28 {color: #FFFFFF; font-size: 13px; font-weight: bold; }
.style29 {font-family: verdana; font-size: 13px; color: #68757b; }
.style36 {font-size: 17px}
.style45 {font-size: 13px; font-weight: bold; }

</style></head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="show_clock()">
	<?
	
	$query = "SELECT username from ctb_admin  WHERE username='".mysql_escape_string ($username)."' and pass=md5('".mysql_escape_string ($password)."')";
	
	$result = mysql_query($query);
	if($row = mysql_fetch_array($result)) {
		$_SESSION['adminuser'] = $row['username'];
	}
	?>
<table width="729" height="769" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
	<tr>
		<td rowspan="16">&nbsp;</td>
		<td colspan="20">&nbsp;</td>
		<td>
			<img src="images/spacer.gif" width="1" height="30" alt=""></td>
	</tr>
	<tr>
		<td colspan="5"background="images/index_04.gif">&nbsp;</td>
		<td colspan="5" background="images/index_04.gif">&nbsp;</td>
		<td colspan="7" background="images/index_04.gif"><div align="center" class="style5">
	
	  
<script language="javascript" src="scripts/tanggal.js">
</script>
		<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		var ini=new JsDatePick({
			useMode:2,
			target:"tgldari",
			dateFormat:"%d/%m/%Y",
			yearsRange:[1978,2020],
			cellColorScheme:"orange",
			imgPath:"imgkalender/"
		});
		var itu=new JsDatePick({
			useMode:2,
			target:"tglke",
			dateFormat:"%d/%m/%Y",
			yearsRange:[1978,2020],
			cellColorScheme:"peppermint",
			imgPath:"imgkalender/"
		});
	};
function hapus()
{
	if (document.fradmin.tgldari.value<1) alert('Isi tanggal dari');
	else if (document.fradmin.tglke.value<1) alert('Isi tanggal ke');
	else {
		var answer = confirm("Apakah History Chating akan di hapus ?")
		if (answer){
			document.fradmin.submit();
		}
	}
}
</script>
		</div></td>
		<td colspan="2">
			<img src="images/index_06.gif" width="29" height="36" alt=""></td>
		<td rowspan="15">&nbsp;</td>
		<td>
			<img src="images/spacer.gif" width="2" height="36" alt=""></td>
	</tr>
	<? include "atasadmin.php" ?>
	<tr>
		<td rowspan="10">
			<img src="images/index_20.gif" width="9" height="404" alt=""></td>
		<td colspan="17">
			<img src="images/index_21.gif" width="626" height="9" alt=""></td>
		<td rowspan="9">
			<img src="images/index_22.gif" width="11" height="391" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="9" alt=""></td>
	</tr>
	<tr>
		<td colspan="11">
			<img src="images/index_23.gif" width="421" height="12" alt=""></td>
		<td rowspan="7">
			<img src="images/index_24.gif" width="1" height="370" alt=""></td>
		<td colspan="5" rowspan="2">
			<img src="images/index_25.gif" width="204" height="18" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="12" alt=""></td>
	</tr>
	<tr>
		<td colspan="11" rowspan="6" valign="top" bgcolor="#111A1F"><div align="center">
		
		
		  
		<?
		if (strlen($_SESSION['adminuser'])>0)
		{
			?>
			<p class="style29">Total History Forum : <?
if (strlen($tgldari)>0&&strlen($tglke)>0)
{
	$query="delete from ctb_chatingforum where date(waktu) between STR_TO_DATE('".$tgldari."', '%d/%m/%Y')
	and STR_TO_DATE('".$tglke."', '%d/%m/%Y')";
	mysql_query($query);
}
			$query="select count(*) as jumlah from ctb_chatingforum";
			$result = mysql_query($query);
	if ($row = mysql_fetch_array($result)) {
		echo $row['jumlah'];
	}
			?></p>
			<br/>
			<p align="center" class="style26">History Forum</p>
			
			<form method="post" name="fradmin">
				<p align="center" class="style23">
				Dari tanggal <input type="text" size="12" id="tgldari" name="tgldari" value="<?
				$query="select date_format(min(waktu),'%d/%m/%Y') as awal from ctb_chatingforum";
			$result = mysql_query($query);
	if ($row = mysql_fetch_array($result)) {
		echo $row['awal'];
	}
				?>" />  
				&nbsp;&nbsp;Sampai <input type="text" size="12" id="tglke" name="tglke" value="<?
				$query="select date_format(max(waktu),'%d/%m/%Y') as akhir from ctb_chatingforum";
			$result = mysql_query($query);
	if ($row = mysql_fetch_array($result)) {
		echo $row['akhir'];
	}
				?>" /></p>
				<input type="button" value="Clear" onClick="hapus()">
			</form>
			</p>
			<?
		}
		else
		{
			?>
			<p align="justify" class="style26">Anda bukan administrator <a href="index.php">Kembali ke WebsitE</a></p>
			<?
		}
		?>
		  
		</div></td>
		<td>
			<img src="images/spacer.gif" width="1" height="6" alt=""></td>
	</tr>
	<? include "kananadmin.php" ?>
	<tr>
		<td colspan="5">
			<img src="images/index_28.gif" width="204" height="17" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="17" alt=""></td>
	</tr>
	<tr>
		<td colspan="5">
			<img src="images/index_29.gif" width="204" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td colspan="5">
			<img src="images/index_30.gif" width="204" height="16" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="16" alt=""></td>
	</tr>
	<tr>
		<td colspan="5" valign="top" bgcolor="#111A1F" class="style5"><blockquote>
		  </td>
		<td>
			<img src="images/spacer.gif" width="1" height="0" alt=""></td>
  </tr>
	<tr>
		<td colspan="11">
			<img src="images/index_32.gif" width="421" height="12" alt=""></td>
		<td colspan="6">
			<img src="images/index_33.gif" width="205" height="12" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="12" alt=""></td>
	</tr>
	<tr>
		<td colspan="18">
			<img src="images/index_34.gif" width="637" height="13" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="13" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/index_35.gif" width="22" height="27" alt=""></td>
		<td colspan="15" background="images/bg_footer.gif" class="style5"><div align="center" class="style15"> rizal@2012</div></td>
		<td colspan="2">
			<img src="images/index_37.gif" width="29" height="27" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="27" alt=""></td>
	</tr>
	<tr>
		<td colspan="19">&nbsp;</td>
		<td>
			<img src="images/spacer.gif" width="1" height="24" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="41" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="9" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="13" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="81" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="13" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="62" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="34" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="15" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="90" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="15" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="84" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="10" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="4" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="13" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="88" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="14" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="71" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="18" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="11" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="41" height="1" alt=""></td>
		<td></td>
	</tr>
</table>
<div style="font-size: 0.8em; text-align: center; margin-top: 1.0em; margin-bottom: 1.0em;"></div>

</body>
</html>