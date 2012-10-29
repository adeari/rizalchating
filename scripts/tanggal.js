arrayhari = new Array(
"Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"
);
arraybulan = new Array(
"Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"
);

function tanggalnya(){
	var tanggal = new Date();
	var tahun = tanggal.getYear();
	if (tahun < 2000) {
		if (document.all)
			tahun = "19" + tahun;
		else
			tahun += 1900;
	}
	var hari = tanggal.getDay();
	var bulan = tanggal.getMonth();
	var tanggalini = tanggal.getDate();
	if (tanggalini < 10)
		tanggalini = "0" + tanggalini;
	var jam = tanggal.getHours();
	var menit = tanggal.getMinutes();
	var waktu = "AM";
	if (jam >= 12) {
		waktu = "PM";
		jam = jam - 12;
	}
	if (jam == 0)
		jam = 12;
	if (menit <= 9)
		menit = "0" + menit;
	document.writeln("<FONT COLOR=\"#FFFFFF\" FACE=\"Verdana,arial,helvetica,sans serif\" size=\"1\"><B>&nbsp;",arrayhari[hari]," ",tanggalini," ",arraybulan[bulan]," ",tahun,"</B> | ",jam,":",menit," ",waktu,"</FONT><BR>");
}

tanggalnya();