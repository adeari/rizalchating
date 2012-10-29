<?
include('../../config.php');
$query = "delete from ctb_waktuforum where iduser=".mysql_escape_string($_SESSION['iduser'])." and idfakultas=".$fr;
@mysql_query($query);
$query = "insert into ctb_waktuforum (iduser,idfakultas,waktu) values (".$_SESSION['iduser'].",".$fr.",now())";
@mysql_query($query);

$query = "select * from ctb_waktubroadcast where iduser=".$_SESSION['iduser'];
$result=mysql_query($query);
$adabradcast=false;
if($row = @mysql_fetch_array($result)) {
    $adabradcast=true;
}
if (!$adabradcast) {
    $query = "insert into ctb_waktubroadcast (iduser) values (".$_SESSION['iduser'].")";
    mysql_query($query);
}
$query = "select nama_fakultas from ctb_fakultas where idfakultas=".$fr;
$result=mysql_query($query);
$namafakultas="";
if($row = @mysql_fetch_array($result)) {
    $namafakultas=" Forum ".$row['nama_fakultas'];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?=$namafakultas?></title>
<style type="text/css">
body,html {background-color: #000000;margin-left: 0px;margin-top: 0px;margin-right: 0px;margin-bottom: 0px;font-size: 16px;font-family: Courier New, Courier, mono;}
body,td,th {color: #FFFFFF;}
body {background-color: #353535;}.style2 {font-size: 10px}
</style>
</head>
<script type="text/javascript">
function bukachat(id, page, width, height) {
window.open(page, id, 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=' + width + ',height=' + height + ',left = 50,top = 50');
}
</script>
<body onUnload="window.resizeTo(740, 580);" onLoad="window.resizeTo(740, 580);">

<div onclick="document.getElementById('inputpesan').focus();" style="width: 100%; height: 100%;">
<div align="center">
<br /> <br /><br /></div>
<form action="javascript:kirimpesan()">
<div width="100%" align="center" height="360">
<div id="pesanini" style="overflow: auto; height: 350px; width:700px;text-align:left;background:#FFFFFF;font-family:Courier New,Courier,mono;font-size:16px;color:#000000;">...<br /><hr /><hr /><hr /><hr /><hr /><hr /><hr /><hr />

</div>

</div>
<div align="center"><input name="inputpesan" type="text" id="inputpesan" style="border: 0px; color: #000000; font-family: 'Courier New', Courier, mono; overflow: none; width: 600px; height: 25px;"  /><input name="Kirim" id="Kirim" type="submit" style="background-color: #666666; color: #000000; font-family: 'Courier New', Courier, mono; width: 100px; border: 0px; height: 27px;" value="Kirim" /><br /><br />
<img src="smiles/icon_biggrin.gif" alt=" Grin " width="15" height="15" onclick="tambahemoticon(':grin:');" style="cursor: pointer;" /> 
<img src="smiles/icon_confused.gif" alt=" Confused " width="15" height="15" onclick="tambahemoticon(':confused:');" style="cursor: pointer;" /> 
<img src="smiles/icon_cool.gif" alt=" Cool " width="15" height="15" onclick="tambahemoticon(':cool:');" style="cursor: pointer;" /> 
<img src="smiles/icon_cry.gif" alt=" Cry " width="15" height="15" onclick="tambahemoticon(':cry:');" style="cursor: pointer;" /> 
<img src="smiles/icon_eek.gif" alt=" Eek " width="15" height="15" onclick="tambahemoticon(':eek:');" style="cursor: pointer;" /> 
<img src="smiles/icon_evil.gif" alt=" Evil " width="15" height="15" onclick="tambahemoticon(':evil:');" style="cursor: pointer;" /> 
<img src="smiles/icon_exclaim.gif" alt=" Exclaim " width="15" height="15" onclick="tambahemoticon(':exclaim:');" style="cursor: pointer;" /> 
<img src="smiles/icon_frown.gif" alt=" Frown " width="15" height="15" onclick="tambahemoticon(':frown:');" style="cursor: pointer;" /> 
<img src="smiles/icon_idea.gif" alt=" Idea " width="15" height="15" onclick="tambahemoticon(':idea:');" style="cursor: pointer;" /> 
<img src="smiles/icon_lol.gif" alt=" LOL " width="15" height="15" onclick="tambahemoticon(':lol:');" style="cursor: pointer;" /> <img src="smiles/icon_mad.gif" alt=" Mad " width="15" height="15" onclick="tambahemoticon(':mad:');" style="cursor: pointer;" /> 
<img src="smiles/eusa_pray.gif" alt=" Pray " width="19" height="16" onclick="tambahemoticon(':pray:');" style="cursor: pointer;" /> 
<img src="smiles/eusa_shhh.gif" alt=" Shhh " width="15" height="16" onclick="tambahemoticon(':shhh:');" style="cursor: pointer;" /> 
<img src="smiles/eusa_shifty.gif" alt=" Shifty " width="15" height="15" onclick="tambahemoticon(':shifty:');" style="cursor: pointer;" /><br />
<img src="smiles/icon_mrgreen.gif" alt=" Mr Green " width="15" height="15" onclick="tambahemoticon(':mrgreen:');" style="cursor: pointer;" /> 
<img src="smiles/icon_neutral.gif" alt=" Neutral " width="15" height="15" onclick="tambahemoticon(':neutral:');" style="cursor: pointer;" /> 
<img src="smiles/icon_question.gif" alt=" Question " width="15" height="15" onclick="tambahemoticon(':question:');" style="cursor: pointer;" /> 
<img src="smiles/icon_razz.gif" alt=" Razz " width="15" height="15" onclick="tambahemoticon(':razz:');" style="cursor: pointer;" /> 
<img src="smiles/icon_redface.gif" alt=" Redface " width="15" height="15" onclick="tambahemoticon(':redface:');" style="cursor: pointer;" /> 
<img src="smiles/icon_rolleyes.gif" alt=" Rolleyes " width="15" height="15" onclick="tambahemoticon(':rolleyes:');" style="cursor: pointer;" /> 
<img src="smiles/icon_sad.gif" alt=" Sad " width="15" height="15" onclick="tambahemoticon(':sad:');" style="cursor: pointer;" /> 
<img src="smiles/icon_smile.gif" alt="Smile" width="15" height="15" onclick="tambahemoticon(':smile:');" style="cursor: pointer;" /> 
<img src="smiles/icon_surprised.gif" alt=" Surprised " width="15" height="15" onclick="tambahemoticon(':surprised:');" style="cursor: pointer;" /> 
<img src="smiles/icon_twisted.gif" alt=" Twisted " width="15" height="15" onclick="tambahemoticon(':twisted:');" style="cursor: pointer;" /> 
<img src="smiles/icon_wink.gif" alt=" Wink " width="15" height="15" onclick="tambahemoticon(':wink:');" style="cursor: pointer;" /> 
<img src="smiles/eusa_sick.gif" alt=" Sick " width="15" height="15" onclick="tambahemoticon(':sick:');" style="cursor: pointer;" /> 
<img src="smiles/eusa_silenced.gif" alt=" Silenced " width="15" height="15" onclick="tambahemoticon(':silenced:');" style="cursor: pointer;" /> 
<img src="smiles/eusa_snooty.gif" alt=" Snooty " width="16" height="15" onclick="tambahemoticon(':snooty:');" style="cursor: pointer;" /><br />
<img src="smiles/eusa_angel.gif" alt=" Angel " width="15" height="15" onclick="tambahemoticon(':angel:');" style="cursor: pointer;" /> 
<img src="smiles/eusa_clap.gif" alt=" Clap " width="19" height="16" onclick="tambahemoticon(':clap:');" style="cursor: pointer;" /> 
<img src="smiles/eusa_dance.gif" alt=" Dance " width="27" height="16" onclick="tambahemoticon(':dance:');" style="cursor: pointer;" /> 
<img src="smiles/eusa_doh.gif" alt=" Doh " width="22" height="16" onclick="tambahemoticon(':doh:');" style="cursor: pointer;" /> 
<img src="smiles/eusa_drool.gif" alt=" Drool " width="15" height="16" onclick="tambahemoticon(':drool:');" style="cursor: pointer;" /> 
<img src="smiles/eusa_eh.gif" alt=" Eh " width="15" height="15" onclick="tambahemoticon(':eh:');" style="cursor: pointer;" /> 
<img src="smiles/eusa_hand.gif" alt=" Hand " width="17" height="16" onclick="tambahemoticon(':hand:');" style="cursor: pointer;" /> 
<img src="smiles/eusa_liar.gif" alt=" Liar " width="20" height="15" onclick="tambahemoticon(':liar:');" style="cursor: pointer;" /> 
<img src="smiles/eusa_naughty.gif" alt=" Naughty " width="20" height="16" onclick="tambahemoticon(':naughty:');" style="cursor: pointer;" /> 
<img src="smiles/eusa_think.gif" alt=" Think " width="17" height="16" onclick="tambahemoticon(':think:');" style="cursor: pointer;" /> 
<img src="smiles/eusa_wall.gif" alt=" Wall " width="25" height="15" onclick="tambahemoticon(':wall:');" style="cursor: pointer;" /> 
<img src="smiles/eusa_whistle.gif" alt=" Whistle " width="22" height="16" onclick="tambahemoticon(':whistle:');" style="cursor: pointer;" /><br /></div>
  </form></div>

<script type="text/javascript" src="skrip.php?fr=<?=$fr?>"></script>
</body></html>