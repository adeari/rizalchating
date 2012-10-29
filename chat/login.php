<?php include('config.php');
$query = 'SELECT pas FROM `ctb_user` WHERE username=\''.mysql_escape_string ($_GET['username']).'\'';
$result = mysql_query($query);
if($row = mysql_fetch_array($result)) {
if($row['pas'] == md5($_GET['password'])) {
$_SESSION['username'] = $_GET['username'];
$_SESSION['encpassword'] = $row['pas'];
$_SESSION['iduser'] = getId($_GET['username']);
echo 'OK';
}else{
echo 'password salah';
}
}else{
echo 'username salah';
}
?>
