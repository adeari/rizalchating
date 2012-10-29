<?
include('chat/config.php');
session_unset();
session_destroy();
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

form {
		border: 1px solid #270644;
		width: 150px;
		-moz-border-radius: 20px;
		-webkit-border-radius: 20px;
		background:  -moz-linear-gradient(19% 75% 90deg,#4E0085, #963AD6);
		background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#963AD6), to(#4E0085));
		margin:2px auto;
		padding: 20px;
		-moz-box-shadow:0px -5px 300px #270644;
		-webkit-box-shadow:0px -5px 300px #270644;
	}

	label {
		font-size: 12px;
		font-family: arial, sans-serif;
		list-style-type: none;
		color: #fff;
		text-shadow: #000 1px 1px;
		margin-bottom: 10px;
		font-weight: bold;
		letter-spacing: 1px;
		text-transform: uppercase;
		display: block;
	}

	input {
	  -webkit-transition-property: -webkit-box-shadow, background;
	  -webkit-transition-duration: 0.25s;
	  	padding: 6px;
		border-bottom: 0px;
		border-left: 0px;
		border-right: 0px;
		border-top: 1px solid #ad64e0;
		-moz-box-shadow: 0px 0px 2px #000;
		-webkit-box-shadow: 0px 0px 2px #000;
		margin-bottom: 10px;
		background: #8a33c6;
		width: 150px;
	}

	input.submit {
	  -webkit-transition-property: -webkit-box-shadow, background;
	  -webkit-transition-duration: 0.25s;
		width: 80px;
		background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#963AD6), to(#781bb9));	
		background:  -moz-linear-gradient(19% 75% 90deg,#781bb9, #963AD6);
		color: #fff;
		text-transform: uppercase;
		text-shadow: #000 1px 1px;
		border-top: 1px solid #ad64e0;
		margin-top: 10px;
	}

	input.submit:hover {
		-webkit-box-shadow: 0px 0px 2px #000;
		background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#963AD6), to(#781bb9));
		background:  -moz-linear-gradient(19% 75% 90deg,#781bb9, #963AD6);
	} 

	input.submit:active {
		background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#781bb9), to(#963AD6));
		background:  -moz-linear-gradient(19% 75% 90deg,#963AD6, #781bb9);
	}

	input:hover {
		-webkit-box-shadow: 0px 0px 4px #000;
		background: #9d39e1;
	}
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
</script></div></td>
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
		
		
		  <p align="center" class="style26">Assalamualaikum</p>
		  <p align="justify" class="style26">Anda Sudah keluar dari Admin Page.</p>
		  <p class="style2">&nbsp; </p>
		<?
		if (strlen($_SESSION['adminuser'])<1)
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