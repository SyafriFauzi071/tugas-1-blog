<?php

require_once "category.php";

$category = new category();
$rows = $category->tampil();

?>

	<tr>
		<th>Id Categori</th>
		<th>Nama</th>
		<th>Text</th>
	</tr>


		<?php foreach ($rows as $row) { ?>
			<tr>
				<td><?php echo $row['Cat_id'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['text'];?></td>
			</tr>

		<?php } ?>
	</table>