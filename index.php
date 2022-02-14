<?php	
	$servername = "172.19.0.2";
	$username = "root";
	$password = "password";
	$database = "Trucorp";
	$total = 0;

	$conn = new mysqli($servername, $username, $password, $database);
	$query = "SELECT * FROM users";
	$res = $conn->query($query);
	
	if ($res->num_rows > 0){
		while($row = $res->fetch_assoc()){
			$total++;
		}
	}
	else{
		echo "No results!";
	}
	echo "Jumlah User = ";
	echo $total;


	echo "users."
	$conn->close();
?>
