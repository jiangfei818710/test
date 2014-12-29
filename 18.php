<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<style type="text/css">
body, html,#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;}
</style>
<script src="../jquery-1.9.1.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=7543ece92ff5550a6e6b20e8e72b182d"></script>
<script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>
<link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css" />
<title>根据关键字本地搜索</title>
</head>
<body>
<input type="text" name="search"><input type="button" id="search" value="搜索"><br>
<div style="width:1200px;height:600px">
<div id="allmap" style="width:1000px;height:100%;float:left"></div>
<div id="list" style="width:180px;height:100%;float:left;margin-left:20px;overflow:auto;"></div>
<div id="gh" style="width:200px;margin:0;line-height:20px;padding:2px;display:none"></div>
</div>
</body>
</html>
<script type="text/javascript">
/*
// 百度地图API功能

*/
function TczMap(id){
	this.point;
	this.opt;
	this.id = id? id : "allmap";
	this.map = new BMap.Map(this.id);            // 创建Map实例
	this.set_point = function(x,y){
		return new BMap.Point(x, y);
	};

	this.set_map = function(opt){
		
		this.opt = {
			x : (opt.x? opt.x : 0),         //经度
			y : (opt.y? opt.y : 0),         //纬度
			z : (opt.z? opt.z : 18),		   //缩放
		};
	
	    this.point = this.set_point(this.opt.x, this.opt.y);
		
		this.map.centerAndZoom(this.point,this.opt.z);   //中心点
		//this.map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件
	};

	this.set_mesg = function(opt){
		opt = {
		  x : (opt.x? opt.x : null),         //经度
		  y : (opt.y? opt.y : null),         //纬度
		  width : (opt.width? opt.width : 250),     // 信息窗口宽度
		  height: (opt.height? opt.height : 100),     // 信息窗口高度
		  title : (opt.title? opt.title : "") ,     // 信息窗口标题
		  address: (opt.address? opt.address : ""),   // 信息窗口内容
		  offset_x   : (opt.offset_x? opt.offset_x : 0),
		  offset_y   : (opt.offset_y? opt.offset_y : 0)
		}
		
		$("#gh").html('<div style="margin:0;line-height:20px;padding:2px;">'+opt.address +'</div>');
		var h = $("#gh").height();

		var opts = {
		  width : opt.width,     // 信息窗口宽度
		  height: h,     // 信息窗口高度
		  title : "<b>"+opt.title+"</b>" , // 信息窗口标题
		  enableMessage:false,//设置允许信息窗发送短息
		  message:"",
		  offset   : new BMap.Size(opt.offset_x, opt.offset_y)
		}
		
		if(opt.x != null && opt.y != null){
			var p = new BMap.Point(opt.x, opt.y);
		}else{
			var p = this.point;
		}
		
		var infoWindow = new BMap.InfoWindow('<div style="margin:0;line-height:20px;padding:2px;">'+opt.address +'</div>', opts);  // 创建信息窗口对象
		this.map.openInfoWindow(infoWindow,this.point); 

	};

	this.set_over = function(x,y){
			if(x != null && y != null){
				var point = this.set_point(x, y);
			}else{
				var point = this.point;
			}
			var marker1 = new BMap.Marker(point);  // 创建标注
			this.map.addOverlay(marker1);              // 将标注添加到地图中

			return marker1;
	};

	this.over_event = function(data){
		this.set_map({x: data.xy.lng,y: data.xy.lat});
		this.map.clearOverlays();
		var maker = this.set_over();
		var map = this;
		maker.addEventListener("mouseover",function(){
			 map.set_mesg({
					x : data.xy.lng,        
					y : data.xy.lat,
					title : data.name,
					address: data.address,
					offset_x: 0,
					offset_y: -20,
			 });
		   }
		);
	};
}
$(function(){
	$("#search").click(function(){
		var word = $("input[name='search']").val();
		$.get("16.php",{word: word},
			function(msg){
				if(msg.code == 1){
					var data = msg.data;
					var map = new TczMap();
					
					map.over_event(data[0]);

					var l = 0;
					$("#list").html("");
					for(var i in data){
						$("#list").append("<h3><b id='ad_"+i+"' style='cursor:pointer'>"+data[i].name+"</b></h3><br>"+data[i].address+"<br><br>");
						$("#ad_"+i).click({data:data[i]},function(event){
							map.over_event(event.data.data);
						});
					}

					
				}else{
					$("#allmap").html("没有查到相关数据！");
				}
			},"json"
		);
	});
});
</script>

<div class="wj-main"><div class="wj-top"><div class="k1200 pr"><a href="{$mod_1_url}" class="btn" target="_blank"></a></div></div><div class="k1200"><div class="wj-cont">
