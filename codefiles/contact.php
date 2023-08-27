<?php 
$servername="localhost";
$username="root";
$password="";
$database_name="signin";
$conn = mysqli_connect($servername,$username,$password,$database_name);
if(!$conn){
die('Connection Failed : '.mysqli_connect_error());
}
if(isset($_POST['save']))
{
$email=$_POST['email'];
$comment=$_POST['comment'];
$reservation=$_POST['reservation'];

$sql_query="INSERT INTO info(email,comment,reservation)
VALUES ('$email', '$comment',' $reservation ')";

if(mysqli_query($conn,$sql_query))
{
echo"We will contact you soon !";
}
else
{
echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<p><a href="first.html">Back to home</a></p>