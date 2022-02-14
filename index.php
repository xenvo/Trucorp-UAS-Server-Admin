<?php	
	$servername = "172.19.0.2";
	$username = "root";
	$password = "password";
	$database = "Trucorp";
	
	$conn = new mysqli($servername, $username, $password, $database);
	$query = "SELECT * FROM users";
	$res = $conn->query($query);
	
	if ($res->num_rows > 0){
		while($row = $res->fetch_assoc()){
			echo "ID = " . $row["ID"]. "; Nama = " . $row["Nama"]. "; Alamat = " . $row["Alamat"] . "; Jabatan = ". $row["Jabatan"]. "<br>";
		}
	}
	else{
		echo "No results!";
	}
	





	$conn->close();
?>
