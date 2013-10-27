<?php

class poem_model extends mainModel{


	function addPoem($title, $author, $poem){
		$con = mysqli_connect(HOST, USER, PASSWORD);
		mysqli_select_db($con, DBNAME);
		$result = mysqli_query($con,"INSERT INTO `ll_table` (`id`, `title`, `author`, 
			`poem`, `featuredTime`, `userRating`) VALUES
			(NULL, '".$title."' , '".$author."', '".$poem."', NULL, NULL)");
		
		if(! $result )
			{
			  die('Could not enter data: ' . mysqli_error($con));
			}
			echo "Entered data successfully\n";
	 	mysqli_close($con);
		
	}


}
?>