<?php 
 $conn = mysqli_connect('localhost', 'root', 'jlnyhRQXxrv4',  'grok_giis');

 $data = array();
 $sql = "SELECT * FROM user_details";
 $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
 	foreach ($result as $row) {
 		$data[] = $row;
 	}
 }
echo json_encode($data);
?>