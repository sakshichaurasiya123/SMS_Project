<html>
<head>
<title>Student management</title>
</head>
<body bgcolor="#ff1493">
<h3 align="right" style="margin-right:30px; margin-top:30px;"><a href="login.php">Admin Login</a></h3>
<h1 align="center" style="color:#ffffff"> Welcome to Student Management System</h1>

<form method="post" action="index.php">
<table style="width:30%" height="30%" align="center"  bgcolor="#fffacd" border="1">
<tr bgcolor="#0000ff"> 
	<th colspan="2" align="center" style="color:#ffffff">Student Information</th>
</tr>
<tr>
	<th align="left">Choose Standerd</th>
	<td>
		<select name="std" required>
		<option value="1">1st</option>
		<option value="2">2nd</option>
		<option value="3">3rd</option>
		<option value="4">4th</option>
		<option value="5">5th</option>
		<option value="6">6th</option>
		<option value="7">7tt</option>
		<option value="8">8th</option>
		<option value="9">9th</option>
		<option value="10">10th</option>
		<option value="11">11th</option>
		<option value="12">12th</option>
		
		</select>
	<td>
</tr>
<tr>
	<th align="left">Enter Rollno</th>
	<td><input type="text" name="rollno" placeholder="Enter Roll Number" required></td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="Submit" value="show-info" name="submit"></td>
</tr>
</table>
</form>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
	$standerd = $_POST['std'];
	$rollno = $_POST['rollno'];
	include('dbcon.php');
	include('function.php');
	showdetails($standerd,$rollno);
}
?>
