<html>
<head>
</head>
<style type="text/css">
*{
margin:0;
padding:0;}
#header{
}

.h_left{
position:absolute;
top:0;
left:0;
background-color:black;
width:220px;
height:180px;}
.h_right{
position:absolute;
right:0;
top:0;
background-color:black;
width:300px;
height:180px;
display:inline;}
.h_content{
background-color:black;
margin:0px 303px 0 223px;
height:180px;
}
#con{
margin-top:3px;
float:left;
width:100%;
    overflow: hidden;

}
#contain{
margin-bottom: -10000px;
    padding-bottom: 10000px;
height:auto !important;
height:600px; /*假定最低高度是200px*/
min-height:600px; }



.left{
margin-bottom: -10000px;
    padding-bottom: 10000px;
float:left;
background-color:black;
width:220px;
height:180px;

margin-left: -100%;
}

.right{
margin-bottom: -10000px;
    padding-bottom: 10000px;
margin-left: -300px;
float:left;
background-color:#C0C0C0;
width:300px;
height:180px;
}
.content{

margin-bottom: -10000px;
padding-bottom: 10000px;
width: 100%;
float: left;

}
.center{
margin-bottom: -10000px;
padding-bottom: 10015px;
background-color:#C0C0C0;
margin-left:223px;
margin-right:303px;

}
.article{
top:5px;
margin:0 8px 0 8px;
position:relative;

background-color:white;
word-break:break-all;

}
.warp1{
padding:10px;
background-color:#98FB98;
position:relative;
margin:10px;
border:2px solid white;
border-radius:25px;
-moz-border-radius:25px; /* Old Firefox */
word-break:break-all;
}
.warp2{
background-color:#FAEBD7;
position:relative;
margin:10px;
border:2px solid white;
border-radius:25px;
-moz-border-radius:25px; /* Old Firefox */
word-break:break-all;
}
.warp1 p {
margin:10px;}
.item{
margin:10px;
background-color:#FAEBD7;
position:relative;
border:2px white dashed ;}
.item p {
margin:10px;}
.nav{
position:relative;
margin-left:130px;
margin-top:1px;

height:30px;
width:90px;
background-color:white;}
.qj{
position:relative;
top:73px;
left:10px;}
.pz{
position:absolute;
top:50px;
left:610px;
}
.hua{
position:absolute;
top:70px;
left:80px;
height:230px;}
.content .center .article  p{
margin:10px;
word-break:break-all;
font-family:'Comic Sans MS', cursive, sans-serif;
font-size:0.8em;

}
.content .center .article h1{
text-align:center;
word-break:break-all;
font-family:'Comic Sans MS', cursive, sans-serif;

}
.content .center>p{
color:#32CD32;
word-break:break-all;
font-size:1.2em;
font-family:'Comic Sans MS', cursive, sans-serif;
text-align:center;
font-weight:bold;
}
.sy1{
position:relative;
top:40px;
left:50px;}
.sy2{
position:relative;
top:40px;
left:0px;}
.sy3{
position:relative;
top:40px;
left:70px;}
.sy4{
position:relative;
top:40px;
left:50px;}
.sy5{
position:relative;
top:0px;
left:50px;}
</style>
<body bgcolor>
<div id="header">

<div class="h_left"></div>
<div class="h_content">
<img class="qj" src="{{__PUBLIC__.'/pic/qjxj.png'}}" height="140px"width="300px"></div>
<img class="pz" src="{{__PUBLIC__.'/pic/pzz.png'}}" height="140px"width="300px"></div>



<div class="h_right"></div></div>
<div id="con">

<div class="content">
<div class="center">
<div class="article"><h1>{{$article->theme}}<h1>

<p>{{$article->content}}</p>
</div><p id="copyright">copyright@Miyakee</p></div>
</div>
<div class="right"><div class="item"><p>qqqqqqqqqqqqqqq</p></div>
<div class="warp1"><p>111111111111</p></div>
<div class="warp1"><p>11111111111122222222222222222222222222222222222</p></div>
<div class="warp1"><p>11111111111122222222222222222222222222222222222</p></div>
<div class="warp1"><p>1111111111111111111122222222222222222222222222222222222111111111111222222222222222222222222222222222221111</p></div>
<div class="warp2">
<form>
<p>your comment:<p>
<textarea class="warp1" cols="30" rows="5"></textarea>
<p>your name:</p><input type="text" class="warp1">
<input type="submit" value="Sub">
</form></div></div>

<div class="left">
<div class="nav"></div>
<div class="nav"></div>
<div class="nav"></div>
<div class="nav"></div>
<div class="nav"></div>
<div class="nav"></div>
<a href="#"><img class="sy1" src="{{__PUBLIC__.'/pic/sy1.png'}}" height="50px"></a>
<a href="#"><img class="sy2" src="{{__PUBLIC__.'/pic/sy4.png'}}" height="100px"></a>
<a href="#"><img class="sy3" src="{{__PUBLIC__.'/pic/sy2.png'}}" height="60px"></a>
<a href="#"><img class="sy4" src="{{__PUBLIC__.'/pic/sy3.png'}}" height="100px"></a>

<a href="#"><img src="{{__PUBLIC__.'/pic/sy5.png'}}" height="60px"></a>

</div>
</div>
<img class="hua" src="{{__PUBLIC__.'/pic/huahua1.png'}}">


</body>
</html>