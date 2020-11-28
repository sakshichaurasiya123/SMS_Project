<?php 
function showdetails($standerd,$rollno)
{
	include('dbcon.php');
	$sql="SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standerd`='$standerd'";
	$run=mysqli_query($con,$sql);
	if(mysqli_num_rows($run)>0)
	{
		$data=mysqli_fetch_assoc($run);
		?>
		<table  align="center" border="1" bgcolor="#7fffd4" style="margin-top:20px" width="50%">
		<tr>
			<th colspan="3">Student Detalis</th>
		</tr>
		<tr>
			<th rowspan="5"><img src="dataimg/<?php echo $data['image'];?>" style="max-height:150px; max-width:120px;"/></th>
			<th>Rollno</th>
			<td><?php echo $data['rollno']; ?></td>
		</tr>
		
		<tr>
			<th>Name</th>
			<td><?php echo $data['name'];?></td>
		</tr>
		
		<tr>
			<th>Standerd</th>
			<td><?php echo $data['standerd'];?></td>
		</tr>
		
		
		<tr>
			<th>parents contact</th>
			<td><?php echo $data['parents contact'];?></td>
		</tr>
		
		<tr>
			<th>City</th>
			<td><?php echo $data['city'];?></td>
		</tr>
		
		
		<?php
		
	}
	else
	{
		echo"<script>alert('No student Found');</script>";
	}
}?>
</table>