<html>
<head>
	<meta charset="UTF-8">
	<title>Results</title>
</head>
<body>
<span>
	<?php 
		echo '安安'.$_GET["name"].'你好，於 '; 
		echo $_GET["bday"].' 出生的';
		echo $_GET["gender"].'孩兒~'; 
	?>
</span>

 <?php
 	$infofile = fopen("info.php", "a");
 	fwrite($infofile, $_GET["name"].", ");
 	fwrite($infofile, $_GET["bday"].", ");
 	fwrite($infofile, $_GET["gender"]."\n");
 	fclose($infofile);
 ?>
 <?php
 	$ans_name = $_GET["name"];
 	$ans_bday = $_GET["bday"];
 	$ans_gender = $_GET["gender"];
 	 
 	$con = mysql_connect("localhost:3306","root", "");
 		if (!$con) {
    	die('無法連接: ' . mysql_error());
  		}

  	mysql_select_db("localhost:3306", $con);
 	$query = 
 		"INSERT INTO `person_data`(`name`, `bday`, `gender`) VALUES ( '<?php echo $ans_name ?>', '<?php echo $ans_bday ?>', '<?php echo $ans_gender ?>');"
  	mysql_query($query);
  ?>
</body>
</html>