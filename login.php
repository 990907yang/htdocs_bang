<?php
	require_once("./config.php");
	 $sql="select * from member where id= '{$_POST [ 'id' ] }' ";
	 $result=$pdo->query($sql);
	 if(isset($result) )
		 {
			 $mem=$result->fetch();

			 if($mem['password']==$_POST['password'])
			 {
				 $_SESSION['id']=$mem['id'];
				 $_SESSION['password']=$mem['password'];
				 $_SESSION['name']=$mem['name'];
			 }
			 else
			{
		?>
			 <script type="text/javascript">
				alert("비밀번호가 맞지 않습니다.");
				</script>
			<?php
			}
			?>

			<script type="text/javascript">
				history.go(-1);
			</script>
<?php
	 }
?>