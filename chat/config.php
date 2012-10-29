<?php
session_start();

$SERVER = 'localhost';
$USERME = 'ade';
$PASSRD = '123'; 
$DATASE = 'chati';

function getId($str)
{
    $balik="";
    $query = 'SELECT iduser FROM `ctb_user` WHERE username = \''.mysql_escape_string ($str).'\'';
    $result=@mysql_query($query);
    while($row=@mysql_fetch_array($result)){
        $balik=$row['iduser'];
    }
    return $balik;
}

$access = @mysql_connect($SERVER,$USERME,$PASSRD) or die ('koneksi error. silakan cek lagi'); 
@mysql_select_db($DATASE,$access) or die ('koneksi error. silakan cek lagi');

if($_SESSION['username']) {
$query = 'UPDATE `ctb_user` SET `waktu_online` = now() WHERE username = \''.mysql_escape_string ($_SESSION['username']).'\'';
$result = @mysql_query($query);
$query = 'SELECT pas FROM `ctb_user` WHERE username = \''.mysql_escape_string ($_SESSION['username']).'\' AND pas = \''.mysql_escape_string ($_SESSION['encpassword']).'\'';
$result = @mysql_query($query);

if($row = @mysql_fetch_array($result)) {
}else{
session_unset();
session_destroy();
?>

<script type="text/javascript">
setTimeout("window.close();", 2000);
</script>

<?php
die('login terlebih dahulu');
}
}
?>