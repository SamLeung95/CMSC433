<?php

	session_start();
	include('./HelpfulFunctions.php');
	$link = connectDB();

	
	$valid;
	
	
	if(!isset($_SESSION['fName'],$_SESSION['lName'],$_SESSION['phone'],$_SESSION['email'])){
			
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
		<title></title>
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
		Given the classes you entered in the
		previous page, you should be able to
		sign up for the following classes from 
		the various categories.
		
		</div>
		
		<!--Header-->
		
		<div class="Header">
		
			<span>SUMMARY</SPAN>
		
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
			
		</div>
	
		<!--PERSISTENT-->
	
		<?php
		
		if($valid==true){
		?>
				<!--Required CMSC-->
				<?php 
				$topic="Required CMSC";

				$arr=getPossibleClassesArray($link, $topic);

				if(!empty($arr)){
					
				
				
				?>
				
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
						
							
							
							foreach($arr as $row){
								echo '<span id="' . $row['name'] . '_span" >
									<label for="' . $row['name'] . '_span" class="collapse_label">' . $row['name'] . '</label>
								<br>';
							}
						?>
						
					</li>
				</ul>
				<?php
				
				}
				
				?>
				<!--Required CMSC-->
				
				<!--Required Math-->
				<?php $topic="Required Math";

				$arr=getPossibleClassesArray($link, $topic);
				
				if(!empty($arr)){
				?>
				
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
						
							
							foreach($arr as $row){
								echo '<span id="' . $row['name'] . '_span" >
									<label for="' . $row['name'] . '_span" class="collapse_label">' . $row['name'] . '</label>
								<br>';
							}
						?>
						
					</li>
				</ul>
				<?php
				
				}
				
				?>
				<!--Required Math-->
				
				<!--Required Stat-->
				<?php $topic="Required Stat"; 
				
				$arr=getPossibleClassesArray($link, $topic);
				
				if(!empty($arr)){
				
				?>
				
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
						
							
							foreach($arr as $row){
								echo '<span id="' . $row['name'] . '_span" >
									<label for="' . $row['name'] . '_span" class="collapse_label">' . $row['name'] . '</label>
								<br>';
							}
						?>
						
					</li>
				</ul>
				
				<?php
				
				}
				
				?>
				<!--Required Stat-->
				
				<!--Required Science-->
				<?php $topic="Required Science"; 
				
				$arr=getPossibleClassesArray($link, $topic);
				
				if(!empty($arr)){
				?>
				
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
						
							
							foreach($arr as $row){
								echo '<span id="' . $row['name'] . '_span" >
									<label for="' . $row['name'] . '_span" class="collapse_label">' . $row['name'] . '</label>
								<br>';
							}
						?>
						
					</li>
				</ul>
				<?php
				
				}
				
				?>
				<!--Required Science-->
				
				<!--Additional Science-->
				<?php $topic="Additional Science"; 
				
				$arr=getPossibleClassesArray($link, $topic);
				
				if(!empty($arr)){
				?>
				
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
						
							
							foreach($arr as $row){
								echo '<span id="' . $row['name'] . '_span" >
									<label for="' . $row['name'] . '_span" class="collapse_label">' . $row['name'] . '</label>
								<br>';
							}
						?>
						
					</li>
				</ul>
				<?php
				
				}
				
				?>
				<!--Additional Science-->
				
				<!--Science With Lab-->
				<?php $topic="Science With Lab"; 
				
				$arr=getPossibleClassesArray($link, $topic);
				
				if(!empty($arr)){
				?>
				
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
						
							
							foreach($arr as $row){
								echo '<span id="' . $row['name'] . '_span" >
									<label for="' . $row['name'] . '_span" class="collapse_label">' . $row['name'] . '</label>
								<br>';
							}
						?>
						
					</li>
				</ul>
				<?php
				
				}
				
				?>
				<!--Science With Lab-->
				
				<!--CMSC Elective-->
				<?php $topic="CMSC Elective"; 
				
				$arr=getPossibleClassesArray($link, $topic);
				
				if(!empty($arr)){
				?>
				
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
						
							
							foreach($arr as $row){
								echo '<span id="' . $row['name'] . '_span" >
									<label for="' . $row['name'] . '_span" class="collapse_label">' . $row['name'] . '</label>
								<br>';
							}
						?>
						
					</li>
				</ul>
				<?php
				
				}
				
				?>
				<!--CMSC Elective-->
				
				<!--CMSC Tech Elec-->
				<?php $topic="CMSC Tech Elec"; 
				
				$arr=getPossibleClassesArray($link, $topic);
				
				if(!empty($arr)){
				?>
				
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
						
							
							foreach($arr as $row){
								echo '<span id="' . $row['name'] . '_span" >
									<label for="' . $row['name'] . '_span" class="collapse_label">' . $row['name'] . '</label>
								<br>';
							}
						?>
						
					</li>
				</ul>
				<?php
				
				}
				
				?>
				<!--CMSC Tech Elec-->
				
				<!--Additional Math-->
				<?php $topic="Additional Math"; 
				
				$arr=getPossibleClassesArray($link, $topic);
				
				if(!empty($arr)){
				?>
				
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
						
							
							foreach($arr as $row){
								echo '<span id="' . $row['name'] . '_span" >
									<label for="' . $row['name'] . '_span" class="collapse_label">' . $row['name'] . '</label>
								<br>';
							}
						?>
						
					</li>
				</ul>
				<?php
				
				}
				
				?>
				<!--Additional Math-->
				
				<!--Tech Math Elective-->
				<?php $topic="Tech Math Elective"; 
				
				$arr=getPossibleClassesArray($link, $topic);
				
				if(!empty($arr)){
				?>
				
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
						
							
							foreach($arr as $row){
								echo '<span id="' . $row['name'] . '_span" >
									<label for="' . $row['name'] . '_span" class="collapse_label">' . $row['name'] . '</label>
								<br>';
							}
						?>
						
					</li>
				</ul>
				<?php
				
				}
				
				?>
				<!--Tech Math Elective-->
				
			
		<?php 
		}

		//shove stuff into db
		
		insertVars($link);
		
		$_SESSION['lastPage'] = 'summary.php';
		?>		
		
	</body>

</html>