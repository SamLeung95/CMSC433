<?php 
	session_start(); 
	

	$valid=TRUE;
	
?>

<html>

	<head>
		<title></title>
		<link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="./styles/main.css">
		<link rel="stylesheet" type="text/css" href="./styles/login.css">

	</head>
	<body>

			<!--validation of the input-->
			<?php

			$fName = $lName = $phone = $email = "";
			$fNameErr = $lNameErr = $phoneErr = $emailErr = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
				if (empty($_POST["fName"]))
				{
					$fNameErr = "Firstname is required";
					$valid = FALSE;
				} else {
					$fName = testInput($_POST["fName"]);

					if (!preg_match("/^[a-zA-Z ]*$/", $fName)) {
						$fNameErr = "Only letters and white space allowed";
						$valid = FALSE;
					}
				}

				if (empty($_POST["lName"]))
				{
					$lNameErr = "Lastname is required";
					$valid = FALSE;
				} else {
					$lName = testInput($_POST["lName"]);

					if (!preg_match("/^[a-zA-Z ]*$/", $lName)) {
						$lNameErr = "Only letters and white space allowed";
						$valid = FALSE;
					}
				}

				if (empty($_POST["phone"]))
				{
					$phoneErr = "Phone is required";
					$valid = FALSE;
				} else {
					$phone = testInput($_POST["phone"]);

					if(!preg_match("/^[\d]{3}-[\d]{3}-[\d]{4}$/", $phone)){
					
						$phoneErr = "Invalid phone number";
						$valid = FALSE;
					}
				}

				if (empty($_POST["email"]))
				{
					$emailErr = "Email is required";
					$valid = FALSE;
				} else {
					$email = testInput($_POST["email"]);

					if (!preg_match("/^([A-Z|a-z|0-9](\.|_){0,1})+[A-Z|a-z|0-9]\@([A-Z|a-z|0-9])+((\.){0,1}[A-Z|a-z|0-9]){2}\.[a-z]{2,3}$/", $email))
					{
     					$emailErr = "Invalid email format"; 
     					$valid = FALSE;
    				}
				}

			}

			function testInput($data)
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}



			$_SESSION['lastPage'] = 'index.php';
			?>

			<!--Updates database if input are valid-->


		<div id="blocker"></div>

		<div id="login">
			<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form">
			
			<!--Takes first name input-->
			<table>	
				<tr>
					
					<td>
					<label>First Name:&nbsp;</label>
					</td>
					
					<td>
					<input type="text" name="fName" value= "<?php echo $fName?>" placeholder="e.g. First Name"> 
					<span class="error">* <?php echo $fNameErr; ?></span>
				
				</tr>

				<!--Takes last name input-->
				
				<tr>
					
					<td>
					<label>Last Name:&nbsp;</label >
					</td>
					
					<td>
					<input type="text" name="lName" value= "<?php echo $lName?>" placeholder="e.g. Last Name"> 
					<span class="error">* <?php echo $lNameErr; ?></span>
				
				</tr>

				<!--Takes phone number input-->

				<tr>
					
					<td>
					<label>Phone:&nbsp;</label>
					</td>
					
					<td>
					<input type="text" name="phone" value= "<?php echo $phone?>" placeholder="e.g. xxx-xxx-xxxx">
					<span class="error">* <?php echo $phoneErr; ?></span>
				
				</tr>
				
				<!--Takes email input-->
				
				<tr>
					
					<td>
					<label>Email:&nbsp;</label>
					</td>
					
					<td>
					<input type="text" name="email" value= "<?php echo $email?>" placeholder="e.g. email@provider.com">
					<span class="error">* <?php echo $emailErr; ?></span>
					</td>
					
				</tr>
			</table>
			<?php
				
				#all things valid so pass the values into a session			
				if ($_SERVER["REQUEST_METHOD"] == "POST" && $valid == TRUE)
				{	
					$_SESSION["fName"] = $_POST["fName"];
					$_SESSION["lName"] = $_POST["lName"];
					$_SESSION["phone"] = $_POST["phone"];
					$_SESSION["email"] = $_POST["email"];
					$_SESSION["valid"] = $valid;
					echo"
						<script>
							window.location = './class_select.php';
						</script>
					";
					exit;
				}
				
			
			
			?>
			
			<br>
			<input type="submit" value="Submit" class="submit_button"/>
			
		</form>			
		</div>	
	</body>

</html>