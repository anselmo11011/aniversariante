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
        <title>Remover Ramal</title>
    </head>
    <body>

    <h3>Tem certeza que deseja remover ?</h3>
    <form action="php_action/removeRamal.php" method="post">

        <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
        <button type="submit">Salve Alterações</button>
        <a href="indexRamal.php"><button type="button">Retorne</button></a>
    </form>

    </body>
    </html>

    <?php
}
?>