<?php 
session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');
}
?>
<html>
	<head>
	</head>
	<body bgcolor="#fff00">
		<h1 align="center" style="margin-top:100px; color:#0000ff">Admin Login</h1>
		<form action="login.php" method="post">
		<table border="1" align="center" bgcolor="#ff69b4"style="margin-top:20px" height="20%"width="20%">
		<tr>
			<td>Username</td>
			<td><input type="text" placeholder="Enter Username" name="uname" required></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pass"  placeholder="Enter Password" required></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="login"  value="Login"></td>
		</tr>
		</table>
	</body>
</html>
<?php 
include('dbcon.php');
if(isset($_POST['login']))
{
	$username=$_POST['uname'];
	$password=$_POST['pass'];
	$qry="SELECT * FROM `admin` WHERE username='$username' and password='$password'";
	$run= mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);
	if($row <1)
	{
		?>
		<script>
		alert('Username or password not match !!');
		window.open('login.php','_self');
		</script>
		<?php
	}
	else
	{
		$data=mysqli_fetch_assoc($run);
		$id=$data['id'];
		$_SESSION['uid']=$id;
		header('location:admin/admindash.php');
	}
}

?>
