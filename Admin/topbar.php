<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<!--Newly Added Code Start -->
<style type="text/css">
*{
	margin: 0;
	padding: 0;
}
body{
	background: #eee;
	font-size: 16px;
	font-family: sans-serif,arial;
}
 
.nav{
	width: 1100px;
	height: 60px;
	margin-left:1px ;
	border-radius: 5px;

	
}
ul li{
	list-style: none;
	width: 200px;
	line-height: 6px;
	position: relative;
	background: #222;
	box-shadow: 0px 2px 5px 0px grey;
	text-align: center;
	float: left;
	background-color: #010000;
}
ul li ul{
	position: absolute;
}
.nav > ul > li:nth-of-type(1){
	border-radius: 5px 0px 0px 5px;
}
.nav > ul > li:nth-of-type(5){
	border-radius: 0px 5px 5px 0px;
}
ul li a{
	color: #fff;
	width: 200px;
	height: 58px;
	display: inline-block;
	text-decoration: none;
}
ul li a:hover{
	font-weight: bold;
	border-bottom: 2px solid #fff;
}
ul li ul{
	display: none;
}
.nav ul li:hover ul{
	display: block;
}
.fa{
	margin-right: 5px;
}
.container{
	width: 1000px;
	height: 200px;
	margin: 0 auto;
	padding:20px 50px;
}
@media screen and (max-width: 480px){
	header{
		width: 100%;
	}
	.nav{
		display: none;
		width: 100%;
		height: auto;
		
	}
	ul li{
		width: 100%;
		float: none;
	}
	ul li a{
		width: 100%;
		display: block;
	}
	ul li ul{
		position: static;
	}
	ul li ul li a{
		background: #222;
	}
	.fa-list.modify{
		display: block;
	}
	.container{
		width: 100%;
		height: auto;
	}
	body{
		overflow-x:hidden;
	}
}
</style>
<!--Newly Added Code Finished -->

<body>
<div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
			<!--<h1><img src="images/logo.png" alt=""></h1> -->
		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
			<div class="menu"></div>
			
			<!-- Newly Added Code Start-->
 
<nav class="nav">
	<ul>
		<!-- 1st Menu Option Starts Here -->
	<span>	<li><a href="#">Preview Website</a></li> </span>
		<!-- 1st Menu Option Ends Here -->
		
		
		<!-- 2nd Menu Option Starts Here -->
		<span><li><a href="#">Donor</a>
		<ul>
		<li><a href="#">Add Donor</a></li>
		<li><a href="#">Update Donor</a></li>
		<li><a href="#">Delete Donor</a></li>
		<li><a href="#">View Donor</a></li>
		</ul>
		</li>
		</span>
		<!-- 2nd Menu Option Ends Here -->
		
		<!-- 3rd Menu Option Starts Here -->
		<span><li><a href="#">Receiver</a>
		<ul>
        <li><a href="#">Add Receiver</a></li>
		<li><a href="#">Update Receiver</a></li>
		<li><a href="#">Delete Receiver</a></li>
		<li><a href="#">View Receiver</a></li>
		</ul>
		</li>
		</span>
		<!-- 3rd Menu Option Ends Here -->
		
		
		
		<!-- 4th Menu Option Starts Here -->
		<span>
		<li><a href="#">User</a>
		<ul>
        <li><a href="#">Add User</a></li>
		<li><a href="#">Update User</a></li>
		<li><a href="#">Delete User</a></li>
		<li><a href="#">View User</a></li>
		</ul>
		</li>
		</span>
		<!-- 4th Menu Option Ends Here -->
		
		
		
		<!-- 5th Menu Option Starts Here -->
		<span>
		<li><a href="#">News</a>
		<ul>
        <li><a href="#">Add News</a></li>
		<li><a href="#">Delete News</a></li>
		<li><a href="#">View News</a></li>
		</ul>
		</li>
		</span>
		<!-- 5th Menu Option Ends Here -->
		
		
		<!-- 6th Menu Option Starts Here -->
		<span>
		<li><a href="#">Camp</a>
		<ul>
        <li><a href="#">Add Camp</a></li>
		<li><a href="#">Update Camp</a></li>
		<li><a href="#">Delete Camp</a></li>
		<li><a href="#">View Camp</a></li>
		</ul>
		</li>
		</span>
		<!-- 6th Menu Option Ends Here -->
		
		
		
		<!-- 7th Menu Option Starts Here -->
		<span>
		<li><a href="#">Gallery</a>
		<ul>
        <li><a href="#">Add Gallery</a></li>
		<li><a href="#">Update Gallery</a></li>
		
		</ul>
		</li>
		</span>
		<button>Log Out</button>
		<!-- 7th Menu Option Ends Here -->
		
		
		
	</ul>
</nav>
<!-- Newly Added Code Finished-->
	</div>
    </div>
</body>
</html>