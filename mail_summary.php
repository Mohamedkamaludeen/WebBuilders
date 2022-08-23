<?php 
include("dbms.php");
?>
<html>
	<head>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		
		<section id="summary">
		<div class="container">
		
			<table class="table table-hover">
				<tr>
					<th>Name</th>
					<th>Mobile</th>
					<th>Email</th>
					<th>City</th>
					<th>Message</th>
				</tr>
				
				<tr>
				<?php
		             $result=mysqli_query($con,"select * from `userdetails`");
			         while($row  = mysqli_fetch_assoc($result)){
		        ?>
					<td><?php echo $row["user_Name"] ?></td>
					<td><?php echo $row["phone"] ?></td>
					<td><?php echo $row["email"] ?></td>
					<td><?php echo $row["city"] ?></td>
					<td><?php echo $row["message"] ?></td>
				</tr>
			   <?php } ?>
				
			</table>
		</div>
		</section>
	</body>