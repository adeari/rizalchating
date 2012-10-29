<?
include('../config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?
$query="SELECT a.username, a.foto, a.nama, a.jenis_klamin, b.nama_fakultas
FROM ctb_user a
INNER JOIN ctb_fakultas b ON a.idfakultas = b.idfakultas
WHERE a.iduser=".$iniuser;
$result=mysql_query($query);

if($row = mysql_fetch_array($result)) {
    if (strcmp($row['jenis_klamin'],'0')==0) $klamin="Laki - Laki"; else if (strcmp($row['jenis_klamin'],'1')==0)  $foto="Perempuan";
    if (strlen($row['foto'])>0)
        $foto="../uploadfile/".$row['foto'];
    else {
        if (strcmp($row['jenis_klamin'],'0')==0) $foto="../imgs/laki.jpg"; else if (strcmp($row['jenis_klamin'],'1')==0)  $foto="../imgs/cewek.jpg";
    }
?>
<div id="contents">
<div id="dashbar">
<h2>Profile Saya</h2>
<img class="author" src="<?=$foto?>" alt="My Photo" />
<p>User Name : <?=$row['username']?></p>
<p>Nama : <?=$row['nama']?></p>
<p>Jenis Kelamin : <?=$klamin?></p>
<p>Fakultas : <?=$row['nama_fakultas']?></p>

</div>
<?
}
?>
  
</div>
</body>
</html>
