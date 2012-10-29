<?
include('../config.php');
$query='select iduser,username,jumlah from (
SELECT a.iduser,a.username,(select count(*) from ctb_chating b where b.dari=a.iduser
and b.ke='.$_SESSION['iduser'].' and b.status_baca=false 
) as jumlah FROM `ctb_user` a) as data where jumlah>0';
$result=@mysql_query($query);
if ($row = mysql_fetch_array($result)) {
    echo $row['username'];
}
?>