<?php
include_once("./controllers/main.php");
include_once("./models/poem_model.php");

class looneylim extends main{

	function theController(){
		$_SESSION['view'] = "uploadView";

		if(isset($_POST['title'])){

			$model = new poem_model();
			$model->addPoem($_POST['title'], $_POST['author'], $_POST['poem']);
		}

	}





}


?>