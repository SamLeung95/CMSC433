<?php

	include('./HelpfulFunctions.php');
	$link = connectDB();
	
	$topic='';
?>

<script>
	/*
	var xmlhttp;
		
	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
		
		xmlhttp=new XMLHttpRequest();
		
	}
	
	else{// code for IE6, IE5

		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		
	}
	
	xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
           // document.getElementById("summary_container").innerHTML = xmlhttp.responseText;//How to get json object?
        }
    }
	
	//xmlhttp.open("GET","../contentchange.php?category=" + category,true);// Call HelpfulFunctions to get json?
	xmlhttp.send();
	*/
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
	
		<!--Required CMSC-->
		<?php $topic="Required CMSC"?>
		
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
							print_r($element . "<br>\n");
						}
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
							print_r($element . "<br>\n");
						}
					}
				?>
			
			</li>
		</ul>
		<!--Required Math-->
	
	</body>

</html>