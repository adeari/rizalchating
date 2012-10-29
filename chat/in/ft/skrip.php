var chars = new Array(' ', '!', '"', '#', '$', '%', '&', "'", '(', ')', '*', '+', ',', '-','.', '/', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', ':', ';', '<', '=', '>', '?', '@', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '[', '\\', ']', '^', '_', '`', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');

function convert(str) {
	var outtext = '';
	for(var i = 0; i < str.length; i++) {
    
	for(var int2 = 32; int2 < chars.length+32; int2++) {
		if(str.charAt(i) == chars[int2-32]) { outtext += '' + int2; break; }
	}
	}
	return outtext;
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
var http3 = fhttp();
function waitupdate() {
	if(!used) {
setTimeout("update()", 1500);
	}
}

var currentlyOpen = new Array();

function update2() {
	used = true;
	if (http.readyState == 4) {
		if(http.responseText) {
                if (http.responseText.length>0)
                {
		if(http.responseText.match(':getar:') != null) { if (window.focus) window.focus(); getar();
		 }else{
			document.getElementById('pesanini').innerHTML += http.responseText;
			}
			
			document.getElementById('pesanini').scrollTop=document.getElementById('pesanini').scrollHeight-document.getElementById('pesanini').clientHeight;

		}}
                
		used = false;
		waitupdate();
	}
	
}
function update() {
	used = true;
http.open("GET", "updateforum.php?fr=<?php echo $fr; ?>", true);
http.onreadystatechange = update2;
http.send(null);

}

function kirimpesan2(a) {
http3.open("GET", "postforum.php?fr=<?=$fr?>&message=" + a, true);
http3.send(null);
}


function kirimpesan() {
if(document.getElementById('inputpesan').value == '') 
{ alert('tulis pesan dulu'); }
else{
document.getElementById('pesanini').innerHTML += '<br/><span style="color: #000000;">&nbsp;( Saya ) : </span><br />&nbsp;&nbsp;' + document.getElementById('inputpesan').value.replace(/\n/g, '<br />').replace(/:grin:/g, 
'<img src="smiles/icon_biggrin.gif" width="15" height="15" />').replace(/:confused:/g, 
'<img src="smiles/icon_confused.gif" width="15" height="15" />').replace(/:cool:/g, 
'<img src="smiles/icon_cool.gif" width="15" height="15" />').replace(/:cry:/g, 
'<img src="smiles/icon_cry.gif" width="15" height="15" />').replace(/:eek:/g, 
'<img src="smiles/icon_eek.gif" width="15" height="15" />').replace(/:evil:/g, 
'<img src="smiles/icon_evil.gif" width="15" height="15" />').replace(/:exclaim:/g, 
'<img src="smiles/icon_exclaim.gif" width="15" height="15" />').replace(/:frown:/g, 
'<img src="smiles/icon_frown.gif" width="15" height="15" />').replace(/:idea:/g, 
'<img src="smiles/icon_idea.gif" width="15" height="15" />').replace(/:lol:/g, 
'<img src="smiles/icon_lol.gif" width="15" height="15" />').replace(/:mad:/g, 
'<img src="smiles/icon_mad.gif" width="15" height="15" />').replace(/:pray:/g, 
'<img src="smiles/eusa_pray.gif" width="19" height="16" />').replace(/:shhh:/g, 
'<img src="smiles/eusa_shhh.gif" width="15" height="16" />').replace(/:shifty:/g, 
'<img src="smiles/eusa_shifty.gif" width="15" height="15" />').replace(/:mrgreen:/g, 
'<img src="smiles/icon_mrgreen.gif" width="15" height="15" />').replace(/:neutral:/g, 
'<img src="smiles/icon_neutral.gif" width="15" height="15" />').replace(/:question:/g, 
'<img src="smiles/icon_question.gif" width="15" height="15" />').replace(/:razz:/g, 
'<img src="smiles/icon_razz.gif" width="15" height="15" />').replace(/:redface:/g, 
'<img src="smiles/icon_redface.gif" width="15" height="15" />').replace(/:rolleyes:/g, 
'<img src="smiles/icon_rolleyes.gif" width="15" height="15" />').replace(/:sad:/g, 
'<img src="smiles/icon_sad.gif" width="15" height="15" />').replace(/:smile:/g, 
'<img src="smiles/icon_smile.gif" width="15" height="15" />').replace(/:surprised:/g, 
'<img src="smiles/icon_surprised.gif" width="15" height="15" />').replace(/:twisted:/g, 
'<img src="smiles/icon_twisted.gif" width="15" height="15" />').replace(/:wink:/g, 
'<img src="smiles/icon_wink.gif" width="15" height="15" />').replace(/:sick:/g, 
'<img src="smiles/eusa_sick.gif" width="15" height="15" />').replace(/:silenced:/g, 
'<img src="smiles/eusa_silenced.gif" width="15" height="15" />').replace(/:snooty:/g, 
'<img src="smiles/eusa_snooty.gif" width="16" height="15" />').replace(/:angel:/g, 
'<img src="smiles/eusa_angel.gif" width="15" height="15" />').replace(/:clap:/g, 
'<img src="smiles/eusa_clap.gif" width="19" height="16" />').replace(/:dance:/g, 
'<img src="smiles/eusa_dance.gif" width="27" height="16" />').replace(/:doh:/g, 
'<img src="smiles/eusa_doh.gif" width="22" height="16" />').replace(/:drool:/g, 
'<img src="smiles/icon_drool.gif" width="15" height="15" />');
document.getElementById('pesanini').innerHTML += '<hr/>';
	kirimpesan2(document.getElementById('inputpesan').value.replace(/\n/g, '<br />'));
	
	document.getElementById('inputpesan').disabled = 'disabled';
	document.getElementById('Kirim').disabled = 'disabled';
	setTimeout("document.getElementById('inputpesan').value = ''; document.getElementById('inputpesan').disabled = '';document.getElementById('Kirim').disabled = ''; document.getElementById('inputpesan').focus();", 100);
			document.getElementById('pesanini').scrollTop=document.getElementById('pesanini').scrollHeight-document.getElementById('pesanini').clientHeight;
			}
}

update();

function tambahemoticon(em) {
document.getElementById('inputpesan').value = document.getElementById('inputpesan').value + " " + em;document.getElementById('inputpesan').focus();
}
