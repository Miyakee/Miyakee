<html>
<style type="text/css">
*{margin:0;padding:0;}
#main{

position:relative;
margin:0 auto;
width:800px;
}


.box2{
background-color:black;
position:relative;
width:450px;
height:300px;
margin-top:20px;

}
.box3{
background-color:black;
position:relative;
margin-left:200px;
margin-top:20px;
height:300px;
width:580px;}
.box4{
background-color:black;
position:absolute;
height:510px;
width:160px;
clear:both;
margin-top:20px;
margin-left:20px;}
.box5{
background:rgba(255, 251, 255,0.05) none repeat scroll !important;
background:red; filter:Alpha(opacity=90);/*实现IE背景透明*/position:relative;
border:5px dotted #FFA07A;

margin-left:200px;
margin-top:20px;
height:300px;
width:580px;}
.box3 h1 {
margin:10px;
border-bottom: 2px solid #fff;
color:white;
font-family:'Comic Sans MS', cursive, sans-serif;}
.box3 p {
margin:10px;
color:white;
font-family:'Comic Sans MS', cursive, sans-serif;
overflow:ellipsis
}
.left {
position:relative;
width:370px;
height:280px;
margin:10px;}
.right {
position:absolute;
height:200px;
width:170px;
top:30px;
left:400px;
overflow:hidden;}
.right h2{
font-family:'Comic Sans MS', cursive, sans-serif;
color:white;
margin:20px;
}
.left h3 {
font-family: georgia,palatino,times,serif;
color:#DAA520;
margin:10px;
}
#footer{
border-top:2px solid #fff;
position:relative;
margin-left:200px;
background-color:#a72525;
font-size:1em;
font-family:'Comic Sans MS', cursive, sans-serif;
color:white;
text-align:center;
}
.an
{
padding:0 5px;
position:relative;
margin-left:70px;
margin-top:35px;
color:red;
border:2px solid;
border-radius:25px;
-moz-border-radius:25px; /* Old Firefox */
}
.box2 h1 {
margin:0px;
color:white;
font-family:'Comic Sans MS', cursive, sans-serif;
text-align:center;
}
.circle {
width: 150px;
	height: 150px;
	background-color: #a72525;
	-webkit-border-radius: 150px 0 0 0;
	position:absolute;
	top:150px;
	left:111px;
	}
.border {
width: 200px;
	height: 200px;
	background-color: transparent; /* Can be set to transparent */
      	border: 3px #a72525 dashed;
	-webkit-border-radius: 200px 0 0 0;
	position:absolute;
	top:94px;
	left:55px;
	}
	.border2 {
width: 144px;
	height: 144px;
	background-color: transparent; /* Can be set to transparent */
      	border: 3px #a72525 dashed;
	-webkit-border-radius:  0 144px 0 0;
	position:absolute;
	top:150px;
	left:270px;}
	.circle2 {
width: 100px;
	height: 100px;
	background-color: #a72525;
	-webkit-border-radius: 0 100px 0  0;
	position:absolute;
	top:200px;
	left:270px;
	}
.name {
width: 200px;
	height: 50px;
	background-color: #DAA520;
	-webkit-border-radius: 0 0 150px 150;
	position:absolute;
	top:0px;
	left:0px;
	}
#imglunbo{
	position:absolute;
	width:170px;
	height:200px;
	top:0px;
	}
	#imglunbo img{
	width:170px;
	height:200px}
	.goall{
	position:relative;
	margin-left:490px;
	}
	#liulan{
	position:relative;
	margin-left:20px;
	}
	.container{
	display:inline-block;
	}
	a {
	text-decoration:none;
	        color: white;

	}
  .wai-border{
  background-color:white;
  height:400px;
  width:400px;
  position:absolute;
  	top:100px;
  	left:50px;
  }



</style>
<body bgcolor="black">
<div id="main">
<img src="{{__PUBLIC__.'/pic/hhh.jpg'}}" style="position:absolute;left:200px; top:0px;height:650px;">

<div class="box2">
<div class= "wai-border">
<div class="angle1"></div>
<div class="angle2"></div>
<div class="angle3"></div>
<div class="angle4"></div>
<div class="angle5"></div>

</div>

<div class="name">
<h1>Miyakee</h1></div>


</div>
<div class="box4">
<img src="{{__PUBLIC__.'/pic/q4.png'}}" height="70px" style="position:absolute;left:0px;top:10px;"><div  class="an"><a href="##"><p>个人信息</p></a></div>
<img src="{{__PUBLIC__.'/pic/q5.png'}}" height="70px" style="position:absolute;left:0px;top:65px;"><div  class="an"><a href="##"><p>技术学习</p></a></div>
<img src="{{__PUBLIC__.'/pic/q1.png'}}" height="70px" style="position:absolute;left:0px;top:125px;"><div class="an"><a href="##"><p>杂谈生活</p></a></div>
<img src="{{__PUBLIC__.'/pic/q2.png'}}" height="70px" style="position:absolute;left:0px;top:185px;"><div class="an"><a href="##"><p>动漫死宅</p></a></div>
<img src="{{__PUBLIC__.'/pic/q6.png'}}" height="70px" style="position:absolute;left:0px;top:240px;"><div class="an"><a href="##"><p>吐槽趣事</p></a></div>
<img src="{{__PUBLIC__.'/pic/q7.png'}}" height="70px" style="position:absolute;left:0px;top:295px;"><div class="an"><a href="##"><p>福利萌图</p></a></div>
<img src="{{__PUBLIC__.'/pic/q8.png'}}" height="70px" style="position:absolute;left:0px;top:350px;"><div class="an"><a href="##"><p>音乐收藏</p></a></div>
<img src="{{__PUBLIC__.'/pic/q3.png'}}" height="70px" style="position:absolute;left:0px;top:410px;"><div class="an"><a href="##"><p>分享链接</p></a></div>

</div>
<div class="box5">
<div class="right">
<ul id="imglunbo">
@foreach($pic as $pics)
<li><img src="{{__PUBLIC__.'/img/'.$pics->pic_name}}"></li>

@endforeach
</ul>

</div>

<div class="left">
<ul id="liulan">
@foreach($article as $articles)
<li><a href="{{action('DetailController@getIndex',$articles->id)}}"><h3>{{$articles->theme}}</h3></a></li>
@endforeach
</ul>

</div></div>
@foreach($article as $articles)
<div class="box3">
<a href="{{action('DetailController@getIndex',$articles->id)}}">
<h1>{{$articles->theme}}</h1></a>
<p>{{$articles->content}}</p>
<p class="goall">{{$articles->updated_at}}</p>
<a href="{{action('DetailController@getIndex',$articles->id)}}"><p class="goall">all read >>></p>
</a></div>
@endforeach
<div id="footer">Copyright @Miyakee</div>

</div>
</body>
 <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
 $(".an").hover(function(){
 $(this).css("color","white");
 },function(){
 $(this).css("color","red");});
})
</script>
<script type="text/javascript">
function moveEle(elementId,y,Interval){
var ele=document.getElementById(elementId);
clearTimeout(ele.movement);
var nowy=ele.offsetTop;
if(nowy>y){
var dist = Math.ceil((nowy - y)/10); 
nowy = nowy - 204; }
if (nowy==y) { 
nowy = 0; 
} 
ele.style.top=nowy+"px";
var repeat = "moveEle('"+elementId+"',"+y+","+Interval+")"; 
ele.movement = setTimeout(repeat,Interval);

}

 

window.onload=function(){
var imgp=document.getElementById("imglunbo");
moveEle('imglunbo',-1020,1000);}

</script>
</html>