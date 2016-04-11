<script>
	function Collapse_Required(){
		
		
		
	}
	function Expand_Required(){
		
		var innercode="";
		innercode+="<div class='expand_container'>";
		innercode+="</div>";
		
		document.getElementById("Required_Expanded").innerHTML = innercode;
		
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
	
		<div id="Required">
			<div class="group">
				<span class="group_label">Required<span>
		
					<div class="dropdown_button" onclick=Expand_Required()>
						<i class="fa fa-caret-down"></i>
					</div>
					
			</div>
			<div id="Required_Expanded" class=""></div>
		</div>
		
		<div class="group" id="Math">
			<span class="group_label">Math<span>

				<div class="dropdown_button">
					<i class="fa fa-caret-down"></i>
				</div>

		</div>
	
	</body>

</html>