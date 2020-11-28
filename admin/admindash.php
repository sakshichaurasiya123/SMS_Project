<?php
session_start();
if($_SESSION['uid'])
{
	echo "";
}
else
{
	header('location:../login.php');
}
?>
<?php 
include('header.php');
?>
	<div class="admintitle" align="center">
	<h4><a href="logout.php" style="float:right; margin-right:30px; color:#fff;">Logout</a></h4>
	<h1>Welcome to admin dashboard</h1>
	</div>
	<div class="admin" align="center">
	<table>
		<tr>
			<td style="font-size:20px; color:#00008B">1.</td><td ><a href="addstudent.php" style="font-size:20px; color:#00008B" >Insert Student Details</a></td> 
		</tr>
		<tr>
			<td style="font-size:20px; color:#00008B">2.</td><td><a href="deletestudent .php" style="font-size:20px; color:#00008B">Delete Student Details</a></td> 
		</tr>
	
		<tr>
			<td style="font-size:20px; color:#00008B">3.</td><td><a href="upstudent .php" style="font-size:20px; color:#00008B">Update Student Details</a></td> 
		</tr>
	
	</table>
	</div>
	
</body>
</html>