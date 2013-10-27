<!DOCTYPE html PUBLIC "-//W3C//DTD//XHTML1.1//EN" 
"http://www.w3.org./TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
<title>Looney Limericks</title>
<header>Looney Limericks</header>

<script type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>

<body>

<div class="topTen">
<p>Top 10</p>
</div>
<div class="highestRated">
<b>Highest Rated Poems</b>
<table>
<?php
	for($i=1; $i<=10; $i++)
	{

?>
<tr><td><?php echo $i . ". "; ?></td></tr>

<?php } ?>

</table>
</div>

<div class="mostRecSubmit">
<b>Most Recently Submitted Poems</b>
<table>
<?php
	for($i=1; $i<=10; $i++)
	{

?>
<tr><td><?php echo $i . ". "; ?></td></tr>

<?php } ?>

</table>
</div>

<div id="button">
<input type="submit" value="Choose a Random Poem"/>

<form action="index.php" method="GET">
<input type="hidden" name="c" value="looneylim" />
<input type="hidden" name="view" value="uploadView" />
<input type="submit" value="Upload a Poem!"/>
<form>
</div>

</body>
</html>