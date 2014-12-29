<?
echo htmlspecialchars('<div class="cp-left">');
echo htmlspecialchars_decode('');

?>

<!--
E:\wamp\www\ecmall\jao/themes/mall/test/zt/fl_jz/index.html
<div class="hj-list">
	<img src="{$top_img}" class="dsb" />
	<ul class="specact_ul_3" num=3>
		<li>
			<div class="zt_maiguang"></div>
			<a href=""><img src="" class="specact_img" /></a>
			<div class="t"><a href="" class="specact_name">迎花博期间签约,赠送草鸡1只</a></div>
			<div class="zoom">
				<div class="jg">￥&lt;b class="specact_price"&gt;138&lt;/b&gt;</div>
				<a href=""><img src="http://www.taocz.com/images/pic/zt/specact_2021/banner_top_img_bg_7593.jpg?1413007019?v=1601" class="btn" /></a>
			</div>
			<del class="specact_tao_price display_tao_price">淘常州价：￥1900</del>
		</li>
	</ul>
</div>

specact_name_desc
&lt;b&gt;  &lt;/s&gt;
&lt;em&gt;     &lt;i&gt;&lt;/i&gt;
&lt;s&gt;


&lt;script&gt;$(function(){$(&quot;.specact_ul_5&quot;).prepend('&lt;li class=&quot;img&quot;&gt;&lt;a href=&quot;{$mod_1_url}&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;{$mod_1_img}&quot; alt=&quot;&quot; /&gt;&lt;/a&gt;&lt;/li&gt;')});&lt;/script&gt;


<div class="img-section">
                    <img src="{$top_img}" alt="" usemap="#items9">
                    <map name="items9">
                        <area shape="rect" target="_blank" coords="1018,12,1143,51" href="{$mod_1_img}" alt="">
                    </map>
                </div>
<ul class="goods specact_ul_7">
	
	<li><div class="zt_maiguang"></div>
		<a href="" target="_blank">
			<img src="" alt="" width="232" height="232" class="specact_img">
		</a>
		<div class="details">
			<p class="name"><a href="" target="_blank" class="specact_name">这是商品名商品名商品名商品名商品名商品名商品名商品名商品名商品名</a></p>
			<p class="price"><del class="specact_tao_price display_tao_price">原价：￥100</del></p>
			<p class="promotion"><span class="tag">促销价</span><span class="specact_price">￥99</span></p>
			<a href="" class="btn-buy" target="_blank" role="button">立即抢购</a>
		</div>
	</li>
</ul>



<script>
	$(function(){
		$(".tagbtn").mouseover(function(){
			$(".ulHide").hide();
			var c = $(this).attr("b");
			$("."+c).show();
			$(".tagbtn").removeClass("curr");
			$(this).addClass("curr");
		});
	});
</script>

<script>$(function(){$(".specact_ul_2").find("li").each(function(index, dom){if(data2[index].stock_promotion < 1){$(dom).prepend("<div class='zt_maiguang'></div>");}});});</script>


<script>$(function(){$(".specact_ul_8").find("li").each(function(index, dom){if(data8[index].stock_promotion < 1){$(dom).prepend("<div class='zt_maiguang'></div>");}});});</script>

<script>$(function(){$(".specact_ul_10").find("li").each(function(index, dom){if(data10[index].stock_promotion < 1){$(dom).prepend("<div class='zt_maiguang'></div>");}});});</script>

<script>$(function(){$(".specact_ul_11").find("li").each(function(index, dom){if(data11[index].stock_promotion < 1){$(dom).prepend("<div class='zt_maiguang'></div>");}});});</script>


<script>$(function(){$(".specact_img").each(function(){$(this).attr("src",$(this).attr("src")+".210x210.jpg")})});</script>



<script>$(function(){$(".specact_img").each(function(){$(this).attr("src",$(this).attr("src")+".212x284.jpg")})});</script>




<script>
function get_cp(){
			$.get("index.php?app=specact&act=lzsr_lq", function(msg){
				if(msg.code == 1){
					alert(msg.msg);
				}else if (msg.code == -1) {
                    alert("请先登入！");
                    
                } else if (msg.code == -17) {
					
				} else if (msg.code == -5) {
					alert("老板让我跟您说：加勒个油~");
				} else if (msg.code == -11) {
					alert("本时段领取次数已用完");
				}else {
					alert(msg.msg);
                }
			},"json");
}
</script>

<script>
    $(function() {
        a();
    });

	function a(){
		$(".itemsBtn").click(function() {
            var sn = $("#sn").val();
            var btn = $(this);
			$(".itemsBtn").unbind();
            $(".itemsBtn").each(function(index, dom) {
				
                $(dom).find("img").attr("src", img3[index])
            });
            if (sn.length >= 15) {
                $.get("index.php?app=specact&act=nhcj", {
                    sn: sn
                },
                function(mesg) {
                    if (mesg.code == 1) {
                        var m = mesg.m;
                        btn.find("img").attr("src", img5[m]);
                        btn.flip({
                            direction: 'rl',
                            onEnd: function() {a();
					return;}
                        })
                    } else if (mesg.code == -1) {
                        alert("请先登入！");
                       a();
					return;
                    } else if (mesg.code == -14) {
                        alert("尚未开始！");
                        a();
					return;
                    } else if (mesg.code == -22) {
                        alert("每人每月限领五次！");
                      a();
					return;
                    } else if (mesg.code == -18) {
                        alert("本月券已抽完！");
                       a();
					return;
                    } else if (mesg.code == -13) {
                        alert("订单未满足抽奖条件！");
                       a();
					return;
                    } else if (mesg.code == -11) {
                        alert("订单已经抽过奖！");
                       a();
					return;
                    } else if (mesg.code == -9) {
                        alert("仅限订单用户本人抽奖！");
                       a();
					return;
                    } else {
                        alert("操作失败！");
                        a();
					return;
                    }
					
                },
                "json")
            }
        })
	} 
</script>

<script>
$(function(){
	
	$.get("index.php?app=specact&act=agri_t",function(msg) {
				
	},"json");
	
});
</script>

<div style="position: absolute;right: 15px;top: 11px;">图片</div>
<script>
$(function(){
	var arr_4z = new Array(35667,0);
	for(var i in arr_4z){
		$("li[goods_id='"+arr_4z[i]+"']").prepend("<img width='80px' class='bzt' src='"+img3[0]+"'>");
	}
	var arr_3z = new Array(35670,0);
	for(var i in arr_3z){
		$("li[goods_id='"+arr_3z[i]+"']").prepend("<img width='80px' class='bzt' src='"+img3[1]+"'>");
	}
	var arr_2z = new Array(414648,0);
	for(var i in arr_2z){
		$("li[goods_id='"+arr_2z[i]+"']").prepend("<img width='80px' class='bzt' src='"+img3[2]+"'>");
	}

});
</script>

<script>
$(function(){
	var arr_4z = new Array(2969,481480,15569,7756,13926,101347,470991,419501,98682,482360);
	for(var i in arr_4z){
		$("li[goods_id='"+arr_4z[i]+"']").prepend('<span class="tag"><img src="'+img13[i]+'" alt="" width="80" height="80"/></span>');
	}
});
</script>


<script>
    var time = 0;
    var client_s_time = 0;
    var a;
    $(function() {
        $.get("index.php?app=specact&act=get_time",
        function(msg) {
			
            time = 1414116000 - msg.time;
            client_s_time = Math.round(new Date().getTime() / 1000);
            a = setInterval("djs()", 500)
        },
        "json")
    });
    function djs() {
        if (time <= 0) {
            $("#h1").html(0);
            $("#h2").html(0);
            $("#m1").html(0);
            $("#m2").html(0);
            $("#s1").html(0);
            $("#s2").html(0);
			clearInterval(a);
        }
        var client_n_time = Math.round(new Date().getTime() / 1000);
        var t = time - (client_n_time - client_s_time);
        var h = Math.floor(t / 3600);
        var h1 = Math.floor(h / 10);
        var h2 = h % 10;
        var m = Math.floor((t % 3600) / 60);
        var m1 = Math.floor(m / 10);
        var m2 = m % 10;
        var s = t % 60;
        var s1 = Math.floor(s / 10);
        var s2 = s % 10;
        $("#h1").html(h1);
        $("#h2").html(h2);
        $("#m1").html(m1);
        $("#m2").html(m2);
        $("#s1").html(s1);
        $("#s2").html(s2)
    }
</script>



<script>
    function get_time() {
        $.get("index.php?app=specact&act=get_remainder",
        function(msg) {
            if (msg.time != "start") {
                $("#h1").html(msg.time.h1);
                $("#h2").html(msg.time.h2);
                $("#m1").html(msg.time.m1);
                $("#m2").html(msg.time.m2);
                $("#s1").html(msg.time.s1);
                $("#s2").html(msg.time.s2)
            }
            $(".n").html(msg.num)
        },
        "json")
    }
    $(function() {
        setInterval('get_time()', 500);
        $("#sub_sn").click(function() {
            var sn = $("input[name='sn']").val();
            if (sn) {
                $.get("index.php?app=specact&act=nanjing", {
                    sn: sn
                },
                function(msg) {
                    if (msg.code == 1) {
                        alert("领取成功，请至会员中心查看！")
                    } else if (msg.code == -1) {
                        alert("请先登入！");
                        return
                    } else if (msg.code == -6) {
                        alert("券已领完！");
                        return
                    } else if (msg.code == -11) {
                        alert("订单已领取过！");
                        return
                    } else if (msg.code == -12) {
                        alert("今天已领取过！");
                        return
                    } else if (msg.code == -14) {
                        alert("订单未满足领取条件！");
                        return
                    } else if (msg.code == -9) {
                        alert("仅限本人领取！");
                        return
                    } else if (msg.code == -15) {
                        alert("活动尚未开始！");
                        return
                    } else {
                        alert("领取失败！");
                        return
                    }
                },
                "json")
            }
        })
    });
</script>


<script>
    var time = 0;
    var client_s_time = 0;
    var a;
    var getn;
    $(function() {
        $.get("index.php?app=specact&act=get_time",
        function(msg) {
            if (msg.time < 1400083201) {
				$(".btn-state").find("img").attr("src", img2[1]);
				$(".btn-state").unbind();
			}
            var date = new Date(msg.time * 1000);
            if (date.getHours() >= 17) {
				clearInterval(getn);
				getn = setInterval("get_num()", 1000);
                return;
            } else {
				$(".btn-state").find("img").attr("src", img2[1]);
				$(".btn-state").unbind();
                $(".remain").html(50);
				var y = date.getFullYear();
				var m = date.getMonth() + 1;
				m = m > 9 ? (m + "") : ("0" + m);
				var d = date.getDate();
				d = d > 9 ? (d + "") : ("0" + d);
				var riqi = y + "/" + m + "/" + d + " 17:00:00";
				var e_time = parseInt(Date.parse(riqi)) / 1000;
				time = e_time - msg.time;
				client_s_time = Math.round(new Date().getTime() / 1000);
				a = setInterval("djs()", 500);
            }
            
        },
        "json");
    });
    function djs() {
        var client_n_time = Math.round(new Date().getTime() / 1000);
        var t = time - (client_n_time - client_s_time);
        if (t < 0) {
            $("#hours").html("00");
            $("#minutes").html("00");
            $("#m1").html("00");
            clearInterval(getn);
			getn = setInterval("get_num()", 1000);
            clearInterval(a);
            return;
        }
        var h = Math.floor(t / 3600);
        h = h > 9 ? h: ("0" + h);
        var m = Math.floor((t % 3600) / 60);
        m = m > 9 ? m: ("0" + m);
        var s = t % 60;
        s = s > 9 ? s: ("0" + s);
        $("#hours").html(h);
        $("#minutes").html(m);
        $("#seconds").html(s);
    }
    function get_num() {
        $.get("index.php?app=specact&act=cebxx_remain",
        function(msg) {
            if (msg.num > 0) {
                $(".remain").html(msg.num);
				$(".btn-state").find("img").attr("src", img2[2]);
				$(".btn-state").unbind();
				$(".btn-state").click(function(){
					qiang();
				});
            } else {
                $(".remain").html(0);
                clearInterval(getn);
				$(".btn-state").find("img").attr("src", img2[0]);
				$(".btn-state").unbind();
            }
        },
        "json");
    }
	function qiang(){
		var sn = $(".order-number").val();
		 $.get("index.php?app=specact&act=cebxx",{sn: sn},function(msg) {
				if(mesg.code == 1){
					alert("领取成功，请至会员中心查看！");
				}else if (mesg.code == -1) {
					alert("请先登入！");
					return;
				}else if (mesg.code == -14) {
					alert("尚未开始！");
					return
				}else if (mesg.code == -18) {
					alert("今天的券已抢完！下次请赶早！！");
					return;
				}else if (mesg.code == -19) {
					alert("每人每天限领1份！");
					return;
				}else if (mesg.code == -13) {
					alert("订单未满足抽奖条件！");
					return;
				}else if (mesg.code == -11) {
					alert("订单已经抽过奖！");
					return;
				}else if (mesg.code == -9) {
					alert("仅先订单用户本人抽奖！");
					return;
				}else {
					alert("操作失败！");
					return;
				}
		 });
	}
</script>


<script>
    var time = 0;
    var client_s_time = 0;
    var a;
	var id = 0;
    $(function() {
        a();
    });
	function a(){
		$.get("index.php?app=specact&act=get_time",
        function(msg) {
            var date = new Date(msg.time * 1000);
				var y = date.getFullYear();
				var m = date.getMonth() + 1;
				m = m > 9 ? (m + "") : ("0" + m);
				var d = date.getDate();
				d = d > 9 ? (d + "") : ("0" + d);
				
				if (date.getHours() < 10) {
					var riqi = y + "/" + m + "/" + d + " 10:00:00";
					id = 8;
				}else if (date.getHours() < 15) {
					var riqi = y + "/" + m + "/" + d + " 15:00:00";
					change_btn(n_class, data8);
				}else if (date.getHours() < 21) {
					var riqi = y + "/" + m + "/" + d + " 21:00:00";
					change_btn("specact_ul_8", data8);
					change_btn("specact_ul_9", data9);
				}else{
					change_btn("specact_ul_8", data8);
					change_btn("specact_ul_9", data9);	
					change_btn("specact_ul_10", data10);	
					id = 0;
					$(".hour").html("00");
					$(".minutes").html("00");
					$(".seconds").html("00");
					return;
				}

			
				var e_time = parseInt(Date.parse(riqi)) / 1000;
				time = e_time - msg.time;
				client_s_time = Math.round(new Date().getTime() / 1000);
				a = setInterval("djs()", 500);
            
            
        },
        "json");
	}

	function change_btn(n_class, data){
		$("."+n_class).find(".ljgm").find("img").attr("src", "http://pic2.taocz.cn/zt/specact_1714/banner_top_img_bg_6358.jpg?1407462103?v=6853");
		$("."+n_class).find("li").each(function(index, dom){if(data[index].stock_promotion < 1){$(dom).prepend("<div class='zt_maiguang'></div>");}});
	}

    function djs() {
        var client_n_time = Math.round(new Date().getTime() / 1000);
        var t = time - (client_n_time - client_s_time);
        if (t < 0) {
            $("#hours").html("00");
            $("#minutes").html("00");
            $("#m1").html("00");
            clearInterval(getn);
			getn = setInterval("get_num()", 1000);
            clearInterval(a);
			a();
            return;
        }
        var h = Math.floor(t / 3600);
        h = h > 9 ? h: ("0" + h);
        var m = Math.floor((t % 3600) / 60);
        m = m > 9 ? m: ("0" + m);
        var s = t % 60;
        s = s > 9 ? s: ("0" + s);
        $(".hour").html(h);
        $(".minutes").html(m);
        $(".seconds").html(s);
    }
</script>



<script>
    $(function() {
        $.get("index.php?app=specact&act=get_time",
        function(msg) {
            var date = new Date(msg.time * 1000);
				var y = date.getFullYear();
				var m = date.getMonth() + 1;
				m = m > 9 ? (m + "") : ("0" + m);
				var d = date.getDate();
				d = d > 9 ? (d + "") : ("0" + d);
				
				if (date.getHours() < 9 || date.getHours() >= 14) {
					$(".specact_ul_2").find("li").eq(0).find(".tobuy").find("img").attr("src",img2[0]);
					if(data2[1].stock_promotion < 1){
						$(".specact_ul_2").find("li").eq(1).find(".tobuy").find("img").attr("src",img2[0]);
					}else{
						$(".specact_ul_2").find("li").eq(1).find(".tobuy").find("img").attr("src",img2[2]);
					}
					
				}else{
					$(".specact_ul_2").find("li").eq(1).find(".tobuy").find("img").attr("src",img2[0]);
					if(data2[0].stock_promotion < 1){
						$(".specact_ul_2").find("li").eq(0).find(".tobuy").find("img").attr("src",img2[0]);
					}else{
						$(".specact_ul_2").find("li").eq(0).find(".tobuy").find("img").attr("src",img2[2]);
					}
					
				}
        },
        "json");
    });
</script>



<script>
    $(function() {
	alert(123);
       
    });
	
</script>


<script>
$(function(){
	$("#qiandao_whb").live('click',function(){
			var _that = $(this);
			var _state = _that.attr("class");
			if(_state == 'qiandao_b'){
				alert("今天已签到");
				return false;
			}
			ajax_check_punch_today();
			_that.attr('class','qiandao_b');
			//return false;
			var url = "index.php?app=member.member_punch&act=ajax_punch";
			$.ajax({
				url : url,
				type:'post',
				dataType:'json',
				success:function(html){
					if(html.code = '100'){
						_that.attr('class','qiandao_b');
					}
					alert("签到成功");
				},
				error:function(){
					alert("签到失败");
				}
			});
			return false;
});

function ajax_check_punch_today(){
		var url = "index.php?app=member.member_punch&act=ajax_check_punch_today";
		$.ajax({
			url:url,
			type:'post',
			dataType:'html',
			success:function(html){
				if(html == '1'){
					$("#qiandao_whb").attr('class','qiandao_b');
					alert("今天已签到");
				}
			}
		});
}
});

</script>




$("#qiandao_whb").live('click',function(){
			var _that = $(this);
			var _state = _that.attr("class");
			ajax_check_punch_today();
			if(_state == 'qiandao_b'){
				
				return false;
			}
			
			_that.attr('class','qiandao_b');
			//return false;
			var url = "index.php?app=member.member_punch&act=ajax_punch";
			$.ajax({
				url : url,
				type:'post',
				dataType:'json',
				success:function(html){
					if(html.code = '100'){
						_that.attr('class','qiandao_b');
					}
					alert("签到成功");
				},
				error:function(){
					alert("签到失败");
				}
			});
			return false;
});

function ajax_check_punch_today(){
		var url = "index.php?app=member.member_punch&act=ajax_check_punch_today";
		$.ajax({
			url:url,
			type:'post',
			dataType:'html',
			success:function(html){
				if(html == '1'){
					$("#qiandao_whb").attr('class','qiandao_b');
					alert("今天已签到");
				}
			}
		});
}


<script>
function qiang(){
		var tel = $("#tel").val();
		 $.get("index.php?app=specact&act=choujiang",{tel: tel},function(mesg) {
				if(mesg.code == 1){
					alert("恭喜获得抵用券一张，请至会员中心查看！");
				}else if (mesg.code == -1) {
					alert("请先登入！");
					return;
				}else if (mesg.code == -99) {
					alert("谢谢参与！下次继续努力！！");
					return;
				}else if (mesg.code == -11) {
					alert("已中过奖！");
					return;
				}else if (mesg.code == -9) {
					alert("仅限订单用户本人抽奖！");
					return;
				}else {
					alert("谢谢参与！下次继续努力！！");
					return;
				}
		 },"json");
	}
</script>

<script>
$(function(){
	$(".choujiang").click(function(){
		$.get("index.php?app=specact&act=lrzf",function(msg){
			if(msg.code == 1){
				$(".tanchu").hide();
				$("#"+msg.msg).show();
			}else if (msg.code == -1) {
				alert("请先登入！");
				return;
			}else if (msg.code == -14) {
				alert("尚未开始！");
				return
			}else if (msg.code == -18) {
				$(".tanchu").hide();
				$("#finish").show();
				return;
			}else if (msg.code == -16) {
				$(".tanchu").hide();
				$("#end").show();
				return;
			}else if (msg.code == -7) {
				alert("操作失败，重新领取！");
				return;
			}

		},"json");
	});
});
</script>

<script>
$(function(){
	$.get("index.php?app=specact&act=mdlmd_list", function(mesg){
		$("#demo").html(mesg);
		 var lb_1_tab = $("#demo");
            var lb_1_tab1 = $("#demo1");
            var lb_1_tab2 = $("#demo2");
           
            var lb_1_t = setInterval(function() {
                Marquee(lb_1_tab, lb_1_tab1, lb_1_tab2)
            },
            20);
           
	});
});
function Marquee(tab, tab1, tab2) {
        if ((tab2.height() - tab.scrollTop()) <= 0) {
            tab.scrollTop(tab.scrollTop - tab1.height())
        } else {
            tab.scrollTop(tab.scrollTop() + 1)
        }
    }
</script>




#indemo {
float: left;
height 10000%;
}
#demo1 {
float: left;
}
#demo2 {
float: left;
}

<script>
var Speed = 1000;
var Time = false;
var index = 1;
var cycle = 1;
var last_cycle = 0;
var stop_index = 0;
var stop_cycle = 3;
var m = 0;
$(function(){
	start();
});

function start(){
	$(".itemsBtn").click(function(){
		var sn = $("#sn").val();
		if(sn.length >= 15){
			$.get("index.php?app=specact&act=nhcj", {sn: sn}, function(mesg){
				if(mesg.code == 1){
					var m = mesg.m;
					$(".itemsBtn").each(function(index,dom){
						$(dom).find("img").attr("src", img3[index]);
					});
					$(this).find("img").attr("src", img5[m]);
				}else if (mesg.code == -1) {
					alert("请先登入！");
					return;
				}else if (mesg.code == -14) {
					alert("尚未开始！");
					return
				}else if (mesg.code == -18) {
					alert("本月券已抽完！");
					return;
				}else if (mesg.code == -13) {
					alert("订单未满足抽奖条件！");
					return;
				}else if (mesg.code == -11) {
					alert("订单已经抽过奖！");
					return;
				}else if (mesg.code == -9) {
					alert("仅先订单用户本人抽奖！");
					return;
				}else {
					alert("操作失败！");
					return;
				}
				
			},"json");
		}
	});
}



<script>
    $(function() {
        var mask = $(".price-mask");
        var dialog = $(".prize-panel");
        var viewportWidth = $(window).width();
        var viewportHeight = $(window).height();
        var dialogWidth = dialog.width();
        var dialogHeight = dialog.height();
        var offsetX = (viewportWidth - dialogWidth) / 2;
        var offsetY = (viewportHeight - dialogHeight) / 2;
        $(".lottery-btn").click(function() {
            var sn = $("#sn").val();
            if (sn.length >= 15) {
                $.get("index.php?app=specact&act=lsr", {
                    sn: sn
                },
                function(mesg) {
                    if (mesg.code == 1) {
                        var m = mesg.m;
                        dialog.addClass("prize-bg" + m);
                        mask.show();
                        dialog.css({
                            top: offsetY,
                            left: offsetX
                        }).show()
                    } else if (mesg.code == -1) {
                        alert("请先登入！");
                        return
                    } else if (mesg.code == -14) {
                        alert("尚未开始！");
                        return
                    } else if (mesg.code == -18) {
                        alert("本月券已抽完！");
                        return
                    } else if (mesg.code == -13) {
                        alert("订单未满足抽奖条件！");
                        return
                    } else if (mesg.code == -11) {
                        alert("订单已经抽过奖！");
                        return
                    } else if (mesg.code == -9) {
                        alert("仅限订单用户本人抽奖！");
                        return
                    } else if (mesg.code == -17) {
                        
                        return
                    } else {
                        alert("操作失败！");
                        return
                    }
                },
                "json")
            }
        });
        $(".close-btn").click(function() {
            mask.hide();
            dialog.hide()
        })
    });
</script>


<script>
$(function(){
	$(".itemsBtn").click(function(){
		var sn = $("#sn").val();
		var btn = $(this);
		$(".itemsBtn").each(function(index,dom){
			$(dom).find("img").attr("src", img3[index]);
		});
		if(sn.length >= 15){
			$.get("index.php?app=specact&act=nhcj", {sn: sn}, function(mesg){
				if(mesg.code == 1){
					var m = mesg.m;
					btn.find("img").attr("src", img5[m]);
					btn.flip({
                        direction:'rl', //翻动的方向
                        // content:'', //翻转后显示的内容即奖品
                        onEnd: function(){ //翻转结束
                           
                        }
                    });
				}else if (mesg.code == -1) {
					alert("请先登入！");
					return;
				}else if (mesg.code == -14) {
					alert("尚未开始！");
					return
				}else if (mesg.code == -18) {
					alert("本月券已抽完！");
					return;
				}else if (mesg.code == -13) {
					alert("订单未满足抽奖条件！");
					return;
				}else if (mesg.code == -11) {
					alert("订单已经抽过奖！");
					return;
				}else if (mesg.code == -9) {
					alert("仅限订单用户本人抽奖！");
					return;
				}else {
					alert("操作失败！");
					return;
				}
				
			},"json");
		}
	});
});
</script>


<script>
    var speed = 10;
    $(function() {
       
            var lb_1_tab = $(".lb_1").find("#demo");
            var lb_1_tab1 = $(".lb_1").find("#demo1");
            var lb_1_tab2 = $(".lb_1").find("#demo2");
            lb_1_tab1.html(lb_1_html);
            lb_1_tab2.html(lb_1_html);
            var lb_1_t = setInterval(function() {
                Marquee(lb_1_tab, lb_1_tab1, lb_1_tab2)
            },
            speed);
            lb_1_tab.mouseover(function() {
                clearInterval(lb_1_t)
            });
            lb_1_tab.mouseout(function() {
                lb_1_t = setInterval(function() {
                    Marquee(lb_1_tab, lb_1_tab1, lb_1_tab2)
                },
                speed)
            })
      
       
    });
    function Marquee(tab, tab1, tab2) {
        if ((tab2.height() - tab.scrollTop()) <= 0) {
            tab.scrollTop(tab.scrollTop - tab1.height())
        } else {
            tab.scrollTop(tab.scrollTop() + 1)
        }
    }
</script>





<script>
$(function(){
	$(".yhq_lq").click(function(){
		var id = $(this).attr("cid");
		$.get("index.php?app=specact&act=lrzf_dp&id="+id,function(msg){
			if(msg.code == 1){
				alert("领取成功，请至会员中心查看！");
			}else if(msg.code == -1){
				alert("请先登入！");
			}else if(msg.code == -6){
				alert("券已领完！");
			}else{
				alert("领取失败！");
			}
		},"json");
	});
});
</script>





<script>
function get_cp(i){
	$.get("index.php?app=specact&act=sxzmz", {i:i}, function(msg) {
		if (msg.code == 1) {
			alert("领取成功，请至会员中心查收！");
			return
		} else if (msg.code == -1) {
			alert("请先登录！");
			return
		} else if (msg.code == -3) {
		    alert("每种券每人限领1份！");
		}else if (msg.code == -14) {
			alert("尚未开始！");
			return
		} else if (msg.code == -17) {
			alert("按的太快了！");
			return
		} else if (msg.code == -6) {
		   alert("券已领完！");
			return
		} else if (msg.code == -7) {
			alert("操作失败，重新领取！");
			return
		}
	},
	"json");
        
 }
</script>





<script>
$(function(){
	$(".to-buy").click(function(){
		addToCart_direct('849739',1,1);
		return false;
	});
});
</script>

   
<script>
$(function(){
	$("li").each(function(){
		$(this).find(".specact_spec_id").click(function(){
			var spec_id = $(this).attr('spec_id');
			addToCart_direct(spec_id, 1, 3);
			return false;
		});
	});
});
</script>

<script>
function get_cp(id){
	$.get("index.php?app=specact&act=zsjf",{id:id}, function(msg) {
		 if (msg.code == -1) {
			alert("请先登入！");
		} else if (msg.code == -17) {
			alert("按的太快了！");
		} else if (msg.code == -14) {
			alert("尚未开始！");
		} else if (msg.code == -6 || msg.code == -7) {
		   alert("券已领完！");
		} else if (msg.code == -2) {
			alert("抱歉，您的积分余额不足。购物可以累计积分，每天在会员中心签到也可以攒积分哦！");
		} else if (msg.code == 1) {
			alert("兑换成功，请至 会员中心-我的优惠券 中查收！");
		} else {
			alert("兑换失败！请联系客服。客服热线：400-678-0519");
		}
		return;
	},
	"json");
        
 }
</script>

<script>
    $(function() {
        $("#jifen_h2").find("area").click(function() {
            var str_array = new Array();
            str_array[5] = "满50减5优惠券？";
            str_array[10] = "满88减10优惠券？";
            str_array[15] = "满128减15优惠券？";
            str_array[20] = "满168减20优惠券？";
            var quan_v = parseInt($(this).attr('quan_v'));
            if (!confirm("确定要用" + (quan_v * 100) + "积分兑换" + str_array[quan_v])) {
                return
            }
            $.post("index.php?app=specact&act=jf_coupon", {
                quan_v: quan_v
            },
            function(mesg) {
                if (mesg.code == -1) {
                    alert("请先登入！")
                } else if (mesg.code == -8) {
                    alert("抱歉，您还不是VIP会员，无法兑换优惠券！")
                } else if (mesg.code == -2) {
                    alert("抱歉，您的积分余额不足。购物可以累计积分，每天在会员中心签到也可以攒积分哦！")
                } else if (mesg.code == 1) {
                    alert("兑换成功，请至 会员中心-我的优惠券 中查收！优惠券有效期30天，过期不退还积分，请尽快使用！")
                } else {
                    alert("兑换失败！请联系客服。客服热线：400-678-0519")
                }
                return
            },
            "json")
        })
    });
</script>

<script>
function get_cp(){
	$.get("index.php?app=specact&act=lkxsgq",
        function(msg) {
            if (msg.code == 1) {
                alert("领取成功，请至会员中心查收！")
            } else if (msg.code == -1) {
                alert("请先登录！")
            } else if (msg.code == -3) {
                alert("每人限领1份！")
            } else if (msg.code == -17) {
                alert("按的太快了！")
            } else if (msg.code == -6) {
                alert("券已领完！")
            } else if (msg.code == -7) {
                alert("操作失败，重新领取！")
            }
            return false
        },
        "json");

}
</script>

<script>
$(function() {
        $.get("index.php?app=specact&act=get_time",
        function(msg) {
            
            var date = new Date(msg.time * 1000);
            if (date.getHours() >= 21) {
				$(".ba").find("a").removeClass("curr");
				$(".ba").find("a:eq(2)").addClass("curr");
				$(".specact_ul_8").hide();
				$(".specact_ul_9").hide();
				$(".specact_ul_10").show();
            } 
			if (date.getHours() >= 15) {
				$(".ba").find("a").removeClass("curr");
				$(".ba").find("a:eq(1)").addClass("curr");
				$(".specact_ul_8").hide();
				$(".specact_ul_9").show();
				$(".specact_ul_10").hide();
            } 
        },
        "json");
});

function change_goods(n, c){
	$(".ba").find("a").removeClass("curr");
	$(".ba").find("a:eq("+n+")").addClass("curr");
	$(".specact_ul_8").hide();
	$(".specact_ul_9").hide();
	$(".specact_ul_10").hide();
	$("."+c).show();
}
</script>

<script>
   function choujiang(){
	var sn = $("#sn").val();
	if(sn.length > 0){
		$.get("index.php?app=specact&act=yyj",{sn: sn},function(msg){
			if(msg.code == 1){
				alert(msg.msg);
			}else if (msg.code == -1) {
				alert("请先登入！");
			}
			return false
		},"json");
	}
}

</script>

<script>
    $(function() {
        $.get("index.php?app=specact&act=get_time",
        function(msg) {
            var date = new Date(msg.time * 1000);
            if (date.getHours() >= 21) {
                $(".ba").find("a").removeClass("curr");
                $(".ba").find("a:eq(2)").addClass("curr");
                
            }
            if (date.getHours() >= 15) {
                $(".ba").find("a").removeClass("curr");
                $(".ba").find("a:eq(1)").addClass("curr");
               
            }
        },
        "json")
    });
    
</script>

<script>
function sub_cont(){
	var cont = $(".zhufu_con").val();
	if(cont.length < 2){
		return;
	}
	$.post("index.php?app=specact&act=lzsr_zf", {cont: cont}, function(msg){
		if(msg == 1){
			alert("提交成功！");
			$(".zhufu_con").val("");
		}else if(msg == -17){
			alert("每次提交间隔不得少于1分钟！");
		}
	})
}
</script>

<script>
function sub_cont(){
	
	$.get("index.php?app=specact&act=lzsr_zf_list", function(msg){
		$("#id="demo"").html(msg);
	})
}
</script>

<script>
    $(function() {
        $.get("index.php?app=specact&act=lzsr_zf_list",
        function(mesg) {
            $("#demo").html(mesg);
            var lb_1_tab = $("#demo");
            var lb_1_tab1 = $("#demo1");
            var lb_1_tab2 = $("#demo2");
            var lb_1_t = setInterval(function() {
                Marquee(lb_1_tab, lb_1_tab1, lb_1_tab2)
            },
            30)
        })
    });
    function Marquee(tab, tab1, tab2) {
        if ((tab2.height() - tab.scrollTop()) <= 0) {
            tab.scrollTop(tab.scrollTop - tab1.height())
        } else {
            tab.scrollTop(tab.scrollTop() + 1)
        }
    }
</script>


<script>
    var time = 0;
    var client_s_time = 0;
	var time1 = 0;
    var client_s_time1 = 0;
    var a;
	var b;
	var id = 0;
    $(function() {
        daojishi();
    });
	function daojishi(){
		$.get("index.php?app=specact&act=get_time",
        function(msg) {
            var date = new Date(msg.time * 1000);
				var y = date.getFullYear();
				var m = date.getMonth() + 1;
				m = m > 9 ? (m + "") : ("0" + m);
				var d = date.getDate();
				d = d > 9 ? (d + "") : ("0" + d);
				

				var e_time_1 = parseInt(Date.parse(y + "/" + m + "/" + d + " 10:00:00")) / 1000;
				var e_time_2 = parseInt(Date.parse(y + "/" + m + "/" + d + " 11:00:00")) / 1000;
				var e_time_3 = parseInt(Date.parse(y + "/" + m + "/" + d + " 12:00:00")) / 1000;
				var e_time_4 = parseInt(Date.parse(y + "/" + m + "/" + d + " 13:00:00")) / 1000;
				var e_time_5 = parseInt(Date.parse(y + "/" + m + "/" + d + " 14:00:00")) / 1000;
				var e_time_6 = parseInt(Date.parse(y + "/" + m + "/" + d + " 15:00:00")) / 1000;
				var e_time_7 = parseInt(Date.parse(y + "/" + m + "/" + d + " 16:00:00")) / 1000;
				var e_time_8 = parseInt(Date.parse(y + "/" + m + "/" + d + " 17:00:00")) / 1000;
				var e_time_9 = parseInt(Date.parse(y + "/" + m + "/" + d + " 18:00:00")) / 1000;
				var e_time_10 = parseInt(Date.parse(y + "/" + m + "/" + d + " 19:00:00")) / 1000;
				var e_time ;
				var e_time_t ;

				if(msg.time < e_time_1){
					e_time = e_time_1;
				}else if(msg.time < e_time_2){
					e_time = e_time_2;
				}else if(msg.time < e_time_3){
					e_time = e_time_3;
				}else if(msg.time < e_time_4){
					e_time = e_time_4;
				}else if(msg.time < e_time_5){
					e_time = e_time_5;
				}else if(msg.time < e_time_6){
					e_time = e_time_6;
				}else if(msg.time < e_time_7){
					e_time = e_time_7;
				}else if(msg.time < e_time_8){
					e_time = e_time_8;
				}else if(msg.time < e_time_9){
					e_time = e_time_9;
				}else if(msg.time < e_time_10){
					e_time = e_time_10;
				}else{
					$("#h1").html("0");
					$("#h2").html("0");
					$("#m1").html("0");
					$("#m2").html("0");
					$("#s1").html("0");
					$("#s2").html("0");
					var t1 = 1;
				}

				if(msg.time < e_time_1){
					
					e_time_t = e_time_1;
				}else if(msg.time < e_time_6){
					$(".tab").find("a").removeClass("ov");
					$(".tab").find("a:eq(0)").addClass("ov");
					e_time_t = e_time_6;
				}else if(msg.time < e_time_7){
					$(".tab").find("a").removeClass("ov");
					$(".tab").find("a:eq(1)").addClass("ov");
					e_time_t = e_time_7;
				}else{
					$(".tab").find("a").removeClass("ov");
					$(".tab").find("a:eq(2)").addClass("ov");
					$("#hh1").html("0");
					$("#hh2").html("0");
					$("#mm1").html("0");
					$("#mm2").html("0");
					$("#ss1").html("0");
					$("#ss2").html("0");
					var t2 = 1;
				}

				
				if(t1 != 1){
					time = e_time - msg.time;
					client_s_time = Math.round(new Date().getTime() / 1000);
					a = setInterval("djs()", 500);
				}else{
					return;
				}
				if(t2 != 1){
					time1 = e_time_t - msg.time;
					client_s_time1 = Math.round(new Date().getTime() / 1000);
					b = setInterval("djs2()", 500);
				}
        },
        "json");
	}
	function djs2() {
        var client_n_time = Math.round(new Date().getTime() / 1000);
        var t = time1 - (client_n_time - client_s_time1);
        if (t < 0) {
           $("#hh1").html("0");
			$("#hh2").html("0");
			$("#mm1").html("0");
			$("#mm2").html("0");
			$("#ss1").html("0");
			$("#ss2").html("0");
					
            clearInterval(b);
            return;
        }
		var client_n_time = Math.round(new Date().getTime() / 1000);
        var t = time1 - (client_n_time - client_s_time1);
        var h = Math.floor(t / 3600);
        var h1 = Math.floor(h / 10);
        var h2 = h % 10;
        var m = Math.floor((t % 3600) / 60);
        var m1 = Math.floor(m / 10);
        var m2 = m % 10;
        var s = t % 60;
        var s1 = Math.floor(s / 10);
        var s2 = s % 10;
        $("#hh1").html(h1);
        $("#hh2").html(h2);
        $("#mm1").html(m1);
        $("#mm2").html(m2);
        $("#ss1").html(s1);
        $("#ss2").html(s2)
    }
	

    function djs() {
        var client_n_time = Math.round(new Date().getTime() / 1000);
        var t = time - (client_n_time - client_s_time);
        if (t < 0) {
           $("#h1").html("0");
			$("#h2").html("0");
			$("#m1").html("0");
			$("#m2").html("0");
			$("#s1").html("0");
			$("#s2").html("0");
					
            clearInterval(a);
			daojishi();
            return;
        }
		var client_n_time = Math.round(new Date().getTime() / 1000);
        var t = time - (client_n_time - client_s_time);
        var h = Math.floor(t / 3600);
        var h1 = Math.floor(h / 10);
        var h2 = h % 10;
        var m = Math.floor((t % 3600) / 60);
        var m1 = Math.floor(m / 10);
        var m2 = m % 10;
        var s = t % 60;
        var s1 = Math.floor(s / 10);
        var s2 = s % 10;
        $("#h1").html(h1);
        $("#h2").html(h2);
        $("#m1").html(m1);
        $("#m2").html(m2);
        $("#s1").html(s1);
        $("#s2").html(s2)
    }
</script>


<script>
var time = 0;
var client_s_time = 0;
var a;

$(function() {
    $.get("index.php?app=specact&act=get_time",
    function(msg) {
      
        var date = new Date(msg.time * 1000);
        if (date.getHours() < 10) {
			var y = date.getFullYear();
			var m = date.getMonth() + 1;
			m = m > 9 ? (m + "") : ("0" + m);
			var d = date.getDate();
			d = d > 9 ? (d + "") : ("0" + d);
			var riqi = y + "/" + m + "/" + d + " 10:00:00";
			var e_time = parseInt(Date.parse(riqi)) / 1000;
			time = e_time - msg.time;
			client_s_time = Math.round(new Date().getTime() / 1000);
			a = setInterval("djs()", 500);
        }
        
    },
    "json");
});
function djs() {
    var client_n_time = Math.round(new Date().getTime() / 1000);
    var t = time - (client_n_time - client_s_time);
    if (t < 0) {
        $("#h").html("00");
        $("#m").html("00");
        $("#s").html("00");
        clearInterval(a);
        return;
    }
    var h = Math.floor(t / 3600);
    h = h > 9 ? h: ("0" + h);
    var m = Math.floor((t % 3600) / 60);
    m = m > 9 ? m: ("0" + m);
    var s = t % 60;
    s = s > 9 ? s: ("0" + s);
    $("#h").html(h);
    $("#m").html(m);
    $("#s").html(s);
}
</script>


<script>
    var time = 0;
    var client_s_time = 0;
    var a;
    var id = 0;
    $(function() {
        daojishi()
    });
    function daojishi() {
        $.get("index.php?app=specact&act=get_time",
        function(msg) {
            var date = new Date(msg.time * 1000);
            var y = date.getFullYear();
            var m = date.getMonth() + 1;
            m = m > 9 ? (m + "") : ("0" + m);
            var d = date.getDate();
            d = d > 9 ? (d + "") : ("0" + d);
            var e_time_1 = parseInt(Date.parse(y + "/" + m + "/" + d + " 09:30:00")) / 1000;
            var e_time_2 = parseInt(Date.parse(y + "/" + m + "/" + d + " 10:30:00")) / 1000;
            var e_time_3 = parseInt(Date.parse(y + "/" + m + "/" + d + " 15:30:00")) / 1000;
            var e_time_4 = parseInt(Date.parse(y + "/" + m + "/" + d + " 16:30:00")) / 1000;
            var e_time_5 = parseInt(Date.parse(y + "/" + m + "/" + d + " 19:30:00")) / 1000;
            var e_time_6 = parseInt(Date.parse(y + "/" + m + "/" + d + " 21:00:00")) / 1000;
            var e_time;
            if (msg.time < e_time_1) {
                $("#h1").html("0");
                $("#h2").html("0");
                $("#m1").html("0");
                $("#m2").html("0");
                $("#s1").html("0");
                $("#s2").html("0");
                return
            } else if (msg.time < e_time_2) {
                e_time = e_time_2
            } else if (msg.time < e_time_3) {
                e_time = e_time_3
            } else if (msg.time < e_time_4) {
                e_time = e_time_4
            } else if (msg.time < e_time_5) {
                e_time = e_time_5
            } else if (msg.time < e_time_6) {
                e_time = e_time_6
            } else {
                $("#h1").html("0");
                $("#h2").html("0");
                $("#m1").html("0");
                $("#m2").html("0");
                $("#s1").html("0");
                $("#s2").html("0");
                return
            }
            time = e_time - msg.time;
            client_s_time = Math.round(new Date().getTime() / 1000);
            a = setInterval("djs()", 500)
        },
        "json")
    }
    function djs() {
        var client_n_time = Math.round(new Date().getTime() / 1000);
        var t = time - (client_n_time - client_s_time);
        if (t < 0) {
            $("#h1").html("0");
            $("#h2").html("0");
            $("#m1").html("0");
            $("#m2").html("0");
            $("#s1").html("0");
            $("#s2").html("0");
            clearInterval(a);
            daojishi();
            return
        }
        var client_n_time = Math.round(new Date().getTime() / 1000);
        var t = time - (client_n_time - client_s_time);
        var h = Math.floor(t / 3600);
        var h1 = Math.floor(h / 10);
        var h2 = h % 10;
        var m = Math.floor((t % 3600) / 60);
        var m1 = Math.floor(m / 10);
        var m2 = m % 10;
        var s = t % 60;
        var s1 = Math.floor(s / 10);
        var s2 = s % 10;
        $("#h1").html(h1);
        $("#h2").html(h2);
        $("#m1").html(m1);
        $("#m2").html(m2);
        $("#s1").html(s1);
        $("#s2").html(s2)
    }
</script>


<script>
    var time = 0;
    var client_s_time = 0;
    var a;
    var id = 0;
    $(function() {
        daojishi()
    });
    function daojishi() {
        $.get("index.php?app=specact&act=get_time",
        function(msg) {
            var date = new Date(msg.time * 1000);
            var y = date.getFullYear();
            var m = date.getMonth() + 1;
            m = m > 9 ? (m + "") : ("0" + m);
            var d = date.getDate();
            d = d > 9 ? (d + "") : ("0" + d);
            var e_time_1 = parseInt(Date.parse(y + "/" + m + "/" + d + " 09:00:00")) / 1000;
            var e_time_2 = parseInt(Date.parse(y + "/" + m + "/" + d + " 10:00:00")) / 1000;
            var e_time_3 = parseInt(Date.parse(y + "/" + m + "/" + d + " 11:00:00")) / 1000;
            var e_time_4 = parseInt(Date.parse(y + "/" + m + "/" + d + " 14:00:00")) / 1000;
            var e_time_5 = parseInt(Date.parse(y + "/" + m + "/" + d + " 15:00:00")) / 1000;
            var e_time_6 = parseInt(Date.parse(y + "/" + m + "/" + d + " 19:00:00")) / 1000;
			var e_time_7 = parseInt(Date.parse(y + "/" + m + "/" + d + " 21:00:00")) / 1000;
            var e_time;
            if (msg.time < e_time_1) {
               change_time(0);
			   change_btn(0,0,0,0);
			   e_time = e_time_1;
            } else if (msg.time < e_time_2) {
				change_time(0);
				change_btn(1,0,0,0);
                e_time = e_time_2;
            } else if (msg.time < e_time_3) {
				change_time(1);
				change_btn(3,1,0,0);
                e_time = e_time_3;
            } else if (msg.time < e_time_4) {
				change_time(2);
				change_btn(3,3,0,0);
                e_time = e_time_4;
            } else if (msg.time < e_time_5) {
				change_time(2);
				change_btn(3,3,1,0);
                e_time = e_time_5;
            } else if (msg.time < e_time_6) {
				change_time(3);
				change_btn(3,3,3,0);
                e_time = e_time_6;
            }  else if (msg.time < e_time_7) {
				change_time(3);
				change_btn(3,3,3,1);
                e_time = e_time_6;
            } else {
				change_time(3);
				change_btn(3,3,3,3);
                return
            }
            time = e_time - msg.time;
            client_s_time = Math.round(new Date().getTime() / 1000);
            a = setInterval("djs()", 500)
        },
        "json")
    }
    function djs() {
        var client_n_time = Math.round(new Date().getTime() / 1000);
        var t = time - (client_n_time - client_s_time);
        if (t < 0) {
            clearInterval(a);
            daojishi();
            return
        }
        
    }
	function change_time(i){
		var img = 'url("'+img3[i]+'")';
		$(".mt").css("background-image",img);
		
		var c = ".specact_ul_"+(3 + i);
		
		change_goods(c);
	}
	function change_goods(c){
		return;
		$(".specact_ul").hide();
		$(c).show();
	}
	function change_btn(i1,i2,i3,i4){
		var arr = new Array(i1,i2,i3,i4);
		$(".specact_ul_3").find("li").each(function(index,dom){
			if(arr[index] == 1){
				if(data3[index].stock_promotion < 1){
					$(dom).find(".ljgm").find("img").attr("src", img4[2]);
				}else{
					$(dom).find(".ljgm").find("img").attr("src", img4[arr[index]]);
				}
			}else{
				$(dom).find(".ljgm").find("img").attr("src", img4[arr[index]]);
			}
		});
	}
	function set_btn(c,i,data){
		
	}
</script>


<script>
$(".clock ").click(function(){
	var i = parseInt($(this).attr("pos"));
	change_time(i);
});
</script>


<script>
    var time = 0;
    var client_s_time = 0;
    var a;
    var id = 0;
    $(function() {
        daojishi()
    });
    function daojishi() {
        $.get("index.php?app=specact&act=get_time",
        function(msg) {
            var date = new Date(msg.time * 1000);
            var y = date.getFullYear();
            var m = date.getMonth() + 1;
            m = m > 9 ? (m + "") : ("0" + m);
            var d = date.getDate();
            d = d > 9 ? (d + "") : ("0" + d);
            var e_time_1 = parseInt(Date.parse(y + "/" + m + "/" + d + " 10:00:00")) / 1000;
            var e_time_2 = parseInt(Date.parse(y + "/" + m + "/" + d + " 16:00:00")) / 1000;
            var e_time;
            if (msg.time < e_time_1) {
                change_time(0);
                change_btn(0, 0);
                e_time = e_time_1
            } else if (msg.time < e_time_2) {
                change_time(0);
                change_btn(1, 0);
                e_time = e_time_2
            } else {
                change_time(1);
                change_btn(2, 1);
                return
            }
            time = e_time - msg.time;
            client_s_time = Math.round(new Date().getTime() / 1000);
            a = setInterval("djs()", 500)
        },
        "json")
    }
    function djs() {
        var client_n_time = Math.round(new Date().getTime() / 1000);
        var t = time - (client_n_time - client_s_time);
        if (t < 0) {
            clearInterval(a);
            daojishi();
            return
        }
    }
    function change_time(i) {
        $(".clock").removeClass("active");
        $(".clock").eq(i).addClass("active");
        var n = i + 3;
        $(".specact_ul_3").hide();
        $(".specact_ul_4").hide();
        $(".specact_ul_" + n).show()
    }
    function change_btn(i1, i2) {
        $(".specact_ul_3").find("li").each(function(index, dom) {
            if (i1 == 1) {
                if (data3[index].stock_promotion < 1) {
                    $(dom).find(".tobuy").find("img").attr("src", img5[2])
                } else {
                    $(dom).find(".tobuy").find("img").attr("src", img5[1])
                }
            } else {
                $(dom).find(".tobuy").find("img").attr("src", img5[i1])
            }
        });
        $(".specact_ul_4").find("li").each(function(index, dom) {
            if (i2 == 1) {
                if (data4[index].stock_promotion < 1) {
                    $(dom).find(".tobuy").find("img").attr("src", img5[2])
                } else {
                    $(dom).find(".tobuy").find("img").attr("src", img5[1])
                }
            } else {
                $(dom).find(".tobuy").find("img").attr("src", img5[i2])
            }
        })
    }
</script>


<script>
    $(function() {
        $(".specact_ul_3").find("li").each(function(index, dom){
			var price = data3[index].tao_price-data3[index].price;
			price = Math.round(price*100)/100;
			if(data3[index].tao_price > 0 && price > 0){
				$(dom).find(".s_price").html("您节约：￥"+price);
			}else{
				$(dom).find(".s_price").html("");
			}
		});
    });
</script>



<script>
$(function(){
	$(".specact_ul_2").find("li").eq(0).find(".specact_img").after('<span class="tag"></span>');
	$(".specact_ul_2").find("li").eq(5).find(".specact_img").after('<span class="tag"></span>');
});
</script>




<script>
    var time = 0;
    var client_s_time = 0;
    var a;
    var id = 0;
    $(function() {
        daojishi()
    });
    function daojishi() {
        $.get("index.php?app=specact&act=get_time",
        function(msg) {
            var date = new Date(msg.time * 1000);
            var y = date.getFullYear();
            var m = date.getMonth() + 1;
            m = m > 9 ? (m + "") : ("0" + m);
            var d = date.getDate();
            d = d > 9 ? (d + "") : ("0" + d);
            var e_time_1 = parseInt(Date.parse(y + "/" + m + "/" + d + " 09:00:00")) / 1000;
            var e_time_2 = parseInt(Date.parse(y + "/" + m + "/" + d + " 23:59:59")) / 1000;
            var e_time;
 
            if (msg.time < e_time_1) {
                e_time = e_time_1;
                $(".specact_ul_3").find("li").each(function() {
                    $(this).find(".btn").attr("src", img3[0]);
                })
            } else {
                e_time = e_time_2;
                $(".specact_ul_3").find("li").each(function(index, dom) {
                    if (data3[index].stock_promotion < 1) {
                        $(this).find(".btn").attr("src", img3[2]);
                    } else {
                        $(this).find(".btn").attr("src", img3[1]);
                    }
                })
            }
            time = e_time - msg.time;
            client_s_time = Math.round(new Date().getTime() / 1000);
            a = setInterval("djs()", 500)
        },
        "json")
    }
    function djs() {
        var client_n_time = Math.round(new Date().getTime() / 1000);
        var t = time - (client_n_time - client_s_time);
        if (t < 0) {
            clearInterval(a);
            daojishi();
            return
        }
    }
</script>

<script>
$(function(){
	$(".specact_ul_8").find("li").each(function(index, dom){
		if(index >=5){
			$(dom).prepend('<span style="width:91px;height:116px;background:url(http://pic2.taocz.cn/zt/specact_2562/banner_top_img_1_9910.png);position:absolute;right:20px;top:20px;z-index:3000;display:block"></span>');
		}else{
			$(dom).prepend('<span style="width:91px;height:116px;background:url(http://pic2.taocz.cn/zt/specact_2562/banner_top_img_bg_9910.png?v=9992);position:absolute;right:20px;top:20px;z-index:3000;display:block"></span>');
		}
	});
});
</script>


http://www.taocz.com/images/pic/zt/specact_2562/banner_top_img_1_9910.png?1419498800