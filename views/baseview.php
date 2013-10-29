<?php
include_once("./controllers/main.php");

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head> 
<body>

<div class="wrapper">
<p align="center">Top 10</p>

<table cellpadding="2" align="left">
<tr><th>Highest Rated Poems</th></tr>
<?php
	$mainController = new main();
	$topRated = $mainController->getTopRated();
	$i=1;
	foreach($topRated as $key => $value){
?>
	<tr><td><?php echo $i . ". "; ?> <a href= <?php echo "index.php?poemid=".$key.">"; echo $value; ?></a></td></tr>
<?php
	$i++;
	}

?>

</table>	

<table cellpadding="2" align="right">

<th>Most Recently Submitted Poems</th></tr>

<?php

	$mostRecent = $mainController->getMostRecent();
	$i=1;
	foreach($mostRecent as $key => $value){
?>
	<tr><td><?php echo $i . ". "; ?> <a href= <?php echo "index.php?poemid=".$key.">"; echo $value; ?></a></td></tr>
<?php
	$i++;
	}

?>


</table>
<form action="index.php" method="GET">
<input type="hidden" name="c" value="main" />
<input type="hidden" name="poemid" value= <?php echo $mainController->getRandomPoem(); ?> />
<input type="submit" class="random" value="Choose a Random Poem" />
</form>

<form action="index.php" method="GET">
<input type="hidden" name="c" value="looneylim" />
<input type="hidden" name="view" value="uploadView" />
<input type="submit" class="upload"  value="Upload a Poem!"/>
</form>

</div>
<br/>
<!--
</div>
</div>
-->

</body>
</html>

<?php

abstract class baseview
{
	function __construct()	
	{
		echo "hello";
	}

	
}

?>