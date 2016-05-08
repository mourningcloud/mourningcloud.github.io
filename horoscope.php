<html>
<head>
	<meta charset="UTF-8">
	<title>Results</title>
</head>
<body>
	<span><?php 
	echo '安安'.$_GET["name"].'你好，於 '; 
	echo $_GET["bday"].' 出生的';
	echo $_GET["gender"].'孩兒~'; 
	?></span>
 	<?php
 	 $infofile = fopen("info.php", "a");
 	 fwrite($infofile, $_GET["name"].", ");
 	 fwrite($infofile, $_GET["bday"].", ");
 	 fwrite($infofile, $_GET["gender"]."\n");
 	 fclose($infofile);
 	?>
</body>
</html>