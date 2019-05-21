<!DOCTYPE html>
<html>
<head>
	<title>
		 DATA USER 
	</title>
	<link rel="stylesheet" type="text/css" href="asset/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="asset/style1.css">
</head>
<body>
	<div class="col-md-4 col-md-offset-4">
		<h2><center> DATA USER </center></h2>
		<table class="table table-dashed">
			<tr>
				<th>username</th>
				<th>Nama</th>
				<th>Nim</th>
				<th>Kom</th>
				<th>Alamat</th>
			</tr>
			<?php
			echo "<tr>";
			echo "<td>".$data['username']."</td>";
			echo "<td>".$data['nama']."</td>";
			echo "<td>".$data['nim']."</td>";
			echo "<td>".$data['kom']."</td>";
			echo "<td>".$data['alamat']."</td>";
			echo "</tr>";

			?>
		</table>
	</div>
</body>
</html>