<?php 
session_start(); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><title></title>
<style type="text/css">
body,td,th{font-family:Courier New,Courier,mono;font-size:16px;color:#000000;}
body{background-color:#FFFFFF;margin-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;word-wrap:break-word;}
hr{color:#999999;}
</style></head><body>

<?php 
if($_SESSION['username'])
{
if($_GET['message'])
{$message=htmlspecialchars(str_replace('&nbsp;','%20',$_GET['message']));
$data=file_get_contents('shout.txt');
$length=2500-strlen(substr($_GET['message'],0,150));
//SETTING NGETIK DI ROOM PUBLIK
{
$_COOKIE['username']=strip_tags(substr($_COOKIE['username'], 0, 16));
}
file_put_contents('shout.txt','<span style="color: #000000;">('.$_SESSION['username'].') :</span><br />&nbsp;&nbsp;'.substr(strip_tags($message),0,150).'<spliter>'.substr($data,0,$length));
//SETTING NYIMPEN KETIKAN DI HISTORY
file_put_contents('history.txt','['.gmdate('d/m/Y|G:i').' * '.$_SERVER['REMOTE_ADDR'].']('.$_COOKIE['username'].')('.$_SESSION['username'].') '.substr(strip_tags($message), 0, 150)."\n".
//SETTING MANGGIL ISI HISTORY
file_get_contents('history.txt'));
}
?>

<?php 
$teksemoticon=array(':grin:',':confused:',':cool:',':cry:',':eek:',':evil:',':exclaim:',':frown:',':idea:',':lol:',':mad:',':pray:',':shhh:',':shifty:',':mrgreen:',':neutral:',':question:',':razz:',':redface:',':rolleyes:',':sad:',':smile:',':surprised:',':twisted:',':wink:',':sick:',':silenced:',':snooty:',':angel:',':clap:',':dance:',':doh:',':drool:',':eh:',':hand:',':liar:',':naughty:',':think:',':wall:',':whistle:');

$gifemoticon=array('<img src="smiles/icon_biggrin.gif" width="15" height="15" />',
'<img src="smiles/icon_confused.gif" width="15" height="15" />',
'<img src="smiles/icon_cool.gif" width="15" height="15" />',
'<img src="smiles/icon_cry.gif" width="15" height="15" />',
'<img src="smiles/icon_eek.gif" width="15" height="15" />',
'<img src="smiles/icon_evil.gif" width="15" height="15" />',
'<img src="smiles/icon_exclaim.gif" width="15" height="15" />',
'<img src="smiles/icon_frown.gif" width="15" height="15" />',
'<img src="smiles/icon_idea.gif" width="15" height="15" />',
'<img src="smiles/icon_lol.gif" width="15" height="15" />',
'<img src="smiles/icon_mad.gif" width="15" height="15" />',
'<img src="smiles/eusa_pray.gif" width="19" height="16" />',
'<img src="smiles/eusa_shhh.gif" width="15" height="16" />',
'<img src="smiles/eusa_shifty.gif" width="15" height="15" />',
'<img src="smiles/icon_mrgreen.gif" width="15" height="16" />',
'<img src="smiles/icon_neutral.gif" width="15" height="15" />',
'<img src="smiles/icon_question.gif" width="15" height="15" />',
'<img src="smiles/icon_razz.gif" width="15" height="15" />',
'<img src="smiles/icon_redface.gif" width="15" height="15" />',
'<img src="smiles/icon_rolleyes.gif" width="15" height="15" />',
'<img src="smiles/icon_sad.gif" width="15" height="15" />',
'<img src="smiles/icon_smile.gif" width="15" height="15" />',
'<img src="smiles/icon_surprised.gif" width="15" height="15" />',
'<img src="smiles/icon_twisted.gif" width="15" height="15" />',
'<img src="smiles/icon_wink.gif" width="15" height="15" />',
'<img src="smiles/eusa_sick.gif" width="15" height="15" />',
'<img src="smiles/eusa_silenced.gif" width="15" height="15" />',
'<img src="smiles/eusa_snooty.gif" width="16" height="15" />',
'<img src="smiles/eusa_angel.gif" width="15" height="15" />',
'<img src="smiles/eusa_clap.gif" width="19" height="16" />',
'<img src="smiles/eusa_dance.gif" width="27" height="16" />',
'<img src="smiles/eusa_doh.gif" width="22" height="16" />',
'<img src="smiles/eusa_drool.gif" width="15" height="16" />',
'<img src="smiles/eusa_eh.gif" width="15" height="15" />',
'<img src="smiles/eusa_hand.gif" width="17" height="16" />',
'<img src="smiles/eusa_liar.gif" width="20" height="15" />',
'<img src="smiles/eusa_naughty.gif" width="20" height="16" />',
'<img src="smiles/eusa_think.gif" width="17" height="16" />',
'<img src="smiles/eusa_wall.gif" width="25" height="15" />',
'<img src="smiles/eusa_whistle.gif" width="22" height="16" />');
$a=split('<spliter>',stripslashes(file_get_contents('shout.txt')),14);
echo str_replace($teksemoticon,$gifemoticon,'...<br />'.$a[12].'<hr />'.$a[11].'<hr />'.$a[10].'<hr />'.$a[9].'<hr />'.$a[8].'<hr />'.$a[7].'<hr />'.$a[6].'<hr />'.$a[5].'<hr />'.$a[4].'<hr /><center></center><hr />'.$a[3].'<hr />'.$a[2].'<hr />'.$a[1].'<hr />'.$a[0]);
$counts=file_get_contents('count.txt');
?>

<script type="text/javascript">
parent.window.status="<?php echo $wstat; ?>";
//window.status="heryasa@gmail.com";
parent.document.getElementById('messages').innerHTML = '
<?php 
echo $counts; ?> pesan terkirim';
setTimeout("parent.document.getElementById('messages').innerHTML='';",5000);
setTimeout("document.location='gomsg.php?rand="+Math.floor(Math.random()*999999)+"#newfirst';",20000);</script>
<?php }
else{ ?>
<br />
<br />
<br />
<br />
<br />
<div style="color: #FF0000;">Room Publik</div><br />
<br />
Untuk masuk ke halaman ini anda harus login dulu!<br />

<br />
<?php } ?>
<a name="newfirst" id="newfirst"></a>
</body>
</html>