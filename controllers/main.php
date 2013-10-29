<?php

include_once("./models/mainModel.php");
class main{

	function theController(){

		$model = new mainModel();

		if(isset($_GET['poemid'])){
			$model->getPoemInformation($_GET['poemid']);
		}

		

	}


	function getMostRecent(){
		$model = new mainModel();
		return $model->getMostRecent();
	}

	function getPoemInfo(){
		$model = new mainModel();
		$poemInfo = $model->getPoemInformation($_GET['poemid']);
		return $poemInfo;
		

	}

	function getTopRated(){
		$model =new mainModel();
		return $model->getTopRated();
	}

	function getRandomPoem(){
		$model = new mainModel();
		$randomPoem = $model->getRandomPoem();

		foreach($randomPoem as $key => $value){
			return $key;
		}
		
	}

}




?>