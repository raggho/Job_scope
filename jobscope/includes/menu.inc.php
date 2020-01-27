
<ul>
		<li><a href="index.php" class="first">Home</a></li>
	
		<?php
	
				if(!isset($_SESSION['employee']))
				{
					echo '<li><a href="employeeregister.php">New Employee</a></li>';
				}
	
		?>
		
				
		<?php
	
				if(!isset($_SESSION['employer']))
				{
					echo '<li><a href="employerregister.php">New Employer</a></li>';
				}
	
		?>
			            
				<li><a href="contact.php">Contact</a></li>

				
		<?php
				if(isset($_SESSION['employer']))
				{
					echo '<li><a href="postjob.php">Post Job</a></li>';
				}
	
		?>	
		
		<?php

				if(isset($_SESSION['employer']))
				{
					echo '<li><a href="manage.php">Manage Job</a></li>';
				}
	
		?>		
	


	

		
		<?php
	
				if(isset($_SESSION['status'])&& $_SESSION['unm']=='admin')
				{
					echo '<li><a href="admin/index.php">Admin</a></li>';
				}
	
		?>

		
		<?php
	
				if(isset($_SESSION['status']))
				{
					echo '<li><a href="process_logout.php">Logout</a></li>';
				}
	
				?>
</ul>
		