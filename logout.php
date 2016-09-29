<?php
	require_once('./config.php');
	/*unset($_SESSION ['id'] );
	unset($_SESSION ['password'] );
	unset($_SESSION ['name'] );*/

	$_SESSION=array(); //빈배열(array)를 넣으면 초기화
?>
<script type="text/javascript">
	history.go(-1);
</script>