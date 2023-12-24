<html>
<head>
<title>contact us</title>
<style>

.a1
{
text-decoration:none;
}
a:hover
{
background:#white;
text-decoration:underline;
}
.head
{
font-size:60px;
margin-top:30px;
}
.body1
{
    color: #eee;
    background: url("ph1.jpg");

}
.tbl
{
margin-left:10px;
}
.table
{
height:40px;
font-size:23px;
}
.a
{
height:30px;
}
.submit
{
    height: 30px;
    width: 100%;
    margin-top: -49px;
}
</style>
</head>
<body class ="body1">
<?php
include("header.php");
?>
<center>
<h1 class="head"><u>Contact Us</u></h1>
<form class ="tbl" name="contact_us" method="post" action=""><br><br>
<table class="table">
<tr><td>
First-Name:</td><td><input class="a"type="text" name="fname" placeholder="first name"><br><br>
</td></tr>
<tr><td>
Last-Name:</td><td><input class="a" type="text" name="lname" placeholder="last name"><br><br>
</td></tr>
<tr><td>
email:</td><td><input class="a" type="email" name="email" placeholder="email"><br><br>
</td></tr>
<tr><td>
Contact Number: </td><td> <input class="a"type="phone" name="ph" placeholder="phone number"><br><br>
</td></tr>
<tr><td>
Questions or Comments:<br></td><td> <textarea name="comments" rows="6" col="20"></textarea><br><br><br><br>
</td></tr>
<tr><td><input class="submit" type="submit" name="submit" value="submit"></td></tr>
</form>
</table>
</center>

<?php
include("footer.php");
?>
