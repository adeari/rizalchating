<?php
include('../config.php');
if(!$_SESSION['username']) { die(); } 
$query = 'INSERT INTO `ctb_chating` ( `dari` , `ke`, `pesan` , `waktu` ) VALUES ('.$_SESSION['iduser'].','.getId($_GET['user']).',\''.
mysql_escape_string (urlencode($_GET['message'])).'\',
CURRENT_TIMESTAMP
);';
$result = @mysql_query($query);
?> 
