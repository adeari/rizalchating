<?php 
include('../config.php');
if($_GET['function']=='logoff')
{
$_SESSION['encpassword']='';
session_unset();
session_destroy();
}
if(!$_SESSION['username'])
{
?>
<script type="text/javascript">window.close();
</script><?php die();
}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /><title>7405030038</title>

<style type="text/css">
body{margin:0px;}
body,td,th{font-family:Verdana,Arial,Helvetica,sans-serif;font-size:10px;}
blockquote{margin-top:0px;margin-bottom:0px;}
a:visited{color:#0000FF;}
a{color:#0000FF;}</style>
<script type="text/javascript" src="scripts.js"></script>
<script type="text/javascript">
function tampil(){
var iniy=document.getElementById('offlineform');
var btini=document.getElementById('btini');
if (iniy.style.visibility=='hidden'){
    tampilkan=1;
    iniy.style.visibility='visible';
    btini.value='Tutup Offline User';
} else {
    tampilkan=0;
    iniy.style.visibility='hidden';
    btini.value='Tampilkan Offline User';
}
}
</script>
<?php 
if($_GET['function']){?>
<meta http-equiv="refresh" content="0;URL=home.php" />
<?php }?>
</head>
<body>
<div style="position:absolute;left:10px;top:33px;background:#FFFFFF;width:352px;height:31px; overflow:auto">
<div style="padding:5px;">Selamat datang <?php echo $_SESSION['username']; ?> 
(<a href="home.php?function=logoff">Keluar</a>)<br /><br />
</div></div><div style="position:absolute;left:11px;top:70px;background:#FFFFFF;width:352px;height:368px;overflow:auto">
  <div style="padding: 5px;">
<?
$query = "SELECT nama_fakultas,idfakultas from ctb_fakultas where
idfakultas=(select idfakultas from ctb_user where iduser=".$_SESSION['iduser'].") or idfakultas='0' order by idfakultas";

$result = @mysql_query($query);
$nomor=0;
while ($row = mysql_fetch_array($result)) {
    $nomor++;
    echo "<p><a href=\"javascript:bukachat(202".$nomor.",'ft/index.php?fr=".$row['idfakultas']."',500,500);\">".$row['nama_fakultas']."</a></p>";
}
?>

  <br /><br /><span id="contacts"></span><br />
    <br />
    <br />
    <span id="contacts"></span><br />
</div></div><div style="width:372px;height: 522px;background:url(imgs/newmsgbk.png) #
<?php 
if(!$_GET['color']){echo'CCCCFF';}
else{echo $_GET['color'];}
?>;" id="cchange"><img src="../imgs/mbk.png" alt=" " width="372" height="522" /></div>
</body></html>