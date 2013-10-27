<?php


session_start();
error_reporting(E_ALL);
require_once('./config/config.php');
require_once('./config/create.php');



if(isset($_GET['c'])){

	$c = $_GET['c'];

}
else{
	$c = "main";
	$_SESSION['view'] = 'poemView';
}


controller($c);

function controller($c){
	include("./controllers/".$c.".php");
	$mController = new $c();
	$mController->theController();
	displayView($_SESSION['view']);
	

}




function displayView($viewname){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Looney Limericks</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<?php
		require_once("./views/{$viewname}.php");
	?>

<div class="footer">
&copy; 2013 Mari and Sindhu. All rights reserved.
</div>

</body>
</html>

<?php
}


?>


