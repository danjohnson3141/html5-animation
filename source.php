<!document html>
<!-- #Description: A directory of all items in a folder (this program) -->
<head lang="en">
<html>
<head>
	<meta charset="utf-8">
	<title id="t1">Source Code</title>
	
	<style>
	.source {
		padding:15px;
		border: 3px solid white;
		background-color: lightgrey;
		border-radius:12px;
		-webkit-box-shadow: rgba(0,0,0,1) 3px 3px 0;
		-moz-box-shadow: rgba(0,0,0,1) 3px 3px 0;
		box-shadow: rgba(0,0,0,.5) 3px 3px 3px;
	}
	.center {
		vertical-align: middle;
	}
	body {
		font-family: Tahoma;
		font-size: 12px;
	}
	</style>
</head>

<?php
$source = $_GET["source"];
$fileName=basename($source);
prevLink();
echo '<div class="source">';
echo '<h1><img src="http://t1.gstatic.com/images?q=tbn:ANd9GcQW9Sw69W3DsOjClarxlWDJI6CqzbqxIJH5H3wLuJtk13UNxIh3" alt="[source]" style="width: 55px" class="center">';
echo " $fileName</h1>";
echo '</div><br>';
echo '<div class="source">';
highlight_file($source, true);
highlight_file($source);
//echo '<pre>' . htmlspecialchars(file_get_contents($source)) . '</pre>';
echo '</div><br><br>';
prevLink();

function prevLink() {
	$previous = $_SERVER['HTTP_REFERER'];
	$prevHtml='<a href="'.$previous.'" class="center" title="Return to Menu">';
	echo $prevHtml.'<img src="menu.jpg" alt="[source]" style="width: 55px" class="center"></a>';
	echo '&nbsp;';
	echo '<span class="center">';
	echo $prevHtml.'Return to Menu</a>';
	echo '</span>';
}
?>