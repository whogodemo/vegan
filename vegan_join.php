<!DOCTYPE html>
<html>
<body>
 
<?php
	$id = $_POST['id'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$type = $_POST['type'];
	
	$mysqli = mysqli_connect("localhost","team04","team04","TEAM04");
	if(mysqli_connect_errno()){
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}else{
		$sql = "insert into userinfo values('".$id."', '".$password."', '".$name."', '".$type."')";
		$res = mysqli_query($mysqli, $sql);
		
		if($res==TRUE){
			echo "<script>alert('회원가입이 완료되었습니다.')</script>";
			echo "<script>location.href='vegan_login.html'</script>";
      
		}else{
			echo "<script>alert('회원가입 에러')</script>";
			return;
		}
		
		
		mysqli_close($mysqli);
	}
?>
 
</body>
</html>

