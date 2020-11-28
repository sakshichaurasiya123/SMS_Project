<html>
	<head>
	</head>
	<body>
		<form method="post">
		<table border="1" align="center" style="margin-top:50px">
		<tr>
			<th colspan="2">Change password</th>
		</tr>
		<tr>
			<th>Old Password</th>
			<td><input type="password"  placeholder="Enter old Password"name="opassword"required="required"/></td>
		</tr>
		<tr>
			<th>New Password</th>
			<td><input type="password"  placeholder="Enter new Password"name="npassword" required="required" /></td>
		</tr>
		<tr>
			<th>Confirm Password</th>
			<td><input type="password"  placeholder="Enter Confirm Password"name="cpassword" required="required"/></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"/></td>
		</tr>
		</form>
	</body>
</html>
<?php
session_start();
include('../dbcon.php');
$profile=$_SESSION['user_name'] = $_POST['uname'];
if(isset($POST['submit']))
{
	$oldpwd=$_POST['opassword'];
	$newpwd=$_POST['npassword'];
	$confirmpwd=$_POST['cpassword'];
	$qry="SELECT `password` FROM `admin` WHERE `username`='$profile'";
	$run=mysqli_query($con,$qry);
	while($row=mysqli_fetch_array($run)){
		$pass=$row['password'];
		if($pass==$oldpwd)
		{
			if($newpwd==$confirmpwd){
				$sql="UPDATE `admin` SET  `password` = '$confirmpwd' WHERE `username` ='$profile'";
				$update=mysqli_query($con,$sql);
				if($update){
					echo "<script>alert('Success')</script>";
				}
				else{
					echo "<script>alert('Failed')</script>";
				}
			}
			else{
				echo "<script>New and Confirm password do no match !!!</script>";
			}		
		}
		else{
			echo "<script>oldpassword and username  password do no match !!!</script>";
		}
	}	
}
?>
