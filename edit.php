<?php

require_once 'php_action/db_connect.php';

if($_GET['id']) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM members WHERE id = {$id}";
    
    $result = $connect->query($sql);

    $data = $result->fetch_assoc();

    $connect->close();

    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Edite Aniversariante</title>

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
        <legend>Edit Aniversariante</legend>

        <form action="php_action/update.php" method="post">
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
                    <th>Dia</th>
                    <td><input type="text" name="dia" placeholder="Dia" value="<?php echo $data['dia'] ?>" /></td>
                </tr>
                <tr>
                    <th>Mes</th>
                    <td><input type="text" name="mes" placeholder="Mes" value="<?php echo $data['mes'] ?>" /></td>
                </tr>
                <th>Setor</th>
                <td><input type="text" name="setor" placeholder="Setor" value="<?php echo $data['setor'] ?>" /></td>
                </tr>
                <th>Email</th>
                <td><input type="text" name="email" placeholder="Email" value="<?php echo $data['email'] ?>" /></td>
                </tr>
                <th>Admissao</th>
                <td><input type="text" name="admissao" placeholder="Admissao" value="<?php echo $data['admissao'] ?>" /></td>
                </tr>
                <th>Ramal</th>
                <td><input type="text" name="ramal" placeholder="Ramal" value="<?php echo $data['ramal'] ?>" /></td>
                </tr>
                
		<td><input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
		<td><button type="submit">Salve alterações</button></td>
		<td><a href="index.php"><button type="button">Retorne</button></a></td>
                </tr>
            </table>
        </form>

    </fieldset>

    </body>
    </html>

    <?php
}
?>
