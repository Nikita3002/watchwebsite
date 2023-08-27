<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>

<body>

<table id="customers">
<tr>
<th>sr.no</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>City Name</th>
<th>Watch Name</th>
<th>Quentity</th>
<th>Address</th>
<th>Watch code</th>
</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, fname, lname,email,cname,wname,quantity,address,code FROM book";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) { 
  ?> 
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['fname']; ?></td>
<td><?php echo $row['lname']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['cname']; ?></td>
<td><?php echo $row['wname']; ?></td>
<td><?php echo $row['quantity']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['code']; ?></td>
</tr>
<?php }
} else {
  echo "0 results";
}
$conn->close();
?> 
</table>
<a href="first.html">Back</a>
</body>
</html>
