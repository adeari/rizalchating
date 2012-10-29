<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Chating</title>
<style type="text/css">
body,html {
height: 100%;
margin: 0;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
body {
	background-color: #353535;
}
.style1 {color: #FFFFFF}
.style3 {
	color: #FFFFFF;
	font-family: verdana;
	font-size: 13px;
	font-weight: bold;
}
.style5 {font-family: verdana}
.style6 {font-size: 13px}
.style8 {font-weight: bold}
.style10 {font-family: verdana; font-size: 13px; font-weight: bold; }
</style>
</head>
<body>
    <?
    include('config.php');
$query = 'SELECT pas FROM `ctb_user` WHERE username=\''.mysql_escape_string ($_POST['username']).'\'';
$result = mysql_query($query);
if($row = mysql_fetch_array($result)) {
if($row['pas'] == md5($_POST['password'])) {
$_SESSION['username'] = $_POST['username'];
$_SESSION['encpassword'] = $row['pas'];
$_SESSION['iduser'] = getId($_POST['username']);
?>
<script src="login.js"></script>
<? $query="select a.nama,a.jenis_klamin,b.nama_fakultas,a.foto from  ctb_user a
        inner join ctb_fakultas b on a.idfakultas=b.idfakultas
        where iduser='".
        mysql_escape_string($_SESSION['iduser'])."'";
        $result = mysql_query($query);
        if($row = mysql_fetch_array($result)) {
            $nama=$row[0];
            $jenis_klamin=$row[1];
            $foto=$row[3];
            if (strlen($foto)<1)
            {
                if (strcmp($jenis_klamin,'0')==0)   $foto="imgs/laki.jpg"; else if (strcmp($jenis_klamin,'1')==0) $foto="imgs/cewek.jpg";
            } else {
                $foto="uploadfile/".$foto;
            }
            if (strcmp($jenis_klamin,'0')==0)   $jenis_klamin="Laki-Laki"; else if (strcmp($jenis_klamin,'1')==0) $jenis_klamin="Perempuan";
            $fakultas=$row[2];
            
        }
        ?>
    <table width="100%" border="0" style="height: 100%;">
  <tr>
    <td align="center">
        <table class="style3"><tr><td>
          <font size="5">Profile anda</font>
          </td></tr>
            <tr>
    <td><img id="fotokita" src="<?=$foto?>" height="200" width="150">
        </td>
  </tr>
            <tr>
    <td id="namakita">
        Nama :  <?=$nama?>
    </td>
  </tr>
            <tr>
    <td>Jenis Kelamin : <?=$jenis_klamin?>
        </td>
  </tr>
            <tr>
    <td>Unit : <?=$fakultas?>
        </td>
  </tr>
            <tr><td align="center"><br/><br/><a href="javascript:bukachat('ditprofile','ditprofile.php',500,500);"><font class="style10" color="green">Edit Profile</font></a></td></tr>
            <tr><td align="center"><br/><br/><a href="javascript:bukachat('broadcast','broadcast.php',500,500);"><font class="style10" color="magenta">Broadcast</font></a></td></tr>
            <tr><td align="center"><br/><br/><a href="../index.php"><font class="style10" color="yellow">Kembali ke Home Page</font></a></td></tr>
        </table>
    </td>
  </tr>
  
</table>
<script type="text/javascript">
    tampilkancating();
</script>
<?
}else{
    ?>
<table width="100%" border="0" style="height: 100%;" class="style3">
  <tr>
    <td align="center">
        <font size="5">Password salah <br/><a href="index.php"><font color="yellow">Kembali Login</font></a></font>
        </td>
  </tr>
  
</table>
<?
}
}else{
    ?>
<table width="100%" border="0" style="height: 100%;" class="style3">
  <tr>
    <td align="center">
        <font size="5">Username salah <br/><a href="index.php"><font color="yellow"> Kembali Login</font></a></font>
        </td>
  </tr>
  
</table>
<?
}

$query = "select * from ctb_waktubroadcast where iduser=".$_SESSION['iduser'];
$result=mysql_query($query);
$adabradcast=false;
if($row = @mysql_fetch_array($result)) {
    $adabradcast=true;
}
if (!$adabradcast) {
    $query = "insert into ctb_waktubroadcast (iduser) values (".$_SESSION['iduser'].")";
    mysql_query($query);
}
?>
</body>
</html>