<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Sederhana</title>
	<meta charset="utf-8" name="viewport" content="width: device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7/dist/css/bootstrap.min.css">
	<script src="assets/jquery-1.12.4.min.js"></script>
	<script src="assets/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 

	$server = "localhost";
	$user = "root";
	$password = "";
	$nama_database = "db_tes";

	$db = mysqli_connect($server, $user, $password, $nama_database);

	if(!$db){
    	die("Gagal terhubung dengan database: " . mysqli_connect_error());
	}

	?>
	<!-- <a href="soal_7_kategori_index.php"><button>Data categories</button></a>
	<a href="soal_7.php"><button>Data Person hobbies</button></a> -->
	<div class="container">
		<h3>Person Hobby Data</h3>
		<table class="table table-striped table-hover">
			<thead>
				<th>Id</th>
				<th>Name</th>
				<th>Person Hobby</th>
			</thead>
			<tbody>
				<?php
			        $sql = "SELECT categories.id , categories.name, GROUP_CONCAT(DISTINCT hobbies.name SEPARATOR ', ') as person_hobby FROM categories INNER JOIN hobbies ON categories.id = hobbies.person_id GROUP BY categories.id";
			        $query = mysqli_query($db, $sql);

			        while($data = mysqli_fetch_array($query)){
			            echo "<tr>";

			            echo "<td>".$data['id']."</td>";
			            echo "<td>".$data['name']."</td>";
			            echo "<td>".$data['person_hobby']."</td>";

			            echo "</tr>";
			        }
		        ?>
			</tbody>
		</table>
	</div>
</body>
</html>