<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>test score</title>
<style>
*{text-align:center;margin:inherit;border:medium;font-size:18px;
	}
	body{color:#FFFFFF;
		}

</style>
</head>
<?php
$score=1;
if($score>10){
	$color="green";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	
	echo"شما پذیرفته شدید";
}
else{
		$color="red";
		echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";

	
		echo"شما پذیرفته نشدید";
}
?>
<body style="background-color:<?php echo($color);?>;">
</body>
</html>
