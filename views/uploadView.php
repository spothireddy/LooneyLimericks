<h1><a href="index.php">
<?php 

echo SITENAME;

?>
</a>
</h1>
<hr/>

<body>


<div class="bodyWrap">
<div class="wrapper">

<div id="update" class="update">

<script type="text/javascript">

function validatePoem()
{
	var x = document.forms["upload"]["title"].value;
	var y = document.forms["upload"]["author"].value;
	//var z = document.getElementsByName["upload"]["poem"].value;
	
	if(x == null || x == "")
	{
		alert("Please include a title!");
		return false;
	}
	if(y == null || y == "")
	{
		alert("Give credit where it's due. Include the author.!");
		return false;
	}

	/**
	if(z == null || z == "")
	{
		alert("Include a poem please!");
		return false;
	}
	**/
}


</script>


<form id="button" name="upload" action="index.php?c=looneylim" onsubmit="return validatePoem()" method="POST">
<input type="hidden" name="c" value="looneylim" autocomplete="off"/>
<div id="title" class="title">
<label for="title">Title: </label>
<input type="text" name="title" id="enter" autocomplete="off" /><br/>
</div>

<div id="author" class="author">
<label for="author">Author: </label>
<input type="text" name="author" id="enter" autocomplete="off"/><br/>
</div>

<div id="poem" class="poem">
<label for="poem">Poem: </label>
<textarea cols="50" rows="25" name="poem" id="enterPoem"></textarea>

</div>

<input type="submit" value="Submit Poem!" name="submit" class="submit"/>

<input type="submit" value="Submit Poem!" name="Submit" class="submit"/>

</form>

</div>
</div>
</div>



</body>

<?php
require_once("baseview.php");


class uploadView extends baseview
{
	function __construct()
	{
		echo "hello";
	}

}

?>
