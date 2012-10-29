<?
include('../config.php');
$query="select idfakultas from ctb_user where iduser=".$_SESSION['iduser'];
$result=@mysql_query($query);
if ($row = mysql_fetch_array($result)) {
    $fr=$row['idfakultas'];
}
$query="select waktu from ctb_waktubroadcast";
$result=@mysql_query($query);
if ($row = mysql_fetch_array($result)) {
    if (strlen($row['waktu'])<1) {
        $query = "select pesan,filenya,tgl,iduser from ctb_broadcast where idfakultas=".$fr;
        $result=@mysql_query($query);
        if ($row = mysql_fetch_array($result)) {
            echo $fr;
        } else {
            $query = "select pesan,filenya,tgl,iduser from ctb_broadcast where idfakultas=0";
        $result=@mysql_query($query);
        if ($row = mysql_fetch_array($result)) {
            echo "0";
        }
        }
    } else {
        $query = "select pesan,filenya,tgl,iduser from ctb_broadcast where  idfakultas=0 and tgl>(
    select waktu from ctb_waktubroadcast where iduser=".$_SESSION['iduser'].")";
        $result=@mysql_query($query);
        if ($row = mysql_fetch_array($result)) {
            echo $fr;
        } else {
            $query = "select pesan,filenya,tgl,iduser from ctb_broadcast where  idfakultas=0 and tgl>(
    select waktu from ctb_waktubroadcast where iduser=".$_SESSION['iduser'].")";
        $result=@mysql_query($query);
        if ($row = mysql_fetch_array($result)) {
            echo "0";
        }
        }
    }
}
?>