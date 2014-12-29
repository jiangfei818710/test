<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.4"></script>
<!-- 团购地图的容器 -->
<div id="container" style="border:solid 1px #ccc;height:auto;margin:0 auto;"></div>
<script type='text/javascript' src='http://api.map.baidu.com/tuan/v1.0/groupPurchase.js'></script>
<script type='text/javascript'>

			//json对象，存储point信息
			 var poiData = [{lng:119.983619, lat:31.835594, 

title:"富都盛贸饭店", tel:"0519-85168888", address:"通江大道398号"}
			];
			//初始化团购控件
			var gp = new BMapGP.GroupPurchase("container",{
			    //启用附近公交/地铁路线功能 
			    enableRouteInfo:true,
			    //启用从这里来/到这里去 公交路线搜索功能 
			    //enableRouteSearchBox: true,
			    //是否启用展开第一个结果 
			    selectFirstResult: true,
			    //地图类型 JS_MAP为js类型地图，STATIC_MAP为静态图, IFRAME_MAP为嵌入IFRAME类型
			    type: JS_MAP,
			    //地图缩放级别，如果多点情况，插件会自动缩放级别，将所有点显示在视野内
			    zoom: 16,
			    //地图大小 
			    mapSize:{width:260 ,height:266},
			    pois:poiData
			});
			//设置商家详情的高度，如果不调用此方法，则为自动延伸状态 
			//gp.setRouteInfoHeight();
			
</script>   