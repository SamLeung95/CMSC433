<?php

	include('./HelpfulFunctions.php');
	$link = connectDB();
	
	$topic='';
?>

<script>
	
	function Collapse(element){
		
		element.nextElementSibling.style.display = "none";
		element.onclick = function(){ Expand(element); } ;
		
	}
	function Expand(element){
		
		element.nextElementSibling.style.display = "block";
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
	
		<form action="">
			<!--Required CMSC-->
			<?php $topic="Required CMSC"?>
			
			<ul id="Required_CMSC" class="menu_bar">
				<li class="group" onclick="Expand(this)">
					<label for="group" class="group_label"><?php print($topic) ?><span class="mask"></span></label>
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
								<label for="' . $row['name'] . '_checkbox" class="checkbox_label">' . $row['name'] . '</label>
							<br>';
						}
					?>
					
				</li>
			</ul>
			<!--Required CMSC-->
			
			<!--Required Math-->
			<?php $topic="Required Math"?>
			
			<ul id="Required_CMSC" class="menu_bar">
				<li class="group" onclick="Expand(this)">
					<span class="group_label"><?php print($topic) ?></span>
					<div class="dropdown_button">
						<i class="fa fa-caret-down"></i>
					</div>
				</li>
				<li id="Required_CMSC_Expanded" class="expand_container">
				
					<?php
					
						$arr=getAllClassesArray($link, $topic);
						foreach($arr as $row){
							foreach($row as $element){
								print_r($element);
							}
						}
					?>
				
				</li>
			</ul>
			<!--Required Math-->
			
			 <input type="submit" value="Submit">
			
		</form>
	</body>

</html>