function bukachat(id, page, width, height) {
window.open(page, id, 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=' + width + ',height=' + height + ',left = 10,top = 10');
}
function fhttp() {
    if (typeof XMLHttpRequest != 'undefined') {
        return new XMLHttpRequest();
    }
    try {
        return new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            return new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e) {}
    }
    return false;
}
var http = fhttp();

function login2() {
	if (http.readyState == 4) {
		if(http.responseText == 'OK') {
		bukachat(001, 'in/home.php', 400, 526);
		}else{ 
		alert(http.responseText);
		}
	}
}

function tampilkancating()
{
	bukachat(001, 'in/home.php', 400, 526);
}

function login() {
http.open("GET", "login.php?username=" + document.getElementById('username').value + "&password="  + document.getElementById('password').value, true);
http.onreadystatechange = login2;
http.send(null);
}
