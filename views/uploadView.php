<h1><a href="index.php">
<?php 

echo SITENAME;

?>
</a>
</h1>

<hr/>

<div class="bodyWrap">
<div class="wrapper">

<div id="update" class="update">
<form id="button" name="upload" action="index.php?c=looneylim" method="POST">
<input type="hidden" name="c" value="looneylim" />
<div id="title" class="title">
<label for="title">Title: </label>
<input type="text" name="title" id="enter"/><br/>
</div>

<div id="author" class="author">
<label for="author">Author: </label>
<input type="text" name="author" id="enter"/><br/>
</div>

<div id="poem" class="poem">
<label for="poem">Poem: </label>
<textarea cols="50" rows="25" name="poem" id="enter">

</textarea><br/>

</div>

<input type="submit" value="Submit Poem!" name="Submit" class="submit" onclick="noDuplicate(1);"/>

</form>

<script type="text/javascript">

function noDuplicate(submitted)
{
	if(submitted == "1")
	{
		upload.Submit.disabled = true
		alert("Thank you for your poem!")
	}
}

</script>


</div>
</div>
</div>


<?php
require_once("baseview.php");


class uploadView extends baseview
{
	function __construct()
	{
		echo "hello";
	}

}


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


?>
