<?php
include('config.php');
if(!$_SESSION['username']) { die(); } 
$uploaddir = 'uploadfile/';
$filename="file".date('ymdHis').basename($_FILES['uploadfile']['name']); 
$file = $uploaddir . $filename; 
 
if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file)) { 
$query = 'INSERT INTO `ctb_chating` ( `dari` , `ke`, `pesan` , `waktu` ) VALUES ('.$_SESSION['iduser'].','.getId($_GET['user'])
.',\'<br/>Download <a  href="javascript:bukachat(202'.date('ymdHis').',\\\'../uploadfile/'.$filename.'\\\',500,500);">'.$filename.'</a><br/>\',
CURRENT_TIMESTAMP
);';
$result = @mysql_query($query);
$query="insert into ctb_file (namafile,	tglfle,iduser_from,iduser_to) values ('".$file."',now(),".$_SESSION['iduser'].",".getId($_GET['user']).");";
$result = @mysql_query($query);
} else {
	echo "error";
}
?>