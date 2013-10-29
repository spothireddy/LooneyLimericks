<h1><a href="index.php">
<?php 

echo SITENAME;
include_once("./controllers/main.php");

?>
</a>
</h1>

<hr/>

<?php

	$mainController = new main();
	
	if(isset($_GET['poemid'])){
		$poemInfo = $mainController->getPoemInfo();
		echo "<p><b> Your Chosen Poem: </b></p>";
		
		echo "<p>".$poemInfo['title']."  by ". $poemInfo['author']." </p><br />";
		echo "<p>" . $poemInfo['poem'] . "</p><br/>";

	}

	else{
		echo "<p> The Featured Poem: </p><br>";
	}


?>


<div class="userRatings">

User Ratings:
<img id="1" src=<?php  if( $mainController->getAverageRating() >= 1.0) echo "full-star.png"; else if( $mainController->getAverageRating() >= 0.5) echo "half-star.png"; else echo "unrated-star.png"; ?> /> 
<img id="2" src=<?php  if( $mainController->getAverageRating() >= 2.0) echo "full-star.png"; else if( $mainController->getAverageRating() >= 1.5) echo "half-star.png"; else echo "unrated-star.png"; ?> />
<img id="3" src=<?php  if( $mainController->getAverageRating() >= 3.0) echo "full-star.png"; else if( $mainController->getAverageRating() >= 2.5) echo "half-star.png"; else echo "unrated-star.png"; ?> />
<img id="4" src=<?php  if( $mainController->getAverageRating() >= 4.0) echo "full-star.png"; else if( $mainController->getAverageRating() >= 3.5) echo "half-star.png"; else echo "unrated-star.png"; ?> />
<img id="5" src=<?php  if( $mainController->getAverageRating() >= 5.0) echo "full-star.png"; else if( $mainController->getAverageRating() >= 4.5) echo "half-star.png"; else echo "unrated-star.png"; ?> />



</div>


<div class="yourRatings">
Your Ratings: 

<body>

<a href= <?php echo "index.php?poemid=".$_GET['poemid']."&yr=1";?>><img id="1" src=<?php  if(isset($_SESSION['yourRatings'][$_GET['poemid']]) and $_SESSION['yourRatings'][$_GET['poemid']] >= 1) echo "full-star.png"; else echo "unrated-star.png"; ?>  onclick="rate(this.id)"/></a>
<a href= <?php echo "index.php?poemid=".$_GET['poemid']."&yr=2";?>><img id="2" src=<?php  if(isset($_SESSION['yourRatings'][$_GET['poemid']]) and $_SESSION['yourRatings'][$_GET['poemid']] >= 2) echo "full-star.png"; else echo "unrated-star.png"; ?>  onclick="rate(this.id)"/></a>
<a href= <?php echo "index.php?poemid=".$_GET['poemid']."&yr=3";?>><img id="3" src=<?php  if(isset($_SESSION['yourRatings'][$_GET['poemid']]) and $_SESSION['yourRatings'][$_GET['poemid']] >= 3) echo "full-star.png"; else echo "unrated-star.png"; ?>  onclick="rate(this.id)"/></a>
<a href= <?php echo "index.php?poemid=".$_GET['poemid']."&yr=4";?>><img id="4" src=<?php  if(isset($_SESSION['yourRatings'][$_GET['poemid']]) and $_SESSION['yourRatings'][$_GET['poemid']] >= 4) echo "full-star.png"; else echo "unrated-star.png"; ?>  onclick="rate(this.id)"/></a>
<a href= <?php echo "index.php?poemid=".$_GET['poemid']."&yr=5";?>><img id="5" src=<?php  if(isset($_SESSION['yourRatings'][$_GET['poemid']]) and $_SESSION['yourRatings'][$_GET['poemid']] >= 5) echo "full-star.png"; else echo "unrated-star.png"; ?>  onclick="rate(this.id)"/></a>


<script type="text/javascript">
function light(id)
{
	document.getElementById(id).src = "full-star.png";
	if(id==2)
	{
		light(1);
	}
	else if(id==3)
	{
		light(1);
		light(2);
	}
	else if(id==4)
	{
		light(1);
		light(2);
		light(3);
	}
	else if(id==5)
	{
		light(1);
		light(2);
		light(3);
		light(4);
	}
}

function off(id)
{
	if(document.getElementById("rating").innerHTML==1)
	{
		none(2);
		none(3);
		none(4);
		none(5);
	}
	else if(document.getElementById("rating").innerHTML==2)
	{
		none(3);
		none(4);
		none(5);
	}
	else if(document.getElementById("rating").innerHTML==3)
	{
		none(4);
		none(5);
	}
	else if(document.getElementById("rating").innerHTML==4)
	{
		none(5);
	}
	else if(document.getElementById("rating").innerHTML==5)
	{
	}
	else
	{
		none(1);
		none(2);
		none(3);
		none(4);
		none(5);
	}
}

function none(id)
{
	document.getElementById(id).src="unrated-star.png";
}

function rate(id)
{
	document.getElementById("rating").innerHTML = id;
}

</script>


</body>

</div>

<?php
require_once("baseview.php");


class poemView extends baseview
{
	function __construct()
	{
		echo "hello";	
	}

}


?>


