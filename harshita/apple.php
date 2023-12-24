<!DOCTYPE html>
<html>
<head>
<title>APPLE</title>
<style>
*
{
margin: 0 auto;
}
.div0
{
height:100px;
width:100%;
background:#212F3C;
}
.heading
{
text-align:center;
padding:0;
color:white;
text-transform: uppercase;
font-family: 'Roboto',sans-serif;
font-size:90px;
}
div.gallery {
  margin: 70px;
  float: left;
  width: 180px;
}

div.gallery:hover {
transform: scale(1.1);
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 13px;
  text-align: center;
}

</style>
</head>
<body bgcolor="white" >
<?php
include("header.php");
?>

<div class="div0">
<h1 class="heading"> APPLE </h1>
</div>
<div class="gallery">
  <a  href="apple10.html">
    <img src="project/apple10.jpg" alt="apple" width="600" height="500">
  </a>
 
  <div class="desc">APPLE X <br>Price: 15,869<br><button class="buy"> Buy </th></center></button></div>
</div>


<div class="gallery">
  <a href="apple7.html">
    <img src="project/apple 7.jpg" alt="7" width="500" height="400">
  </a>
  <div class="desc">Apple-7plus<br>Price: 47,999<br><button class="buy"> Buy </th></center></button></div>
</div>

<div class="gallery">
  <a  href="apple xs-max.html">
    <img src="project/xs.jpg" alt="XS" width="500" height="400">
  </a>
  <div class="desc"> XS MAX<br>Price: 1,08,424<br><button class="buy"> Buy </th></center></button></div>
</div>

<div class="gallery">
 <a href="apple 6s.html">
   <img src="project/6s.jpg" alt="xr" width="600" height="400">
  </a>
  <div class="desc">APPLE 6s<br>Price: 58,500<br><button class="buy"> Buy </th></center></button></div>
</div>
<hr>

<div class="gallery" style="float:right !important;">
  <a href="apple 4s.html">
    <img src="project/4s.jpg" alt="9" width="600" height="400">
  </a>
  <div class="desc">APPLE 4S<br>Price: 33,999<br><button class="buy"> Buy </th></center></button></div>
</div>

<div class="gallery">
  <a href="apple 5.html">
    <img src="project/5a.jpg" alt="20" width="600" height="400">
  </a>
  <div class="desc"> IPHONE 5<br>Price: 43,750<br><button class="buy"> Buy </th></center></button></div>
</div>

<div class="gallery">
  <a  href="apple 6plus.html">
    <img src="project/6+++.jpg" alt="7a" width="400" height="400">
  </a>
  <div class="desc">IPHONE 6PLUS<br>Price: 28,999<br><button class="buy"> Buy </th></center></button></div>
</div>

<div class="gallery">
  <a href="xr.html">
    <img src="project/xr.jpg" alt="8c" width="600" height="400">
  </a>
  <div class="desc">IPHONE XR<br>Price: 59,890 <br><button class="buy"> Buy </th></center></button></div>
</div>

<?php
include("footer.php");
?>