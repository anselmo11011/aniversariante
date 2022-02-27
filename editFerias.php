<?php

require_once 'php_action/db_connect.php';

if($_GET['id']) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM ferias WHERE id = {$id}";
    
    $result = $connect->query($sql);

    $data = $result->fetch_assoc();

    $connect->close();

    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Edite Ferias</title>

        <style type="text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 50%;
            }

            table tr th {
                padding-top: 20px;
            }
        </style>

    </head>
    <body>

    <fieldset>
        <legend>Edit Ferias</legend>

        <form action="php_action/updateFerias.php" method="post">
            <table cellspacing="0" cellpadding="0">
                <tr>
                    <th>Nome</th>
                    <td><input type="text" name="fname" placeholder="First Name" value="<?php echo $data['fname'] ?>" /></td>
                </tr>
                <tr>
                    <th>Sobrenome</th>
                    <td><input type="text" name="lname" placeholder="Last Name" value="<?php echo $data['lname'] ?>" /></td>
                </tr>
                <tr>
                    <th>Inicio</th>
                    <td><input type="text" name="inicio" placeholder="Inicio" value="<?php echo $data['inicio'] ?>" /></td>
                </tr>
                <tr>
                    <th>Fim</th>
                    <td><input type="text" name="fim" placeholder="Fim" value="<?php echo $data['fim'] ?>" /></td>
                </tr>
                <th>Setor</th>
                <td><input type="text" name="setor" placeholder="Setor" value="<?php echo $data['setor'] ?>" /></td>
                
		<td><input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
		<td><button type="submit">Salve alterações</button></td>
		<td><a href="indexFerias.php"><button type="button">Retorne</button></a></td>
                </tr>
            </table>
        </form>

    </fieldset>

    </body>
    </html>

    <?php
}
?>

