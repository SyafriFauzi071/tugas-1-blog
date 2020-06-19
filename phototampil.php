<?php

require_once "photo.php";

$photo = new photo();
$rows = $photo->tampil();

?>

<tr>
		<th>Id Photo</th>
		<th>Tanggal</th>
		<th>Judul</th>
		<th>Teks</th>
		<th>Id Post</th>
	</tr>

		<?php foreach ($rows as $row) { ?>
			<tr>
				<td><?php echo $row['photo_id'];?></td>
				<td><?php echo $row['date'];?></td>
				<td><?php echo $row['title'];?></td>
				<td><?php echo $row['text'];?></td>
				<td><?php echo $row['post_id'];?></td>
			</tr>

		<?php } ?>
	</table>