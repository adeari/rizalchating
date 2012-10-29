<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
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
<script src="login.js"></script>
</head>
<body>
<table width="100%" border="0" style="height: 100%;">
  <tr>
    <td align="center"><form action="masukini.php" name="frcating" id="frcating" method="post">
	<div style="width: 372px; height: 522px; background: url(imgs/mbk.png) #
	<?php if(!$_GET['color']) { echo 'CCCCFF'; }
	else{ echo $_GET['color']; } ?>;">
	<div style="padding-top: 200px;"><table border="0" cellpadding="0" cellspacing="0"><tr>
              <td align="right"><span class="style3">Username:</span></td>
              <td><input name="username" type="text" id="username" /></td></tr>
            <tr>
              <td align="right"><span class="style3">Password:</span></td>
              <td><input name="password" type="password" id="password" /></td>
            </tr>
            <tr></tr></table>
          <p><br />
              <input name="image" type="image" value="submit" src="imgs/login.png" alt="Login" width="54" height="32" onmouseover="this.src = 'imgs/login_over.png'" onmouseout="this.src = 'imgs/login.png'" style="cursor: default;" />
              <br />
              <br />
              <span class="style5"><span class="style6"><span class="style8"><a href="javascript:bukachat('778', 'daftar/', '700', '300');" class="style1">Daftar</a></span></span></span></p>
          <p><span class="style10"><a href="../index.php" class="style1">Kembali ke Home Page</a></span></p>
	</div>
    </div></form></td>
  </tr>
</table>
</body>
</html>
