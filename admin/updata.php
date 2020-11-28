<?php

 
	include('../dbcon.php');
		$rollno=$_POST['rollno'];
		$name=$_POST['fullname'];
		$city=$_POST['city'];
		$pcon=$_POST['pcon'];
		$std=$_POST['std'];
		$id=$_POST['sid'];
		$imagename=$_FILES['simg']['name'];
		$tempname=$_FILES['simg']['tmp_name'];
		move_uploaded_file($tempname,"../dataimg/$imagename");
		$qry="UPDATE `student` SET `rollno`='".$rollno."' WHERE 'id' = '$id' ";
		$run=mysqli_query($con,$qry);
		if($run == true)
		{
			?>
			<script>
			alert('Data Updated Successfully');
			window.open("upform.php?sid=<?php echo $data['id'] ;?>","_self");
			</script>
			<?php
		}
		
		
		else{
			?>
			<script>
			 alert('Problem occur');
			 </script>
			<?php
		}
?>