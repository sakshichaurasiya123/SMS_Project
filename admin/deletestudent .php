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
<table align="center" border="1" style="margin-top:20px">
<form action="deletestudent .php" method="post">
<tr><th >Enter Standerd</th>
	<td><input type="number" name="standerd" placeholder="Enter Standerd" required="required"/></td>
</tr>
<tr><th>Enter Student Name</th>
	<td><input type="text" name="stuname" placeholder="Enter student name" required="required"/></td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="submit" name="submit" value="search"/></td>
</tr>
</form>
</table>
<table align="center" width="80%" border="1" style="margin-top:20px">
	<tr style="background-color:#000; color:#fff">
		<th>No</th>
		<th>Image</th>
		<th>Name</th>
		<th>RollNo</th>
		<th>Edit</th>
	</tr>
	<?php
	if(isset($_POST['submit']))
	{
		include('../dbcon.php');
		$standerd=$_POST['standerd'];
		$name=$_POST['stuname'];
		$sql="SELECT * FROM `student` WHERE `standerd`='$standerd' AND `name` LIKE '%$name%' ";
		$run=mysqli_query($con,$sql);
		if(mysqli_num_rows($run)<1)
		{
			echo "<tr><td colspan='5'>No Record Found</td></tr>";
		}
		else
		{
			$count=0;
			while($data=mysqli_fetch_assoc($run))
			{
				$count++;
				?>
				<tr align="center">
					<td><?php echo $count;?></td>
					<td><img  height="10%"src="../dataimg/<?php echo $data['image'];?>" style="max-witdh:100px;"/></td>
					<td width="20%"><?php echo $data['name'];?></td>
					<td width="20%"><?php echo $data['rollno'];?></td>
					<td width="20%"><a style="font-size:20px; color:#00008B" href= "deleteform.php?sid=<?php echo $data['id'];?>">Delete</td>
				</tr>
				<?php
			}
		}
	}
?>
</table>
