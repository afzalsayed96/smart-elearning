<html>
<head>
<title>Smart Home</title>
<link rel="icon" href="smart_logo_2016.jpg" type="image/gif" sizes="15x15">


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #007cb8;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 2px;
  width: 350px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content:'>>';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

input[type=text] {
    width: 400;
    padding: 10;
    border-radius: 50px ;
    border: 2px solid black;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 5px 5px; 
    background-repeat: no-repeat;
    padding-left: 40px;

}
table{
    
    border-radius: 50px ;
    position:relative;
    top:100;
}

td.bar{
width:400;
border-radius: 50px ;
}
p{
margin:5%;
}
div.down{
 position: relative;
 top: 200;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    
}
li {
    float: left;
}


li a, .dropbtn {
    display: inline-block;
    color: red;
	font-size:125%;
    text-align: center;
    padding: 20px 40px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #8cc63f;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 100px;
    box-shadow: 0px 8px 16px 0px #007cb8;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #007cb8}

.dropdown:hover .dropdown-content {
    display: block;

}

.mySlides {display:none;

align: center;
}
div.w3-content w3-section {align: center;
}

</style>
</head>
<body style="text-align:justify">
<ul>
<li><img src="logo.jpg" width="150px"></li>
<li><a style="margin-left: 2cm;" href="about.html"> <img src="1.1.2.png"/> </a></li>

<li class="dropdown">
    <a href="#" class="dropbtn"> <img src="1.1.1.png"/> </a>
    <div class="dropdown-content">
      <a href="introdunction.html">C++</a><a href="java.html">Java</a><a href="python.html">Python</a>
	  <a href="page1.html ">All Courses</a>
    </div>
  </li>
  <li><a style="margin-left: 5cm;"  href="sign in for project.html"><img src="1.1.3a.png"/></a></li>
  <li><a style="margin-left: 1cm;"  href="register.html"><img src="1.1.3b.png"/></a></li>

</ul>
<hr><br><br>

<div align="center" class="w3-content w3-section" style="max-width:100%; align:center;">
  <img class="mySlides" src="slidec.jpg" style="height:300px" >
  <img class="mySlides" src="slidec++.jpg" style="height:300px">
  <img class="mySlides" src="slidepy.jpg" style="height:300px">
  <img class="mySlides" src="java.jpg" style="height:300px" >
  
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<table align="center" cellspacing="0">
<form align="center" onsubmit="return btntest_onclick()">

<tr align="center"><td class="tra"></td><td class="bar">
  <input type="text" name="search" placeholder="I want to learn about..">

<button id="btntest" type="button" value="Search" 
       onclick="return btntest_onclick()" class="button" style="vertical-align:middle; align: center;"><span>SEARCH </span></button>

<script language="javascript" type="text/javascript">
function btntest_onclick() 
{
    window.location.href = "page1.html";
	return false;
}
</script>
</td><td class="tra"></td><tr>

</form>
</table>
<div class="down">
<p align="right">
<a href="http:/facebook.com/"><img src="1.3a.png"/></a>
<a href="http:/twitter.com/"><img src="1.3b.png"/></a>
<a href="http:/youtube.com/"><img src="1.3c.png"/></a>
<a href="http:/linkedin.com/"><img src="1.3d.png"/></a>
<a href="http:/plus.google.com/"><img src="1.3e.png"/></a>
<a href="http:/reddit.com/"><img src="1.3f.png"/></a>

</p>
</div>
</body>
</html>
