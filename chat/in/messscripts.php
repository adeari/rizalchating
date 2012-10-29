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
		if(http.responseText.match(':getar:') != null) { if (window.focus) window.focus(); getar();
		 }else{
			document.getElementById('messagewindow').innerHTML += http.responseText;
                        
                        
                        if (http.responseText.length>0&&http.responseText!='\n'&&http.responseText.charCodeAt(0)!=32) {
                        document.getElementById("dummy").innerHTML=
 "<embed src=\"msg_in.mp3\" hidden=\"true\" autostart=\"true\" loop=\"false\" />";
			} else {
                        document.getElementById("dummy").innerHTML='';
                        }
                        }
			
			document.getElementById('messagewindow').scrollTop=document.getElementById('messagewindow').scrollHeight-document.getElementById('messagewindow').clientHeight;

		}
		used = false;
		waitupdate();
	}
	
}
function update() {
	used = true;
http.open("GET", "updatemessages.php?user=<?php echo $_GET['user']; ?>", true);
http.onreadystatechange = update2;
http.send(null);

}

function kirimpesan2(a) {
http3.open("GET", "postmsg.php?user=<?php echo $_GET['user']; ?>&message=" + a, true);
http3.send(null);
}


function kirimpesan() {
if(document.getElementById('message').value == ''||document.getElementById('message').value == '\n') 
{ alert('tulis pesan dulu');
document.getElementById('message').value = ''; document.getElementById('message').disabled = '';
}
else{ 
document.getElementById('messagewindow').innerHTML += '<br />saya : <br />' + document.getElementById('message').value.replace(/\n/g, '<br />').replace(/:grin:/g, 
'<img src="../imgs/smiles/icon_biggrin.gif" width="15" height="15" />').replace(/:confused:/g, 
'<img src="../imgs/smiles/icon_confused.gif" width="15" height="15" />').replace(/:cool:/g, 
'<img src="../imgs/smiles/icon_cool.gif" width="15" height="15" />').replace(/:cry:/g, 
'<img src="../imgs/smiles/icon_cry.gif" width="15" height="15" />').replace(/:eek:/g, 
'<img src="../imgs/smiles/icon_eek.gif" width="15" height="15" />').replace(/:evil:/g, 
'<img src="../imgs/smiles/icon_evil.gif" width="15" height="15" />').replace(/:exclaim:/g, 
'<img src="../imgs/smiles/icon_exclaim.gif" width="15" height="15" />').replace(/:frown:/g, 
'<img src="../imgs/smiles/icon_frown.gif" width="15" height="15" />').replace(/:idea:/g, 
'<img src="../imgs/smiles/icon_idea.gif" width="15" height="15" />').replace(/:lol:/g, 
'<img src="../imgs/smiles/icon_lol.gif" width="15" height="15" />').replace(/:mad:/g, 
'<img src="../imgs/smiles/icon_mad.gif" width="15" height="15" />').replace(/:pray:/g, 
'<img src="../imgs/smiles/eusa_pray.gif" width="19" height="16" />').replace(/:shhh:/g, 
'<img src="../imgs/smiles/eusa_shhh.gif" width="15" height="16" />').replace(/:shifty:/g, 
'<img src="../imgs/smiles/eusa_shifty.gif" width="15" height="15" />').replace(/:mrgreen:/g, 
'<img src="../imgs/smiles/icon_mrgreen.gif" width="15" height="15" />').replace(/:neutral:/g, 
'<img src="../imgs/smiles/icon_neutral.gif" width="15" height="15" />').replace(/:question:/g, 
'<img src="../imgs/smiles/icon_question.gif" width="15" height="15" />').replace(/:razz:/g, 
'<img src="../imgs/smiles/icon_razz.gif" width="15" height="15" />').replace(/:redface:/g, 
'<img src="../imgs/smiles/icon_redface.gif" width="15" height="15" />').replace(/:rolleyes:/g, 
'<img src="../imgs/smiles/icon_rolleyes.gif" width="15" height="15" />').replace(/:sad:/g, 
'<img src="../imgs/smiles/icon_sad.gif" width="15" height="15" />').replace(/:smile:/g, 
'<img src="../imgs/smiles/icon_smile.gif" width="15" height="15" />').replace(/:surprised:/g, 
'<img src="../imgs/smiles/icon_surprised.gif" width="15" height="15" />').replace(/:twisted:/g, 
'<img src="../imgs/smiles/icon_twisted.gif" width="15" height="15" />').replace(/:wink:/g, 
'<img src="../imgs/smiles/icon_wink.gif" width="15" height="15" />').replace(/:sick:/g, 
'<img src="../imgs/smiles/eusa_sick.gif" width="15" height="15" />').replace(/:silenced:/g, 
'<img src="../imgs/smiles/eusa_silenced.gif" width="15" height="15" />').replace(/:snooty:/g, 
'<img src="../imgs/smiles/eusa_snooty.gif" width="16" height="15" />').replace(/:angel:/g, 
'<img src="../imgs/smiles/eusa_angel.gif" width="15" height="15" />').replace(/:clap:/g, 
'<img src="../imgs/smiles/eusa_clap.gif" width="19" height="16" />').replace(/:dance:/g, 
'<img src="../imgs/smiles/eusa_dance.gif" width="27" height="16" />').replace(/:doh:/g, 
'<img src="../imgs/smiles/eusa_doh.gif" width="22" height="16" />').replace(/:drool:/g, 
'<img src="../imgs/smiles/icon_drool.gif" width="15" height="15" />');
document.getElementById("dummy").innerHTML=
 "<embed src=\"mess_out.wav\" hidden=\"true\" autostart=\"true\" loop=\"false\" />";
 
	kirimpesan2(document.getElementById('message').value.replace(/\n/g, '<br />'));
	
	document.getElementById('message').disabled = 'disabled';
	document.getElementById('sendb').disabled = 'disabled';
	setTimeout("document.getElementById('message').value = ''; document.getElementById('message').disabled = '';document.getElementById('sendb').disabled = ''; document.getElementById('message').focus();", 100);
			document.getElementById('messagewindow').scrollTop=document.getElementById('messagewindow').scrollHeight-document.getElementById('messagewindow').clientHeight;
			}
}

update();

function tambahemoticon(em) {
document.getElementById('message').value = document.getElementById('message').value + " " + em;document.getElementById('message').focus();

document.getElementById('ems').style.height = '0px';
document.getElementById('ems').style.borderWidth = '0px';
}

function getar() {
document.getElementById("dummy").innerHTML=
 "<embed src=\"buzz.wav\" hidden=\"true\" autostart=\"true\" loop=\"false\" />";
document.getElementById('messagewindow').innerHTML += '<hr /><b>BUZZ!!</b><br /><hr /><br />';
for(var nc = 0; nc < 10; nc++) {
setTimeout("window  .  moveBy(0, 20);", 100*nc);
setTimeout("window  .  moveBy(20, 0);", (100*nc)+25);
setTimeout("window  .  moveBy(0, -20);", (100*nc)+50);
setTimeout("window  .  moveBy(-20, 0);", (100*nc)+75);
}
}

function kirimgetar() {
document.getElementById('messagewindow').innerHTML += '<hr /><b>BUZZ</b><br /><hr /><br />';
document.getElementById('getarbutton').style.width = '0px';
setTimeout("document.getElementById('getarbutton').style.width = '15px';", 7000);
kirimpesan2(':getar:');
document.getElementById('messagewindow').scrollTop=document.getElementById('messagewindow').scrollHeight-document.getElementById('messagewindow').clientHeight;
}

function bukachat(id, page, width, height) {
window.open(page, id, 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=' + width + ',height=' + height + ',left = 50,top = 50');
}

$(function(){
		var btnUpload=$('#kirim_file');
		new AjaxUpload(btnUpload, {
			action: '../upload-file.php?user=<?php echo $_GET['user']; ?>',
			name: 'uploadfile',
			onSubmit: function(file, ext){
                            
			},
			onComplete: function(file, response){
                            document.getElementById('messagewindow').innerHTML += '<br />saya : <br /> Upload ' +file+'<br />';
			}
		});
		
	});
