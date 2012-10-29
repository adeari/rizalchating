<?php
$pertanyaan = '';
$jawaban = '';

function bacaData(){
	global $pertanyaan,$jawaban;
	// baca konfigurasi
	$rawdata = file('polldata.txt');
	// Ambil pertanyaan polling
	$pertanyaan = $rawdata[0];
	// Ambil jumlah jawaban 
	$jmljawaban = sizeof($rawdata)-1;
	$count = 0;
	for ($i=1; $i <= $jmljawaban; $i++){
		$jawabData = explode(':',$rawdata[$i]);
		// jika baris tidak kosong maka ditambah ke array jawaban 
		if (strlen(trim($jawabData[0]))>0){
			$jawaban[$count]['text']  = $jawabData[0];
			$jawaban[$count]['count'] = $jawabData[1];
			++$count;
		}
	}
}

function tulisData(){
	global $pertanyaan,$jawaban;
	$file = fopen('polldata.txt','w');
	fwrite($file,$pertanyaan."\r\n",strlen($pertanyaan));
	foreach ($jawaban as $value) {
		$row = $value['text'].':'.$value['count']."\r\n";
		fwrite($file,$row,strlen($row));
	}
	fclose($file);
}

bacaData();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title></title></head>
<body>
    <div id="main">
<?php if (!isset($_POST['submitBtn'])) { ?>      
      <?php echo "$pertanyaan"; ?></div>
	  <div id="icon">&nbsp;</div>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="poll">
        <table width="300">
        <?php
		
        	foreach ($jawaban as $value) {
			echo '<tr><td><input type="radio" name="polling" value="'.$value['text'].'"/> '.$value['text'].'</td></tr>';
        	}
        ?>
          <tr><td align="center"><br/><input class="text" type="submit" name="submitBtn" value="Vote" /></td></tr>
        </table>  
      </form>
<?php    
} else {
    	$count = 0;
       	foreach ($jawaban as $value) {
			if ($value['text']  == $_POST['polling']) {
				$jawaban[$count]['count'] = ((int)$value['count'])+1;
				(int)$totalCount++;
			}
			++$count;
       	}
       	
       	tulisData();
?>
      <div>
        <div align="center"><strong>Terima kasih telah mengisi polling</strong><strong> ini</strong></div>
      </div>
      <div id="icon">&nbsp;</div>
      <div id="result">
        <table width="300">
<?php
       	foreach ($jawaban as $value) {
			echo '<tr><td> '.$value['text'].'</td><td>'.$value['count'].'</td></tr>';
       	}
?>
        </table>
     </div>
<?php } ?>
    </div>
</body>   
