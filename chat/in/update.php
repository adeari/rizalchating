<?php
include('../config.php');
if(!$_SESSION['username']) { die(); } 
$query = 'SELECT dari FROM `ctb_chating` WHERE `dari` LIKE \'%>'.mysql_escape_string ($_SESSION['username']).'%\' ORDER BY `waktu` DESC LIMIT 0,1';
$result = mysql_query($query);

if($row = mysql_fetch_array($result)) {
$b = split('>', $row['user']);
echo 'messwindow.php?user='.$b[0];
}
?> 
