<! DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form name="f1" method="post">
<input type="text" name="id" placeholder="Enter your id">
<input type="text" name="name" placeholder="Enter your name">
<input type="text" name="class" placeholder="Enter your class" >
<input type="text" name="course" placeholder="Enter your course">
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db("con","aegis.");

if(isset($_POST["submit"]))
{
$id=$_POST["id"];
$name=$_POST["name"];
$class=$_POST["class"];
$course=$_POST["course"];
$query="insert into student(id,name,class,course) value('$id','$name','$class','$course')"
$result=mysqli_query($con,$query);
}
?>
