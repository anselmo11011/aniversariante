<?php declare(strict_types=1) ?>
<?php require_once 'php_action/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Folga</title>

	<style type="text/css">
	.manageMember {
			width: 50%;
			margin: auto;
		}
	

		table {
			width: 100%;
			margin-top: 20px;
		}

	</style>

</head>
<body>

<div class="manageFolga">
    <br>
	
        <a href="addFolga.php"><button type="button">Add Folga</button></a>
        <a href="folga.php"><button type="button">Folga</button></a>
        
	<table border="1" cellspacing="0" cellpadding="0">
		<thead>
			<tr>
				<th>Name</th>
				<th>Dia</th>
				<th>Setor</th>
				<th>Opção</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM folga WHERE active = 1";
           
            $result = $connect->query($sql);

			if ( !empty($result->num_rows) && $result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['fname']." ".$row['lname']."</td>
						<td>".$row['dia']."</td>
						<td>".$row['setor']."</td>
						
						<td>
							<a href='editFolga.php?id=".$row['id']."'><button type='button'>Edite</button></a>
							<a href='removeFolga.php?id=".$row['id']."'><button type='button'>Remova</button></a>
							
						</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='7'><center>Não há dados disponíveis. </center></td></tr>"; //5
		
			}
        ?>
                        
                       
   }
</div>

</body>
</html>
