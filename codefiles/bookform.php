<?php 
$servername="localhost";
$username="root";
$password="";
$database_name="booking";
$conn = mysqli_connect($servername,$username,$password,$database_name);
if(!$conn){
die('Connection Failed : '.mysqli_connect_error());
}
if(isset($_POST['save']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$cname=$_POST['cname'];
$wname=$_POST['wname'];
$quantity=$_POST['quantity'];
$Address=$_POST['Address'];
$code=$_POST['code'];

$sql_query="INSERT INTO book(fname,lname,email,cname,wname,quantity,Address,code)
VALUES ('$fname','$lname','$email','$cname','$wname','$quantity','$Address','$code')";

if(mysqli_query($conn,$sql_query))
{
echo"NEW DETAILS INSERTED SUCCESSFULLY !";
echo"THANKU FOR BOOKING";
}
else
{
echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<p><a href="first.html">Back to home</a></p>