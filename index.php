<?php declare(strict_types=1) ?>
<?php require_once 'php_action/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP CRUD</title>

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

<div class="manageMember">
    <br>
	<a href="create.php"><button type="button">Add Aniversariante</button></a>
        <a href="aniversariante.php"><button type="button">Aniversariante</button></a>
        <a href="addFerias.php"><button type="button">Add Ferias</button></a>
        <a href="ferias.php"><button type="button">Ferias</button></a>
        <a href="addFolga.php"><button type="button">Add Folga</button></a>
        <a href="folga.php"><button type="button">Folga</button></a>
        <a href="addRamal.php"><button type="button">Add Ramal</button></a>
        <a href="ramal.php"><button type="button">Ramal</button></a>
        
	<table border="1" cellspacing="0" cellpadding="0">
		<thead>
			<tr>
				<th>Name</th>
				<th>Dia</th>
				<th>Mes</th>
				<th>Setor</th>
				<th>Email</th>
                                <th>Ramal</th>
				<th>Admissao</th>
				<th>Opção</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM members WHERE active = 1";
           
            $result = $connect->query($sql);

			if ( !empty($result->num_rows) && $result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['fname']." ".$row['lname']."</td>
						<td>".$row['dia']."</td>
						<td>".$row['mes']."</td>
						<td>".$row['setor']."</td>
						<td>".$row['email']."</td>
                                                <td>".$row['ramal']."</td>
						<td>".$row['admissao']."</td>
						
						<td>
							<a href='edit.php?id=".$row['id']."'><button type='button'>Edite</button></a>
							<a href='remove.php?id=".$row['id']."'><button type='button'>Remova</button></a>
							
						</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='7'><center>Não há dados disponíveis. </center></td></tr>"; 
		
                        }	
        ?>
                        
    }               
   
</div>

</body>
</html>