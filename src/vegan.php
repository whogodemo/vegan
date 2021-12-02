<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Vegan</title>
    <style>
      body {
        font-family: Consolas;
        font-family: 12px;
      }
      table {
        width: 100%;
      }
      th, td {
        padding: 10px;
        border-bottom: 1px solid #dadada;
      }
    </style>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Category</th>
          <th>Telephone</th>
		  <th>District</th>
          <th>Address</th>
		  <th>Menu</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $search = $_GET['search'];
		  
		  $mysqli = mysqli_connect("localhost","team04","team04","TEAM04");
		  if(mysqli_connect_errno()){
			  printf("Connect failed: %s\n", mysqli_connect_error());
			  exit();
			  }else{
				  $sql_insert = "insert into history values('".$search."',CURDATE())"; 
				  $sql = "select * from vegan where name like '%".$search."%' or category like '%".$search."%' or district like '%".$search."%' or address like '%".$search."%' or menu like '%".$search."%'";
				  $res = mysqli_query($mysqli, $sql);
				  $res_insert = mysqli_query($mysqli, $sql_insert);
				  
				  if($res){
					  
					  if(mysqli_num_rows($res) == 0){
						  echo "<script>location.href='vegan_insert.html'</script>";
					  }
					  
					  while( $row = mysqli_fetch_array( $res ) ) {

						  
						  echo '<tr><td>' ?><a href="https://map.kakao.com/link/search/<?=$row['name']?>" target="_blank" > <?php echo $row[ 'name' ] ?> </a><?php '</td>';
						  
						  echo '<td>'. $row[ 'category' ] . '</td><td>'.$row[ 'telephone' ] . '</td><td>'.$row[ 'district' ] .'</td><td>'.$row[ 'address' ] .'</td><td>'.$row[ 'menu' ]. '</td></tr>';
						  }
				}else{
					printf("Could not retrieve records: %s\n", mysqli_error($mysqli));
					}
				
				
				
				mysqli_free_result($res);
				mysqli_close($mysqli);
				}
			  
        ?>
      </tbody>
    </table>
	
	
	
  </body>
</html>



