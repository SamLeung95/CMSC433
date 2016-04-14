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
	
		<?php
		
		if($valid==true){
		?>
			<form action="./summary.php">
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
						
							$arr=getPossibleClassesArray($link, $topic);
							foreach($arr as $row){
								echo '<span id="' . $row['name'] . '_span" >
									<label for="' . $row['name'] . '_span" class="collapse_label">' . $row['name'] . '</label>
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
						
							$arr=getPossibleClassesArray($link, $topic);
							foreach($arr as $row){
								echo '<span id="' . $row['name'] . '_span" >
									<label for="' . $row['name'] . '_span" class="collapse_label">' . $row['name'] . '</label>
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
						
							$arr=getPossibleClassesArray($link, $topic);
							foreach($arr as $row){
								echo '<span id="' . $row['name'] . '_span" >
									<label for="' . $row['name'] . '_span" class="collapse_label">' . $row['name'] . '</label>
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
						
							$arr=getPossibleClassesArray($link, $topic);
							foreach($arr as $row){
								echo '<span id="' . $row['name'] . '_span" >
									<label for="' . $row['name'] . '_span" class="collapse_label">' . $row['name'] . '</label>
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
						
							$arr=getPossibleClassesArray($link, $topic);
							foreach($arr as $row){
								echo '<span id="' . $row['name'] . '_span" >
									<label for="' . $row['name'] . '_span" class="collapse_label">' . $row['name'] . '</label>
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
						
							$arr=getPossibleClassesArray($link, $topic);
							foreach($arr as $row){
								echo '<span id="' . $row['name'] . '_span" >
									<label for="' . $row['name'] . '_span" class="collapse_label">' . $row['name'] . '</label>
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
						
							$arr=getPossibleClassesArray($link, $topic);
							foreach($arr as $row){
								echo '<span id="' . $row['name'] . '_span" >
									<label for="' . $row['name'] . '_span" class="collapse_label">' . $row['name'] . '</label>
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
						
							$arr=getPossibleClassesArray($link, $topic);
							foreach($arr as $row){
								echo '<span id="' . $row['name'] . '_span" >
									<label for="' . $row['name'] . '_span" class="collapse_label">' . $row['name'] . '</label>
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
						
							$arr=getPossibleClassesArray($link, $topic);
							foreach($arr as $row){
								echo '<span id="' . $row['name'] . '_span" >
									<label for="' . $row['name'] . '_span" class="collapse_label">' . $row['name'] . '</label>
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
						
							$arr=getPossibleClassesArray($link, $topic);
							foreach($arr as $row){
								echo '<span id="' . $row['name'] . '_span" >
									<label for="' . $row['name'] . '_span" class="collapse_label">' . $row['name'] . '</label>
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

		//shove stuff into db
		$conn = connectDB();
		$insertVars();
		?>		
		
	</body>

</html>