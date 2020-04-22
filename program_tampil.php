<?php 
	$query = "SELECT * FROM register order BY id ASC";
	$result = mysqli_query($koneksi,$query);

	$no = 1;
	while($row mysqli_fetch_assoc($result));
 ?>
 	<tr>
 		<td><?php echo $no; ?></td>
 		<td><?php echo $row['username']; ?></td>
 		<td><?php echo $row['nama_anak']; ?></td>
 		<td><?php echo $row['ortu']; ?></td>
 		<td><?php echo $row['password']; ?></td>
 		<td><?php echo $row['tipe_user']; ?></td>
 	</tr>
