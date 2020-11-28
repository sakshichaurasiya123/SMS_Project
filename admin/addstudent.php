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

?>
<form action="addstudent.php" method="post" enctype="multipart/form-data">
<table border="1" align="center" width="50%" style="margin-top:30px;">
	<tr>
		<td align= "center">Roll No</td>
		<td><input type="text" name="rollno" placeholder="Enter Roll No" required></td>
	</tr>
	
	<tr>
		<td align= "center">FullName</td>
		<td><input type="text" name="fullname" placeholder="Enter Fullname" required></td>
	</tr>

	<tr>
		<td align= "center">City</td>
		<td><input type="text" name="city" placeholder="Enter City" required></td>
	</tr>
	<tr>
		<td align= "center">Parent Contact no</td>
		<td><input type="text" name="pcon" placeholder="Enter parent contact no" required></td>
	</tr>
	<tr>
		<td align= "center">Standard</td>
		<td><input type="number" name="std"  placeholder="Enter Standerd" required></td>
	</tr>
	<tr>
		<td align= "center">Image</td>
		<td><input type="file" name="simg" value="Browse"required></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="submit"  value="Submit"></td.
	</tr>
<table>
</form>
<?php 
	if(isset($_POST['submit']))
	{
		include('../dbcon.php');
		$rollno=$_POST['rollno'];
		$name=$_POST['fullname'];
		$city=$_POST['city'];
		$pcon=$_POST['pcon'];
		$std=$_POST['std'];
		$imagename=$_FILES['simg']['name'];
		$tempname=$_FILES['simg']['tmp_name'];
		move_uploaded_file($tempname,"../dataimg/$imagename");
		$qry="INSERT INTO `student`( `rollno`, `name`, `city`, `parents contact`, `standerd`, `image`) VALUES ('$rollno','$name','$city','$pcon','$std','$imagename')";
		$run=mysqli_query($con,$qry);
		if($run==true)
		{
			?>
			<script>
			alert('Data inserted Successfully');
			</script>
			<?php
		}
	}
	?>






