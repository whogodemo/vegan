<!DOCTYPE html>
<html>
<body>
 
<?php
	$id = $_POST['id'];
	$password = $_POST['password'];
	
	$mysqli = mysqli_connect("localhost","team04","team04","TEAM04");
	if(mysqli_connect_errno()){
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}else{
		$sql = "SELECT * FROM userinfo WHERE id ='".$id."' and password = '".$password."'";
		$res = mysqli_query($mysqli, $sql);
		
		if(mysqli_num_rows($res)==1){
			echo "<script>location.href='vegan.html'</script>";
      
		}else{
			echo "<script>alert('아이디 혹은 패스워드가 불일치합니다.')</script>";
			return;
		}
		
		
		mysqli_close($mysqli);
	}
?>
 
</body>
</html>

