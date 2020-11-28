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
include('titlehead.php');
include('../dbcon.php');
$sid=$_REQUEST['sid'];
$sql="SELECT * FROM `student` WHERE `id`='$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>
<form action="updata.php" method="post" enctype="multipart/form-data">
<table border="1" align="center" width="50%" style="margin-top:30px;">
	<tr>
		<td align= "center">Roll No</td>
		<td><input type="text" name="rollno" value="<?php echo $data['rollno'];?>" required></td>
	</tr>
	
	<tr>
		<td align= "center">FullName</td>
		<td><input type="text" name="fullname" value="<?php echo $data['name'];?>" required></td>
	</tr>

	<tr>
		<td align= "center">City</td>
		<td><input type="text" name="city" value="<?php echo $data['city'];?>" required></td>
	</tr>
	<tr>
		<td align= "center">Parent Contact no</td>
		<td><input type="text" name="pcon" value="<?php echo $data['parents contact'];?>" required></td>
	</tr>
	<tr>
		<td align= "center">Standard</td>
		<td><input type="number" name="std" value="<?php echo $data['standerd'];?>" required></td>
	</tr>
	<tr>
		<td align= "center">Image</td>
		<td><input type="file" name="simg"  value="<?php echo $data['image']?>"/></td>
	</tr>
		<input type="hidden" name="sid" value=" <?php $data['id']; ?> "  />
	<tr>
		<td colspan="2" align="center">
	
		<input type="submit" value="Submit"></td>
	</tr>
<table>
</form>
</body>
</html>
