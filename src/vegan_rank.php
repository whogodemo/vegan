<!doctype html>
<html lang="ko">
  <head>
  
    <meta charset="utf-8">
	<link rel=stylesheet href='join.css' type='text/css'>
    <title>Vegan</title>
	
	<div class="wrap">
		<div class="join">
		<h2>Rank</h2>
	
	<body>
    
        <?php
		  
		  $mysqli = mysqli_connect("localhost","team04","team04","TEAM04");
		  if(mysqli_connect_errno()){
			  printf("Connect failed: %s\n", mysqli_connect_error());
			  exit();
			  }else{
				  $sql = "SELECT search, COUNT(search) FROM history GROUP BY search HAVING COUNT(search) > 1 ORDER BY COUNT(search) DESC";
				  $res = mysqli_query($mysqli, $sql);
				  
				  if($res){
					  
					  
					  while( $row = mysqli_fetch_array( $res ) ) {
						  
						  
						  echo "<footer>".$row[ 'search' ]."</footer>";
						  echo "<br>";
						  }
				}else{
					printf("Could not retrieve records: %s\n", mysqli_error($mysqli));
					}
				
				
				
				mysqli_free_result($res);
				mysqli_close($mysqli);
				}
			  
        ?>
		</div>
		
		</div>
  </body>
</html>



