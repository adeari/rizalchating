<?php
include('../../config.php');
if(!$_SESSION['username']) { die(); } 

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

$query = "select b.username,b.foto,a.pesan,a.waktu,b.jenis_klamin from ctb_chatingforum a inner join ctb_user b on a.dari = b.iduser
where a.idfakultas=".$fr." and (select waktu from ctb_waktuforum where iduser=".$_SESSION['iduser']." and idfakultas=".$fr.")<a.waktu
and a.dari<>".$_SESSION['iduser'];
$result = @mysql_query($query);
while ($row = @mysql_fetch_array($result)) {
    $fotoni=$row['foto'];
    if (strlen($fotoni)>0)  $fotoni="../../uploadfile/".$fotoni;
    else {
        if (strcmp($row['jenis_klamin'],'0')==0)    $fotoni="../../imgs/laki.jpg";
        else if (strcmp($row['jenis_klamin'],'1')==0)  $fotoni="../../imgs/cewek.jpg";
    }
?>
<br/><span style="color: #000000;">&nbsp;<img src="<?=$fotoni?>" style="width:40px;height:50px;">
<br/>&nbsp;&nbsp;(<?=$row['username']?>) :</span><br />&nbsp;&nbsp;&nbsp;
<?=str_replace($teksemoticon, $gifemoticon, stripslashes(urldecode($row['pesan'])))?><hr />
<?
$query = "update ctb_waktuforum set waktu='".$row['waktu']."' where iduser=".$_SESSION['iduser']." and idfakultas=".$fr;
@mysql_query($query);
}

$semua=false;
$query = "select waktu from ctb_waktubroadcast where iduser=".$_SESSION['iduser'];
$result = @mysql_query($query);
if ($row = @mysql_fetch_array($result)) {
    if (strlen($row['waktu'])<1) {
        $semua=true;
    }
}
if ($semua) {
    $query = "select pesan,filenya,tgl,iduser from ctb_broadcast where idfakultas=".$fr;
    $result = @mysql_query($query);
    while ($row = @mysql_fetch_array($result)) {
        $fotoni="";$dari="";
        $query = "select foto,jenis_klamin,username from ctb_user where iduser=".$_SESSION['iduser'];
        $resultX = @mysql_query($query);
        if ($rowX = mysql_fetch_array($resultX)) {
            $fotoni=$rowX['foto'];
            $dari=$rowX['username'];
            if (strlen($fotoni)>0)  $fotoni="../../uploadfile/".$fotoni;
            else {
                if (strcmp($rowX['jenis_klamin'],'0')==0)    $fotoni="../../imgs/laki.jpg";
                else if (strcmp($rowX['jenis_klamin'],'1')==0)  $fotoni="../../imgs/cewek.jpg";
            }
        }
        ?>
        <br/><span style="color: #000000;">&nbsp;<img src="<?=$fotoni?>" style="width:40px;height:50px;">
        <br/>&nbsp;&nbsp;(<?=$dari?>) :</span><br />&nbsp;&nbsp;&nbsp;
        <?=urldecode($row['pesan'])?>
        <?
        if (strlen($row['filenya'])>0)
        {
            echo "<a href=\"javascript:bukachat(202".date('ymdHis').",'../../uploadfile/".$row['filenya']."',500,500);\">".$row['filenya']."</a>";
        }
        $query = "update ctb_waktubroadcast set waktu='".$row['tgl']."' where iduser=".$_SESSION['iduser'];
        @mysql_query($query);
    }
} else {
    $query = "select pesan,filenya,tgl,iduser from ctb_broadcast where idfakultas=".$fr." and tgl>(
    select waktu from ctb_waktubroadcast where iduser=".$_SESSION['iduser'].")";
    $result = @mysql_query($query);
    while ($row = @mysql_fetch_array($result)) {
        $fotoni="";$dari="";
        $query = "select foto,jenis_klamin,username from ctb_user where iduser=".$_SESSION['iduser'];
        $resultX = @mysql_query($query);
        if ($rowX = mysql_fetch_array($resultX)) {
            $fotoni=$rowX['foto'];
            $dari=$rowX['username'];
            if (strlen($fotoni)>0)  $fotoni="../../uploadfile/".$fotoni;
            else {
                if (strcmp($rowX['jenis_klamin'],'0')==0)    $fotoni="../../imgs/laki.jpg";
                else if (strcmp($rowX['jenis_klamin'],'1')==0)  $fotoni="../../imgs/cewek.jpg";
            }
        }
        ?>
        <br/><span style="color: #000000;">&nbsp;<img src="<?=$fotoni?>" style="width:40px;height:50px;">
        <br/>&nbsp;&nbsp;(<?=$dari?>) :</span><br />&nbsp;&nbsp;&nbsp;
        <?=urldecode($row['pesan'])?>
        <?
        if (strlen($row['filenya'])>0)
        {
            echo "<a href=\"javascript:bukachat(202".date('ymdHis').",'../../uploadfile/".$row['filenya']."',500,500);\">".$row['filenya']."</a>";
        }
        $query = "update ctb_waktubroadcast set waktu='".$row['tgl']."' where iduser=".$_SESSION['iduser'];
        @mysql_query($query);
    }
}
?> 
