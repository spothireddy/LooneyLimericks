<?php

include_once("./models/mainModel.php");
class main{

	/**
	* 
	*/
	function theController(){

		$model = new mainModel();

		if(isset($_GET['poemid'])){
			$model->getPoemInformation($_GET['poemid']);
		}

		if(isset($_GET['yr'])){
			return self::setYourRatings();
		}

		

	}


	function getMostRecent(){
		$model = new mainModel();
		return $model->getMostRecent();
	}

	function getPoemInfo(){
		$model = new mainModel();
		if(isset($_GET['poemid'])){
			$poemInfo = $model->getPoemInformation($_GET['poemid']);
			return $poemInfo;
		}
		
		

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

	function setYourRatings(){

			$_SESSION['yourRatings'][$_GET['poemid']] = $_GET['yr'];
			$model = new mainModel();
			$model->enterUserRatingToAvg($_GET['poemid'], $_GET['yr']);

			
	}

	function getAverageRating(){

		$model = new mainModel();
		return $model->getAverageRating($_GET['poemid']);

	}

}




?>