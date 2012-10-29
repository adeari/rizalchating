<?php
include('../../config.php');
if(!$_SESSION['username']) { die(); } 
$query = 'INSERT INTO `ctb_chatingforum` ( `dari` , `idfakultas`, `pesan` , `waktu` ) VALUES ('.$_SESSION['iduser'].','.$fr.',\''.
mysql_escape_string (urlencode($_GET['message'])).'\',
now()
);';
$result = @mysql_query($query);
?> 
