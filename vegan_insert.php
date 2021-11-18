<!DOCTYPE html>
<html>
<body>
 
<?php
	#$name = $_POST['name'];
	#$category = $_POST['category'];
	
	$mysqli = mysqli_connect("localhost","team04","team04","TEAM04");
	if(mysqli_connect_errno()){
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}else{
		$sql = "insert into VEGAN (name, category, telephone, district, address, menu) values('".$_POST['name']."', '".$_POST['category']."','".$_POST['telephone']."','".$_POST['district']."','".$_POST['address']."','".$_POST['menu']."')";
		$res = mysqli_query($mysqli, $sql);
		if($res==TRUE){
			 echo "A record has been inserted.";
			
      
		}else{
			printf("Could not insert records: %s\n", mysqli_error($mysqli));
		}
		
		mysqli_close($mysqli);
	}
?>
 
</body>
</html>



