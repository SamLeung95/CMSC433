<?php

	session_start();
	include('./HelpfulFunctions.php');
	$link = connectDB();
	
	$valid;
	
	
	if(!isset($_SESSION['fName']) && !isset($_SESSION['lName']) && !isset($_SESSION['phone']) && !isset($_SESSION['email']) && !isset($_SESSION['valid'])){
			
			header('Location:./index.php');
			exit;
			
	}
	
	
	else{	
		$valid=true;
	}
	
?>

<script>
	
	function Collapse(element){
		
		element.nextElementSibling.style.display = "none";
		element.onclick = function(){ Expand(element); } ;
		
	}
	function Expand(element){
		
		element.nextElementSibling.style.display = "inline-block";
		element.onclick = function(){ Collapse(element); } ;
		
	}

</script>


<html>

	<head>
		<title>UMBC COURSE SELECTION TOOL</title>
		<link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="./styles/main.css">
		<link rel="stylesheet" type="text/css" href="./styles/collapse.css">

	</head>
	<body>
		
	<!--PERSISTENT-->
	
		<!--Instructions-->
		<div class="instructions">
		
		Instructions: 
		<br><br>
		Please select which classes you have 
		already taken from the various categories. 
		Upon hitting 'submit', you will be able 
		to see which classes you are have the 
		prerequisites to take next semester. 
		
		</div>
		
		<!--Header-->
		
		<div class="Header">
		
			<span>CLASS SELECTION</SPAN>
		
		</div>
		
		<!--Student Info-->
		
		<div class="StudentInfo">
		
			First Name: <?php echo $_SESSION['fName']; ?>
			<br>
			Last Name: <?php echo $_SESSION['lName']; ?>
			<br>
			E-mail: <?php echo $_SESSION['email']; ?>
			<br>
			Phone #: <?php echo $_SESSION['phone']; ?>
			<br><br>
			<span style="color: green; font-size: 20px;">Your information has been submitted</span>
			
		</div>
	
	<!--PERSISTENT-->
		<?php
		
		if($valid==true){
		?>
			<form action="./summary.php" method='post'>
				<!--Required CMSC-->
				<?php $topic="Required CMSC"; ?>
				
				<ul id="<?php $topic; ?>" class="menu_bar">
					<li class="group" onclick="Expand(this)">
						<label for="group" class="group_label"><?php print($topic); ?><span class="mask"></span></label>
						<div class="dropdown_button">
							<i class="fa fa-caret-down"></i>
						</div>
					</li>
					<li class="expand_container">
					
						<!--Gets content of field from DB and turns into checkboxes-->
						
						<?php
						
							$arr=getAllClassesArray($link, $topic);
							foreach($arr as $row){
								echo '<input type="checkbox" name="' . $row['id'] . '" value="' . $row['id'] . '" id="' . $row['name'] . '_checkbox" class="class_checkbox">
									<label for="' . $row['name'] . '_checkbox" class="collapse_label">' . $row['name'] . '</label>
								<br>';
							}
						?>
						
					</li>
				</ul>
				<!--Required CMSC-->
				
				<!--Required Math-->
				<?php $topic="Required Math"; ?>
				
				<ul id="<?php $topic; ?>" class="menu_bar">
					<li class="group" onclick="Expand(this)">
						<label for="group" class="group_label"><?php print($topic); ?><span class="mask"></span></label>
						<div class="dropdown_button">
							<i class="fa fa-caret-down"></i>
						</div>
					</li>
					<li class="expand_container">
					
						<!--Gets content of field from DB and turns into checkboxes-->
						
						<?php
						
							$arr=getAllClassesArray($link, $topic);
							foreach($arr as $row){
								echo '<input type="checkbox" name="' . $row['id'] . '" value="' . $row['id'] . '" id="' . $row['name'] . '_checkbox" class="class_checkbox">
									<label for="' . $row['name'] . '_checkbox" class="collapse_label">' . $row['name'] . '</label>
								<br>';
							}
						?>
						
					</li>
				</ul>
				<!--Required Math-->
				
				<!--Required Stat-->
				<?php $topic="Required Stat"; ?>
				
				<ul id="<?php $topic; ?>" class="menu_bar">
					<li class="group" onclick="Expand(this)">
						<label for="group" class="group_label"><?php print($topic); ?><span class="mask"></span></label>
						<div class="dropdown_button">
							<i class="fa fa-caret-down"></i>
						</div>
					</li>
					<li class="expand_container">
					
						<!--Gets content of field from DB and turns into checkboxes-->
						
						<?php
						
							$arr=getAllClassesArray($link, $topic);
							foreach($arr as $row){
								echo '<input type="checkbox" name="' . $row['id'] . '" value="' . $row['id'] . '" id="' . $row['name'] . '_checkbox" class="class_checkbox">
									<label for="' . $row['name'] . '_checkbox" class="collapse_label">' . $row['name'] . '</label>
								<br>';
							}
						?>
						
					</li>
				</ul>
				<!--Required Stat-->
				
				<!--Required Science-->
				<?php $topic="Required Science"; ?>
				
				<ul id="<?php $topic; ?>" class="menu_bar">
					<li class="group" onclick="Expand(this)">
						<label for="group" class="group_label"><?php print($topic); ?><span class="mask"></span></label>
						<div class="dropdown_button">
							<i class="fa fa-caret-down"></i>
						</div>
					</li>
					<li class="expand_container">
					
						<!--Gets content of field from DB and turns into checkboxes-->
						
						<?php
						
							$arr=getAllClassesArray($link, $topic);
							foreach($arr as $row){
								echo '<input type="checkbox" name="' . $row['id'] . '" value="' . $row['id'] . '" id="' . $row['name'] . '_checkbox" class="class_checkbox">
									<label for="' . $row['name'] . '_checkbox" class="collapse_label">' . $row['name'] . '</label>
								<br>';
							}
						?>
						
					</li>
				</ul>
				<!--Required Science-->
				
				<!--Additional Science-->
				<?php $topic="Additional Science"; ?>
				
				<ul id="<?php $topic; ?>" class="menu_bar">
					<li class="group" onclick="Expand(this)">
						<label for="group" class="group_label"><?php print($topic); ?><span class="mask"></span></label>
						<div class="dropdown_button">
							<i class="fa fa-caret-down"></i>
						</div>
					</li>
					<li class="expand_container">
					
						<!--Gets content of field from DB and turns into checkboxes-->
						
						<?php
						
							$arr=getAllClassesArray($link, $topic);
							foreach($arr as $row){
								echo '<input type="checkbox" name="' . $row['id'] . '" value="' . $row['id'] . '" id="' . $row['name'] . '_checkbox" class="class_checkbox">
									<label for="' . $row['name'] . '_checkbox" class="collapse_label">' . $row['name'] . '</label>
								<br>';
							}
						?>
						
					</li>
				</ul>
				<!--Additional Science-->
				
				<!--Science With Lab-->
				<?php $topic="Science With Lab"; ?>
				
				<ul id="<?php $topic; ?>" class="menu_bar">
					<li class="group" onclick="Expand(this)">
						<label for="group" class="group_label"><?php print($topic); ?><span class="mask"></span></label>
						<div class="dropdown_button">
							<i class="fa fa-caret-down"></i>
						</div>
					</li>
					<li class="expand_container">
					
						<!--Gets content of field from DB and turns into checkboxes-->
						
						<?php
						
							$arr=getAllClassesArray($link, $topic);
							foreach($arr as $row){
								echo '<input type="checkbox" name="' . $row['id'] . '" value="' . $row['id'] . '" id="' . $row['name'] . '_checkbox" class="class_checkbox">
									<label for="' . $row['name'] . '_checkbox" class="collapse_label">' . $row['name'] . '</label>
								<br>';
							}
						?>
						
					</li>
				</ul>
				<!--Science With Lab-->
				
				<!--CMSC Elective-->
				<?php $topic="CMSC Elective"; ?>
				
				<ul id="<?php $topic; ?>" class="menu_bar">
					<li class="group" onclick="Expand(this)">
						<label for="group" class="group_label"><?php print($topic); ?><span class="mask"></span></label>
						<div class="dropdown_button">
							<i class="fa fa-caret-down"></i>
						</div>
					</li>
					<li class="expand_container">
					
						<!--Gets content of field from DB and turns into checkboxes-->
						
						<?php
						
							$arr=getAllClassesArray($link, $topic);
							foreach($arr as $row){
								echo '<input type="checkbox" name="' . $row['id'] . '" value="' . $row['id'] . '" id="' . $row['name'] . '_checkbox" class="class_checkbox">
									<label for="' . $row['name'] . '_checkbox" class="collapse_label">' . $row['name'] . '</label>
								<br>';
							}
						?>
						
					</li>
				</ul>
				<!--CMSC Elective-->
				
				<!--CMSC Tech Elec-->
				<?php $topic="CMSC Tech Elec"; ?>
				
				<ul id="<?php $topic; ?>" class="menu_bar">
					<li class="group" onclick="Expand(this)">
						<label for="group" class="group_label"><?php print($topic); ?><span class="mask"></span></label>
						<div class="dropdown_button">
							<i class="fa fa-caret-down"></i>
						</div>
					</li>
					<li class="expand_container">
					
						<!--Gets content of field from DB and turns into checkboxes-->
						
						<?php
						
							$arr=getAllClassesArray($link, $topic);
							foreach($arr as $row){
								echo '<input type="checkbox" name="' . $row['id'] . '" value="' . $row['id'] . '" id="' . $row['name'] . '_checkbox" class="class_checkbox">
									<label for="' . $row['name'] . '_checkbox" class="collapse_label">' . $row['name'] . '</label>
								<br>';
							}
						?>
						
					</li>
				</ul>
				<!--CMSC Tech Elec-->
				
				<!--Additional Math-->
				<?php $topic="Additional Math"; ?>
				
				<ul id="<?php $topic; ?>" class="menu_bar">
					<li class="group" onclick="Expand(this)">
						<label for="group" class="group_label"><?php print($topic); ?><span class="mask"></span></label>
						<div class="dropdown_button">
							<i class="fa fa-caret-down"></i>
						</div>
					</li>
					<li class="expand_container">
					
						<!--Gets content of field from DB and turns into checkboxes-->
						
						<?php
						
							$arr=getAllClassesArray($link, $topic);
							foreach($arr as $row){
								echo '<input type="checkbox" name="' . $row['id'] . '" value="' . $row['id'] . '" id="' . $row['name'] . '_checkbox" class="class_checkbox">
									<label for="' . $row['name'] . '_checkbox" class="collapse_label">' . $row['name'] . '</label>
								<br>';
							}
						?>
						
					</li>
				</ul>
				<!--Additional Math-->
				
				<!--Tech Math Elective-->
				<?php $topic="Tech Math Elective"; ?>
				
				<ul id="<?php $topic; ?>" class="menu_bar">
					<li class="group" onclick="Expand(this)">
						<label for="group" class="group_label"><?php print($topic); ?><span class="mask"></span></label>
						<div class="dropdown_button">
							<i class="fa fa-caret-down"></i>
						</div>
					</li>
					<li class="expand_container">
					
						<!--Gets content of field from DB and turns into checkboxes-->
						
						<?php
						
							$arr=getAllClassesArray($link, $topic);
							foreach($arr as $row){
								echo '<input type="checkbox" name="' . $row['id'] . '" value="' . $row['id'] . '" id="' . $row['name'] . '_checkbox" class="class_checkbox">
									<label for="' . $row['name'] . '_checkbox" class="collapse_label">' . $row['name'] . '</label>
								<br>';
								
							}
						?>
						
					</li>
				</ul>
				<!--Tech Math Elective-->
				
				
				<input type="submit" value="Submit" class="submit_button">  
				
			</form>
			
		<?php 
		}
		$_SESSION['lastPage'] = 'class_select.php';
		?>		
		
	</body>

</html>