<?php
include('../config.php');
if(!$_SESSION['username']) { die(); } 

$teksemoticon = array(':grin:', ':confused:', ':cool:', ':cry:', ':eek:', ':evil:', ':exclaim:', ':frown:', ':idea:', ':lol:', ':mad:', ':pray:', ':shhh:', ':shifty:', ':mrgreen:', ':neutral:', ':question:', ':razz:', ':redface:', ':rolleyes:', ':sad:', ':smile:', ':surprised:', ':twisted:', ':wink:', ':sick:', ':silenced:', ':snooty:', ':angel:', ':clap:', ':dance:', ':doh:', ':drool:', ':eh:', ':hand:', ':liar:', ':naughty:', ':think:', ':wall:', ':whistle:'); 

$gifemoticon = array('<img src="../imgs/smiles/icon_biggrin.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/icon_confused.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/icon_cool.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/icon_cry.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/icon_eek.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/icon_evil.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/icon_exclaim.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/icon_frown.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/icon_idea.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/icon_lol.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/icon_mad.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/eusa_pray.gif" width="19" height="16" />', 
'<img src="../imgs/smiles/eusa_shhh.gif" width="15" height="16" />', 
'<img src="../imgs/smiles/eusa_shifty.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/icon_mrgreen.gif" width="15" height="16" />', 
'<img src="../imgs/smiles/icon_neutral.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/icon_question.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/icon_razz.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/icon_redface.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/icon_rolleyes.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/icon_sad.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/icon_smile.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/icon_surprised.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/icon_twisted.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/icon_wink.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/eusa_sick.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/eusa_silenced.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/eusa_snooty.gif" width="16" height="15" />', 
'<img src="../imgs/smiles/eusa_angel.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/eusa_clap.gif" width="19" height="16" />', 
'<img src="../imgs/smiles/eusa_dance.gif" width="27" height="16" />', 
'<img src="../imgs/smiles/eusa_doh.gif" width="22" height="16" />', 
'<img src="../imgs/smiles/eusa_drool.gif" width="15" height="16" />', 
'<img src="../imgs/smiles/eusa_eh.gif" width="15" height="15" />', 
'<img src="../imgs/smiles/eusa_hand.gif" width="17" height="16" />', 
'<img src="../imgs/smiles/eusa_liar.gif" width="20" height="15" />', 
'<img src="../imgs/smiles/eusa_naughty.gif" width="20" height="16" />', 
'<img src="../imgs/smiles/eusa_think.gif" width="17" height="16" />', 
'<img src="../imgs/smiles/eusa_wall.gif" width="25" height="15" />', 
'<img src="../imgs/smiles/eusa_whistle.gif" width="22" height="16" />');

$query = 'SELECT ke,dari,pesan FROM `ctb_chating` WHERE `dari`= '.getId($_GET['user'])
.' and `ke` ='.$_SESSION['iduser'].' and `status_baca`=false ORDER BY `waktu` ASC';
$result = @mysql_query($query);
if($row = @mysql_fetch_array($result)) {
echo '<br />'.$_GET['user'].' : <br />'.str_replace($teksemoticon, $gifemoticon, stripslashes(urldecode($row['pesan']))).'<br />';
$query2 = 'update `ctb_chating` set `status_baca`=true  WHERE `dari`= '.getId($_GET['user']).' and `ke` ='.$_SESSION['iduser'].'
and `status_baca`=false and pesan=\''.mysql_escape_string($row['pesan']).'\';';
$result2 = @mysql_query($query2);
}
?> 
