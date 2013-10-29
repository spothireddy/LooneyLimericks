<?php

class mainModel{

function getTitles(){
	$con = mysqli_connect(HOST, USER, PASSWORD);
	mysqli_select_db($con, DBNAME);
	$result = mysqli_query($con,"SELECT * FROM ll_table");
	while($row = mysqli_fetch_array($result))
	  {
	  echo $row['id'] . " " . $row['title'];
	  echo "<br>";
	  }

	 mysqli_close($con);
}


	function getTopRated(){
		$topRated = array();
		$con = mysqli_connect(HOST, USER, PASSWORD);
		mysqli_select_db($con, DBNAME);
		$result = mysqli_query($con,"SELECT id, title FROM ll_table ORDER BY userRating DESC LIMIT 10");
		
		
		while($row = mysqli_fetch_array($result)){
			$topRated[$row['id']] = $row['title'];
			
		}


		mysqli_close($con);

		return $topRated;
	}

	function getMostRecent(){
		$mostRecent = array();
		$con = mysqli_connect(HOST, USER, PASSWORD);
		mysqli_select_db($con, DBNAME);
		$result = mysqli_query($con,"SELECT id, title FROM ll_table ORDER BY id DESC LIMIT 10");
		
		
		while($row = mysqli_fetch_array($result)){
			$mostRecent[$row['id']] = $row['title'];
			
		}


		mysqli_close($con);

		return $mostRecent;
	}

	function getPoemInformation($id){
		$mostRecent = array();
		$con = mysqli_connect(HOST, USER, PASSWORD);
		mysqli_select_db($con, DBNAME);
		$result = mysqli_query($con,"SELECT * FROM ll_table WHERE id=".$id);
		
		
		while($row = mysqli_fetch_array($result)){
			$mostRecent['id'] = $row['id'];
			$mostRecent['title'] = $row['title'];
			$mostRecent['author'] = $row['author'];
			$mostRecent['poem'] = $row['poem'];
			
			
		}


		mysqli_close($con);

		return $mostRecent;

	}






}

?>