
<h1>Upload View <a href="index.php">
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
<textarea cols="50" rows="25" name="poem" id="enter"></textarea><br/>
</div>



<input type="submit" value="Submit Poem!" class="submit"/>

</form>

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


?>
