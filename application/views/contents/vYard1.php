<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Yard 1</h1>

<table border="2">
		<thead>
			<tr>
				<th colspan="3">Project</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ( $yard01Projects as $yard01Project ): ?>
				<tr>					
					<td><?php echo $yard01Project->employeename; ?></td>
					<td><?php echo $yard01Project->positiondesc; ?></td>
					<td><?php echo $yard01Project->extension; ?></td>					
				</tr>		
			<?php endforeach ?>	
		</tbody>
	</table>
</body>
</html>