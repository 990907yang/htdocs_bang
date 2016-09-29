<?php
	require_once("./config.php");
	$sql="select*from board_list where idx={$_GET['idx']}";
	echo $sql;
	$result=$pdo->query($sql);
	$row=$result->fetch();
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Yang</title>
  <style type="text/css">
	#board{  }
	.title { border-bottom:1px solid black; border-top:1px solid black; }
  </style>
 </head>
 <body>
 <div>
 	<div id="borad">
 		<p class="title">제목: <?=$row['title']?></p>
 		<p><?=$row['name'],$row['date']?></p>
 		<p><?=$row['text']?></p>

		<script type="text/javascript">
		function fn(){
			history.go(-1);
		}
		</script>
			<button onclick="fn()">목록</button>

			<?php
			if($_SESSION['id']==$row['id']) {
				?>
			<button>수정</button>
			<a href="dlete.php"><button>삭제</button></a>
			<?php
				}
				?>
				
		
 	</div>
 </div>
  
 </body>
</html>
