var chars = new Array(' ', '!', '"', '#', '$', '%', '&', "'", '(', ')', '*', '+', ',', '-','.', '/', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', ':', ';', '<', '=', '>', '?', '@', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '[', '\\', ']', '^', '_', '`', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
var tampilkan=0;

function convert(str) {
	var outtext = '';
	for(var i = 0; i < str.length; i++) {
    
	for(var int2 = 32; int2 < chars.length+32; int2++) {
		if(str.charAt(i) == chars[int2-32]) { outtext += '' + int2; break; }
	}
	}
	return outtext;
}

function bukachat(id, page, width, height) {
window.open(page, id, 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=' + width + ',height=' + height + ',left = 50,top = 50');
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
var http2 = fhttp();
var http3 = fhttp();
var http4 = fhttp();

function waitupdate() {
	if(!used) {
setTimeout("update()", 8000);
	}
}

var currentlyOpen = '\\--';

function update2() {
	if (http.readyState == 4) {
		if(http.responseText.substr(0, 7) == 'messwin') {
			wid = convert(http.responseText.replace(/ /g, ''));
			
			
			if(currentlyOpen.match(wid) == null) {
			bukachat(wid, http.responseText, 400, 526);
			currentlyOpen += wid;
			}
		}
		used = false;
		waitupdate();
	}	
}

function update() {
	used = true;
http.open("GET", "update.php", true);
http.onreadystatechange = update2;
http.send(null);
}

function bukaprivate(url) {
			wid = convert(url);
			if(currentlyOpen.match(wid) == null) {
				bukachat(wid, url + '&id=' + currentlyOpen.length, 400, 526);
			currentlyOpen += wid;
			}
}

function contactslist2() {
	if (http2.readyState == 4) {
		if(http2.responseText) {
			if(document.getElementById('contacts').innerHTML != http2.responseText) {
			document.getElementById('contacts').innerHTML = http2.responseText;
			}
		}
	}
}

function contactslist() {
	http2.open("GET", "contacts.php?rand=" + Math.random()*999999+'&tampiloffline='+tampilkan, true);
	http2.onreadystatechange = contactslist2;
	http2.send(null);
	setTimeout("contactslist()", 19000);
}
function cekcating2()
{
	if (http3.readyState == 4) {
		if(http3.responseText) {
			bukaprivate('messwindow.php?user='+http3.responseText);
		} 
	}
}
function cekcating()
{
	http3.open("GET", "cekcating.php", true);
	http3.onreadystatechange = cekcating2;
	http3.send(null);
	setTimeout("cekcating()", 8000);
}


function cekcating41()
{
	if (http4.readyState == 4) {
		if(http4.responseText) {
			bukaprivate('ft/index.php?fr='+http4.responseText);
		} 
	}
}
function cekcating4()
{
	http4.open("GET", "cekbroadcast.php", true);
	http4.onreadystatechange = cekcating41;
	http4.send(null);
	setTimeout("cekcating4()", 7000);
}

cekcating4();
cekcating();
contactslist();
update();

