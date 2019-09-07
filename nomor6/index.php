<html>
<head>
	<title>Tampil Data</title>
</head>
<body>
	<h3>Tampil Data</h3>
 
	<table border="1">
		<thead>
			<th>Name</th>
			<th>Work</th>
			<th>Salary</th>
			<th colspan="2">Aksi</th>
		</thead>
		<tbody>
			<?php
				include "koneksi.php";

				$sql = "select name.nama, work.name,category.salary from work inner join (category inner join name on name.id=category.id) on category.id=work.id";
				$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 
				$no = 1; // no. urut
 
				while($data = mysqli_fetch_array($query)){
 
					$nm = $data["nama"];
					$wk = $data["name"];
					$sl = $data["salary"];
 
					echo "<tr>
							<td>$nm</td>
							<td>$wk</td>
							<td>$sl</td>
							<td>
								<a href='ubah-data.php?ubah_id=$nm'>Ubah</a>
								<a href='hapus-data.php?hapus_id=$nm'>Hapus</a>
							</td>
						  </tr>";
					$no++;
				}
			?>
 
			
		</tbody>
	</table>
 
</body>
</html>