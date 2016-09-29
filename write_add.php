<?php
	require_once("./config.php");
	$date=new DateTime();
	$date=$date->format("Y-m-d");
	$sql="insert into board_list set title='{$_POST['title']}', text='{$_POST['text']}', date='{$date}', id='{$_SESSION['id']}', name='{$_SESSION['name'] }'";
	$pdo->query($sql);
	
?>
<script type="text/javascript">
	location.href="./index.php";
</script>