<html>
<body>
<?php
$source = $_GET["source"];
$fileName=basename($source);
highlight_file($source);
?>
</body>
</html>