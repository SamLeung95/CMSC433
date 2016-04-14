<?php
/*
function: connectDB
usage: call this function to return a connection to Nat's db with all the classes in it.
*/
function connectDB(){
	$link = mysql_connect("studentdb-maria.gl.umbc.edu", "bnat1", "bnat1") or die("could not connect");
	mysql_select_db("bnat1", $link) or die("could not connect to db");
	return $link;
}

	/*
	function: getAllClassesArray
	usage: pass in a connection and a category, and get returned an array with all classes within that category

	Note: Use id as name for input
	Note: may need to call this function a few times within a single dropdown. Ex: different types of science my be better in a single dropdown, idk

	all categories:
	Required CMSC
	Required Math
	Required Stat
	Required Science
	Additional Science
	Science With Lab
	
	CMSC Elective
	CMSC Tech Elec
	
	Additional Math
	Tech Math Elective
	
	*/
function getAllClassesArray($conn, $category){
	$query = "select id, name, credits from Classes where category = '" . $category . "';";
	$result = mysql_query($query, $conn);
	$classArray = array();
	while($row = mysql_fetch_assoc($result)){
		array_push($classArray, $row);
	}
	return $classArray;
}


/*
function: getPossibleClassesArray
usage: after the form is submitted, pass in connection and category, and this gives an array with all classes within the category the user can take. 
*/
function getPossibleClassesArray($conn, $category){
	/*
		$_POST['classId'] == 'Yes';
	*/
	$classArray = array();
	$query = "select id, name, credits from Classes where category = '" . $category . "';";
	$result = mysql_query($query, $conn);
	// loop through all classes in that category
	while($row = mysql_fetch_assoc($result)){
		$classId = $row['id'];
		// make sure class not already taken
		if(!$_POST[$classId]){
			// make sure prereqs are met
			$hasPrereq = true;
			$has447Level = false;

			//special case: 447 requires at least one other 400 level course
			if($classId == '101927'){
				// check if the level of any of the things in post is 400
				foreach($_POST as $class=>$hasTaken){
					$levelQuery = "select level from Classes where id = " . $class .";";
					$levelResult = mysql_query($levelQuery, $conn);
					$level = mysql_result($levelResult, 0);
					if($level == '400'){
						$has447Level = true;
					}
				}
				$hasPrereq = $has447Level;
			}


			$prereqQuery = "select prereqClassId from ClassPrereqs where classId = '".$classId."';";
			$prereqResult=mysql_query($prereqQuery, $conn);
			if (mysql_num_rows($result) != 0){
				while($prereqRow = mysql_fetch_assoc($prereqResult)){
					$prereqClassId = $prereqRow['prereqClassId'];
					//check if prereq is in post, ie, taken
					if(!$_POST[$prereqClassId]){
						$hasPrereq = false;
					}
				}
			}
			if($hasPrereq){
				array_push($classArray, $row);
			}
		}
	}	
	return $classArray;
}

/*
testing the previous functions
*/
function testFunctions(){
	$conn = connectDB();
	echo "<br>";
	
		//print checkboxes;
		if(!$_POST){
			$classes = getAllClassesArray($conn, "Required Science");
			echo "<form  method='post'>\n";
			echo "<input type='hidden' name='PostSet' value='yeah'>";
			foreach ($classes as $row){
				echo "<input type='checkbox' name='".$row['id']."'>".$row['name']."<br>\n";
			}
			$classes = getAllClassesArray($conn, "Required Math");
			foreach ($classes as $row){
				echo "<input type='checkbox' name='".$row['id']."'>".$row['name']."<br>\n";
			}
			echo "<input type='submit'></form>";
		}
		else{
			$classes = getPossibleClassesArray($conn, "Required Science");
			// var_dump($classes);
			foreach ($classes as $row){
				echo $row['name']."<br>";
			}
		}
	
}
// testFunctions();
?>