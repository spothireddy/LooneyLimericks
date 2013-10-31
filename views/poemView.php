<h1><a href="index.php" >
<?php 

echo SITENAME;
include_once("./controllers/main.php");

?>
</a>
</h1>

<hr/>

<?php

	$mainController = new main();
	
	if(isset($_GET['poemid']))
	{
		$poemInfo = $mainController->getPoemInfo();

		echo "<p><b> Poem: </b></p>";
		echo "<p>".$poemInfo['title']."  by ". $poemInfo['author']." </p>";
		echo "<pre>" . $poemInfo['poem'] . "</pre>";
		

	}

	else
	{
		echo "<p> The Featured Poem: </p><br>";
		header('Location: index.php?poemid=1');
		//First, use the method to obtain a random poem.
		$ranPoem = $mainController->getRandomPoem();
		
		//Check the database and get the featured poem. 
		//If it is null, then feature that poem.
		//If not, then do some calculaitons with the time 
		//and make sure that the random chosen poem was 
		//featured last more than 15 minutes ago. 
		//Update with new timestamp.
		if($ranPoem['poemid'] == NULL)
		{
			echo "<pre>" . $poemInfo['poem'] . "</pre>";
		}
		else
		{
			$date = date_create("");
			date_time_set($date, "", "");
			echo date_format($date, "Y-m-d H:i:s");
		}
		
			$date = date_create("");
			date_time_set($date, "", "");
			echo date_format($date, "Y-m-d H:i:s");
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


<!-- Your star rating controls the display of blinking stars -->
<script type="text/javascript">

/**
* If the mouse is clicked on the star, the star lights up.
*/
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

/**
* If the user selects one star behind, it turns off the star in front.
*/
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

/**
* Leaves the other stars empty.
*/
function none(id)
{
	document.getElementById(id).src="unrated-star.png";
}

/**
* Selects the number of stars.
*/
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


