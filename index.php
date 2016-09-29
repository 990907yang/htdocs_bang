<?php
	require_once("./config.php");//틀리면 바로 stop,   ./ 경로가 어떻든 불러옴
	//include_once("./config.php")	//틀려도 실행
	$sql="select idx,name,title,date from board_list order by idx desc";
	$result=$pdo->query($sql);
	$rows=$result->fetchall(PDO::FETCH_ASSOC); //db에서 끌어쓸때 fetch
	//echo"<pre>"; //예쁘게 출력하기위해
	//print_r ($rows); //배열출력
	//print_r($_SESSION);
?>
<!doctype html>
<html lang="ko">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>php1월</title>
  <style type="text/css">
  * {margin:0; padding:0;}
	td{ border-bottom:1px solid #ccc; text-align:center; background-color:aqua;}
	thead{ background-color:lightpink; }
	.board { width:100%; }
  </style>
 </head>
 <body>
	<div id="wrap">
	<div id="header">
	<?php
		if( !isset($_SESSION['id']) ){

		?>
		<form action="login.php" method="post">
			<p>
				<label for="id">아이디</label> <input type="text" name="id" />
			</p>
			<p>
				<label for="password">비밀번호</label> <input type="password" name="password" />
			</p>
			<button>로그인</button>
		</form>
		<?php
				}
		else{
			echo $_SESSION['name']."님 환영합니다.";
		?>
		<form action="logout.php">
			<button>로그아웃</button>
		</form>

		<?php
		}
		?>
	</div>
		<div id="content">
			<table class="board">
				<thead>
					<tr>
						<th>번호</th>
						<th>제목</th>
						<th>작성자</th>
						<th>날짜</th>
					</tr>
				</thead>
					<?php
					foreach($rows as $row){
						?>
				<tr>
					<td><?=$row['idx']?></td>
					<td><a href="./board.php?idx=<?=$row['idx']?>"><?=$row['title']?></a></td>
					<td><?=$row['name']?></td>
					<td><?=$row['date']?></td>
				</tr>
				<?php
			}
			?>
			</table>
			<?php
				if( isset($_SESSION['id'] )){
			?>
			<button><a href="./write.php">글쓰기</a></button>
			<?php
				}
			?>
		</div>
	</div>
  
 </body>
</html>
