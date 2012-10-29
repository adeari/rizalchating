<?php include('../config.php');
if(!$_SESSION['username'])
{
die('anda harus login dahulu');
}?>
<span style="font-size: 12px;"><strong>Teman kamu</strong><br /><br />Online<hr /><blockquote>
<?php
$nomor=0;
$query='SELECT iduser,username,foto,jenis_klamin FROM `ctb_user` WHERE `waktu_online` >= DATE_ADD(NOW(), INTERVAL -\'20\' SECOND)';$result=@mysql_query($query);
while($row=@mysql_fetch_array($result))
{
if($row['username']==$_SESSION['username'])
{
continue;
}
$nomor++;
if (strlen($row['foto'])>0)
        $foto="../uploadfile/".$row['foto'];
    else {
        if (strcmp($row['jenis_klamin'],'0')==0) $foto="../imgs/laki.jpg"; else if (strcmp($row['jenis_klamin'],'1')==0)  $foto="../imgs/cewek.jpg";
    }
echo'<a href="javascript:bukaprivate(\'messwindow.php?user='.$row['username'].'\');"><img src="'.$foto.'" width="50" height="50">
    '.$row['username'].'</a> &nbsp;&nbsp;<a href="javascript:bukachat(\'ya'.$nomor.'\', \'profilewindow.php?iniuser='.$row['iduser'].'\', 450, 300);">Profile</a><br />';
}
?>
</blockquote><br />Offline<hr />
<input type="button" id="btini" name="btini" 
<?
if (strcmp($_GET['tampiloffline'],"0")===0) {
?>
 value="Tampilkan Offline User"
<? } else { ?>
 value="Tutup Offline User"
<? } ?>
  onclick="tampil()">
 <br/><br/>   
<blockquote id="offlineform" 
<?
if (strcmp($_GET['tampiloffline'],"0")===0) {
?>
    style="visibility:hidden"
<? } ?>
 >
<?php 
$query='SELECT iduser,username,foto,jenis_klamin FROM `ctb_user` WHERE `waktu_online` < DATE_ADD(NOW(), INTERVAL -\'40\' SECOND)';$result=@mysql_query($query);
while($row=@mysql_fetch_array($result)){
    if (strlen($row['foto'])>0)
        $foto="../uploadfile/".$row['foto'];
    else {
        if (strcmp($row['jenis_klamin'],'0')==0) $foto="../imgs/laki.jpg"; else if (strcmp($row['jenis_klamin'],'1')==0)  $foto="../imgs/cewek.jpg";
    }
    $nomor++;
    echo'<a href="javascript:bukaprivate(\'messwindow.php?user='.$row['username'].'\');"><img src="'.$foto.'" width="50" height="50">
    '.$row['username'].'</a> &nbsp;&nbsp;<a href="javascript:bukachat(\'ya'.$nomor.'\', \'profilewindow.php?iniuser='.$row['iduser'].'\', 450, 300);">Profile</a><br />';
}
?></blockquote><br /></span>
