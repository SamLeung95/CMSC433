<html>

	<head>
		<title></title>
		<link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="./styles/main.css">
		<link rel="stylesheet" type="text/css" href="./styles/login.css">

	</head>
	<body>
		<div id="blocker"><a href="./class_select.php">Temp link to class select</a></div>
		
		<div id="login">
			<form method="post" id="form">
			
			<!--Takes first name input-->
			
			<?php 
				
				if(isset($_POST['submit']) && !preg_match("[^\s\.@!#$%^&*():;\\/|<>]{3,}", $firstname)){
						
					echo '<error>First name is not valid</error>';
					$valid = FALSE;
						
				}
				
			?>
				
			<div>
				
				<label>First Name:&nbsp;</label >
				<input type="text" name="firstname" value= "<?php echo $firstname?>" placeholder="e.g. First Name"> 
			
			</div>
			
			<br>
			
			<!--Takes last name input-->
			
			<?php 
				
				if(isset($_POST['submit']) && !preg_match("[^\s\.@!#$%^&*():;\\/|<>]{3,}", $lastname)){
						
					echo '<error>Last name is not valid</error>';
					$valid = FALSE;
						
				}
				
			?>
				
			<div>
				
				<label>Last Name:&nbsp;</label >
				<input type="text" name="lastname" value= "<?php echo $lastname?>" placeholder="e.g. Last Name"> 
			
			</div>
			
			<br>

			<!--Takes phone number input-->

			<?php 
			
				if(isset($_POST['submit']) && !preg_match("/^[\d]{3}-[\d]{3}-[\d]{4}$/", $phone)){
					
					echo '<error>Phone number is not valid</error>';
					$valid = FALSE;
				}
			
			?>

			<div>
			
			<label>Phone:&nbsp;</label>
			<input type="text" name="phone" value= "<?php echo $phone?>" placeholder="e.g. xxx-xxx-xxxx">
			
			</div>
			
			<br>
			
			<!--Takes email input-->
			
				<?php 
				
					if(isset($_POST['submit']) && !preg_match("/^(?=^.{3,30}$)([\da-zA-z.]+@[\da-zA-z.]*[\da-zA-z]+\.[a-zA-z]+)$/", $email)){
						
						echo '<error>Email is not valid</error>';
						$valid = FALSE;
					}
				
				?>
			
			<div>
			
				<label>Email:&nbsp;</label>
				<input type="text" name="email" value= "<?php echo $email?>" placeholder="e.g. advisor@umbc.edu">
				
			</div>
			
			<br>
			
			<!--Updates database if input are valid-->
			<?php
			
				if(isset($_POST['submit']) && $valid == TRUE){
					
					//$sql = 'INSERT INTO `Advisors`(`Name`, `Occupation`, `Room`, `Phone`, `Email`) VALUES ("'.$name. '", "'.$occupation. '", "'.$room. '", "'.$phone. '", "'.$email. '")';
					$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
					
					echo '<div id="confirm">',
						$name , ' has been added.
					</div>';
					
				}
			
			?>
			
			<input type="submit" name="submit" value="Submit" id="submit"/>
			
		</form>
		
				
		</div>
		
		
	
	</body>

</html>