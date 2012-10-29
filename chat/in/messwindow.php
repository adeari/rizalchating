<?php include('../config.php');       
if(!$_SESSION['username']) 
{ ?>
<script type="text/javascript">window.close();</script>
<?php die(); } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>chat</title>
<style type="text/css">
body {
	margin: 0px;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
blockquote {
	margin-top: 0px;
	margin-bottom: 0px;
	}
</style>
<?php
$chars = array(' ', '!', '"', '#', '$', '%', '&', "'", '(', ')',
			   '*', '+', ',', '-', '.', '/', '0', '1', '2', '3',
			   '4', '5', '6', '7', '8', '9', ':', ';', '<', '=',
			   '>', '?', '@', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
			   'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q',
			   'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '[',
			   '\\', ']', '^', '_', '`', 'a', 'b', 'c', 'd', 'e',
			   'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 
			   'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
$str = 'messwindow.php?user='.$_GET['user'];
	$outtext = '';
	for($cou = 0; $cou < strlen($str); $cou++) {
    
	for($int2 = 32; $int2 < 91+32; $int2++) {
		if(substr($str, $cou, 1) == $chars[$int2-32]) { $outtext .= ''.$int2; break; }
	}
	}
?>
<script type="text/javascript" src="../js/jquery-1.3.2.js" ></script>
<script type="text/javascript" src="../js/ajaxupload.3.5.js" ></script>

</head>

<body onUnload="opener.currentlyOpen = opener.currentlyOpen.replace(/<?php echo $outtext; ?>/, '');opener.focus();">
<form method="get" action="javascript:kirimpesan()" id="Form">
<div style="position: absolute; left: 11px; top: 34px; width: 340px; height: 329px; font-family: Arial, Helvetica, sans-serif; overflow: auto; font-size: 12px; padding: 5px;" id="messagewindow"><br /><br /></div>
<div style="position: absolute; left: 60px; top: 3px; width: 287px; height: 21px; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">
 <?php echo $_GET['user']; ?></div>
<div style="position: absolute; left: 10px; top: 410px; width: 290px; height: 83px; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">
  <textarea name="message" cols="2" rows="2" id="message" style="width: 280px; height: 65px; border: 0px #0000FF solid; overflow: auto;" onClick="document.getElementById('ems').style.height = '0px';document.getElementById('ems').style.borderWidth = '0px';" onKeyPress="checkEnter(event)"></textarea><br />
  <div align="right"><input style="display:none" type="checkbox" name="checkbox" value="on" id="returntopost" checked="checked"/></div>
</div>
<div style="position: absolute; left: 301px; top: 432px; width: 62px; height: 61px; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">
<input name="image" type="image" value="submit" src="../imgs/send.png" alt="Send" width="54" height="31" onMouseOver="this.src = '../imgs/send_over.png'" onMouseOut="this.src = '../imgs/send.png'" id="sendb" style="cursor: default; border: none;" /></div>
<img src="../imgs/cbk.png" alt=" " width="372" height="522" border="0" usemap="#Map" />
<map name="Map">
<area shape="rect" coords="349,0,372,23" href="javascript:window.close();">
<div style="position: absolute; left: 11px; top: 388px; overflow: auto; height: 21px; font-family: Arial, Helvetica, sans-serif;">
<img src="../imgs/smiles/icon_biggrin.gif" alt=" Grin " title="Ikon Smile" width="15" height="15" onClick="document.getElementById('ems').style.height = 'auto'; document.getElementById('ems').style.borderWidth = '1px';" style="cursor: pointer;" />
&nbsp;&nbsp;&nbsp;<img src="../imgs/nudge.gif" alt=" getar " title="Buzz" width="15" height="17" onClick="kirimgetar()" style="cursor: pointer;" id="getarbutton" />
&nbsp;&nbsp;&nbsp;<img src="../imgs/attachment.png" alt="Kirim File" title="Kirim File" width="15" height="17" style="cursor: pointer;" id="kirim_file" /></div>
<div style="position: absolute; left: 19px; top: 396px; width: auto; overflow: auto; height: 0px; background: #FFFFFF; font-family: Arial, Helvetica, sans-serif; border: 0px #000044 solid;" id="ems"><img src="../imgs/smiles/icon_biggrin.gif" alt=" Grin " width="15" height="15" onClick="tambahemoticon(':grin:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/icon_confused.gif" alt=" Confused " width="15" height="15" onClick="tambahemoticon(':confused:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/icon_cool.gif" alt=" Cool " width="15" height="15" onClick="tambahemoticon(':cool:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/icon_cry.gif" alt=" Cry " width="15" height="15" onClick="tambahemoticon(':cry:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/icon_eek.gif" alt=" Eek " width="15" height="15" onClick="tambahemoticon(':eek:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/icon_evil.gif" alt=" Evil " width="15" height="15" onClick="tambahemoticon(':evil:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/icon_exclaim.gif" alt=" Exclaim " width="15" height="15" onClick="tambahemoticon(':exclaim:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/icon_frown.gif" alt=" Frown " width="15" height="15" onClick="tambahemoticon(':frown:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/icon_idea.gif" alt=" Idea " width="15" height="15" onClick="tambahemoticon(':idea:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/icon_lol.gif" alt=" LOL " width="15" height="15" onClick="tambahemoticon(':lol:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/icon_mad.gif" alt=" Mad " width="15" height="15" onClick="tambahemoticon(':mad:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/eusa_pray.gif" alt=" Pray " width="19" height="16" onClick="tambahemoticon(':pray:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/eusa_shhh.gif" alt=" Shhh " width="15" height="16" onClick="tambahemoticon(':shhh:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/eusa_shifty.gif" alt=" Shifty " width="15" height="15" onClick="tambahemoticon(':shifty:');" style="cursor: pointer;" /><br />
<img src="../imgs/smiles/icon_mrgreen.gif" alt=" Mr Green " width="15" height="15" onClick="tambahemoticon(':mrgreen:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/icon_neutral.gif" alt=" Neutral " width="15" height="15" onClick="tambahemoticon(':neutral:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/icon_question.gif" alt=" Question " width="15" height="15" onClick="tambahemoticon(':question:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/icon_razz.gif" alt=" Razz " width="15" height="15" onClick="tambahemoticon(':razz:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/icon_redface.gif" alt=" Redface " width="15" height="15" onClick="tambahemoticon(':redface:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/icon_rolleyes.gif" alt=" Rolleyes " width="15" height="15" onClick="tambahemoticon(':rolleyes:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/icon_sad.gif" alt=" Sad " width="15" height="15" onClick="tambahemoticon(':sad:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/icon_smile.gif" alt="Smile" width="15" height="15" onClick="tambahemoticon(':smile:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/icon_surprised.gif" alt=" Surprised " width="15" height="15" onClick="tambahemoticon(':surprised:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/icon_twisted.gif" alt=" Twisted " width="15" height="15" onClick="tambahemoticon(':twisted:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/icon_wink.gif" alt=" Wink " width="15" height="15" onClick="tambahemoticon(':wink:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/eusa_sick.gif" alt=" Sick " width="15" height="15" onClick="tambahemoticon(':sick:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/eusa_silenced.gif" alt=" Silenced " width="15" height="15" onClick="tambahemoticon(':silenced:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/eusa_snooty.gif" alt=" Snooty " width="16" height="15" onClick="tambahemoticon(':snooty:');" style="cursor: pointer;" /><br />
<img src="../imgs/smiles/eusa_angel.gif" alt=" Angel " width="15" height="15" onClick="tambahemoticon(':angel:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/eusa_clap.gif" alt=" Clap " width="19" height="16" onClick="tambahemoticon(':clap:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/eusa_dance.gif" alt=" Dance " width="27" height="16" onClick="tambahemoticon(':dance:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/eusa_doh.gif" alt=" Doh " width="22" height="16" onClick="tambahemoticon(':doh:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/eusa_drool.gif" alt=" Drool " width="15" height="16" onClick="tambahemoticon(':drool:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/eusa_eh.gif" alt=" Eh " width="15" height="15" onClick="tambahemoticon(':eh:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/eusa_hand.gif" alt=" Hand " width="17" height="16" onClick="tambahemoticon(':hand:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/eusa_liar.gif" alt=" Liar " width="20" height="15" onClick="tambahemoticon(':liar:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/eusa_naughty.gif" alt=" Naughty " width="20" height="16" onClick="tambahemoticon(':naughty:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/eusa_think.gif" alt=" Think " width="17" height="16" onClick="tambahemoticon(':think:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/eusa_wall.gif" alt=" Wall " width="25" height="15" onClick="tambahemoticon(':wall:');" style="cursor: pointer;" /> 
<img src="../imgs/smiles/eusa_whistle.gif" alt=" Whistle " width="22" height="16" onClick="tambahemoticon(':whistle:');" style="cursor: pointer;" />
<div align="right"><a href="javascript:void(0)" onClick="document.getElementById('ems').style.height = '0px';document.getElementById('ems').style.borderWidth = '0px';" style="padding: 5px;">Tutup</a></div></div>
</map></form>
<script type="text/javascript" src="messscripts.php?user=<?php echo $_GET['user']; ?>"></script>
<script type="text/javascript">
if(opener.currentlyOpen.match('<?php echo $outtext; ?>') == null) { window.close(); }
function checkEnter(e){ 
if(document.getElementById('returntopost').checked == true) {
var characterCode;
if(e && e.which){ 
e = e;
characterCode = e.which;
}
else{
e = event;
characterCode = e.keyCode;
}

if(characterCode == 13){
document.getElementById('Form').submit();
return false 
}
else{
return true 
}

}
}
</script>
<span id="dummy"></span>
</body>
</html>