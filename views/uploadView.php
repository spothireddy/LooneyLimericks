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
	var x = document.forms["upload"]["poemTitle"].value;
	var y = document.forms["upload"]["poemAuthor"].value;
	var z = document.getElementsByName('poem').value;
	
	if(x == null || x == "")
	{
		alert("Include the title of the poem!");
		return false;
	}
	if(y == null || y == "")
	{
		alert("Include the name of the author!");
		return false;
	}
	if(z == null || z == "")
	{
		alert("What is the poem?! Write it down!")
		return false;	
	}
}


</script>


<form id="button" name="upload" action="index.php?c=looneylim" onsubmit="return validatePoem()" method="POST">
<input type="hidden" name="c" value="looneylim" autocomplete="off"/>
<div id="title" class="title">
<label for="title">Title: </label>
<input type="text" name="poemTitle" id="enter" autocomplete="off" /><br/>
</div>

<div id="author" class="author">
<label for="author">Author: </label>
<input type="text" name="poemAuthor" id="enter" autocomplete="off"/><br/>
</div>

<div id="poem" class="poem">
<label for="poem">Poem: </label>
<textarea cols="50" rows="25" name="poem" id="enterPoem"></textarea>

</div>

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


/*
$poemInfo = $mainController->getPoemInfo();
$data = array();

foreach(explode('', $poemInfo) as $_word)
{
	$data[soundex($_word)]['poem'][] = $_word;
}

$soundex_list = "" . implode("," , array_keys($data). "'");
$sql = "SELECT id, poem 
		FROM sound_list
		WHERE SOUNDEX(poem) IN($soundex_list)";
		
$sql_result = $dbLink->query($sql);

if($sql_result)
{
	foreach($data as $_soundex => &$_elem)
	{
		while($_row = $sql_result->fetch_assoc())
	{
		if(soundex($_row['poem']) == $_soundex)
		{
			$_row['matches'] = 'poem';
			$_elem['matches'][] = $_row;
		}
	}
	}
	
}
*/


?>
