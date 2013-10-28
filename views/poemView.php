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

<p class="rateStars"> User Ratings: 
<span>
<a class="star-05" href="#">0.5</a>
<a class="star-10" href="#">1.0</a>
<a class="star-15" href="#">1.5</a>
<a class="star-20" href="#">2.0</a>
<a class="star-25" href="#">2.5</a>
<a class="star-30" href="#">3.0</a>
<a class="star-35" href="#">3.5</a>
<a class="star-40" href="#">4.0</a>
<a class="star-45" href="#">4.5</a>
<a class="star-50" href="#">5.0</a>

</span>

</p>

</div>


<div class="yourRatings">
Your Ratings: 

<body>

<img id="1" src="unrated-star.png" onmouseover="light(this.id)" onmouseout="off(this.id)" onclick="rate(this.id)"/>
<img id="2" src="unrated-star.png" onmouseover="light(this.id)" onmouseout="off(this.id)" onclick="rate(this.id)"/>
<img id="3" src="unrated-star.png" onmouseover="light(this.id)" onmouseout="off(this.id)" onclick="rate(this.id)"/>
<img id="4" src="unrated-star.png" onmouseover="light(this.id)" onmouseout="off(this.id)" onclick="rate(this.id)"/>
<img id="5" src="unrated-star.png" onmouseover="light(this.id)" onmouseout="off(this.id)" onclick="rate(this.id)"/>

<script type="text/javascript">
function light(id)
{
	document.getElementById(id).src="full-star.png";
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

<div id="rating" style="text-align:center;font-size:23px;border:solid black 1px;height:25px;width:50px;">
0
</div>

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


