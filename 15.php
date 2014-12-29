<!--
<head> 
<SCRIPT language="javascript"> 

var sound1="http://127.0.0.1/test/1.mp3" 

var sound2="http://127.0.0.1/test/2.mp3" 

var x=Math.round(Math.random()*1) 

if (x==0) x=sound1 

else if (x==1) x=sound2 



if (navigator.appName=="Microsoft Internet Explorer") 

document.write('<bgsound src='+'"'+x+'"'+' loop="infinite">') 

else 

document.write('<embed src='+'"'+x+'"'+'hidden="true" border="0" width="20" height="20" autostart="true" loop="true">') 


</SCRIPT> 
</head> -->
<object id=videowindow1 width=0 height=0 classid="CLSID:6BF52A52-394A-11D3-B153-00C04F79FAA6">
<param name=URL value="http://127.0.0.1/test/1.m3u">
<param name=AUTOSTART value=1>
</object>

<script type="text/javascript"  src="../jquery-1.9.1.js"></script>
<audio id="audio" src="http://127.0.0.1/test/2.mp3" autoplay="autoplay">
</audio>
<script>

if (navigator.appName=="Microsoft Internet Explorer") {

}else{
	var a = document.getElementById("audio");
	a.addEventListener("ended", function(){
		alert(123);
		this.src = "http://127.0.0.1/test/1.mp3";
		a.play();
	});
}


</script>

