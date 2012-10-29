<? 
//koneksi dengan database
		$nama=$_POST['nama'];
		$email=$_POST['email'];
		$komen=$_POST['komen'];
		$tgl=$_POST['tgl'];
		$n=0;

		@ $db = mysql_pconnect('localhost','root','');
		if (!$db)
		{
			echo "error...tidak bisa membuka database";
			exit;
		}
		mysql_select_db('chat');
		if($nama!='')
		{
			$n=1;
			$query = "INSERT INTO tamu values (
			'".$nama."', '".$email."', '".$komen."','".$tgl."')";	
			$result = mysql_query($query);
		}
		
//tambah komentar
	if($nama!='')
		echo "Terima kasih atas komentarnya<br>";
	else
		echo "Mana komentarnya?<br>";
?>
<form name="form2" action="gp.php">
    <input class="button" name="back" type="submit" id="back" value="OK">
</form>
