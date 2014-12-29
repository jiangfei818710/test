<script src="../jquery-1.9.1.js"></script>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<?php
echo date("Y-m-d", strtotime("2012-10-04") + 86400 * 200);


?>
<br>
<a href="http://localhost/test/2.php">下载</a>

<br>



<select id="t_s">
	<option value="1">s1
	<option value="2" selected="selected">s2
	<option value="3">s3
</select>
<input type="button" value="click" id="click_selected">
<script>
$("#click_selected").click(function(){
//	for(var i in $("#t_s")){
//		document.write(i+"<br>");
//	}
	//alert($("#t_s").get(0).selectedIndex);
	//alert($("#t_s").get(0).selectedIndex);

//	$("#t_s").find("option").each(function(index,dom){
//		alert(dom.defaultSelected);
//	});
	alert($("#t_s").find("option").eq($("#t_s").get(0).selectedIndex).get(0).defaultSelected);
});
</script>
<br>


<canvas id="clock" width="150" height="150">
  
</canvas>
<script>
$(function($) {
	if($("#clock").get(0).getContext){
		var ctx = $("#clock").get(0).getContext("2d");

        ctx.fillStyle = "rgb(200,0,0)";
        ctx.fillRect (10, 10, 55, 50);

        ctx.fillStyle = "rgba(0, 0, 200, 0.5)";
        ctx.fillRect (30, 30, 55, 50);
	}
});
</script>