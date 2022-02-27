<?php

require_once 'php_action/db_connect.php';

if($_GET['id']) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM ramal WHERE id = {$id}";
    
    $result = $connect->query($sql);

    $data = $result->fetch_assoc();

    $connect->close();

    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Edite ramal</title>

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
        <legend>Edit Ramal</legend>

        <form action="php_action/updateRamal.php" method="post">
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
                    <th>Ramal</th>
                    <td><input type="text" name="ramal" placeholder="Ramal" value="<?php echo $data['ramal'] ?>" /></td>
                </tr>
                <th>Setor</th>
                <td><input type="text" name="setor" placeholder="Setor" value="<?php echo $data['setor'] ?>" /></td>
                
		<td><input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
		<td><button type="submit">Salve alterações</button></td>
		<td><a href="indexRamal.php"><button type="button">Retorne</button></a></td>
                </tr>
            </table>
        </form>

    </fieldset>

    </body>
    </html>

    <?php
}
?>