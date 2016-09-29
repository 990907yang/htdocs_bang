<!doctype html>
<html lang="ko">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
	<?php
		for($i=1; $i<=9; $i++){
				echo "<ul>";
			for($j=1; $j<=9; $j++){
				echo "<li>$i*$j=";
				echo $i*$j."</li>"."<br>";
			}
			echo "</ul>";
		}
	?>
 </body>
</html>
