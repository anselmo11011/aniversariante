<?php

require_once 'db_connect.php';

if($_POST) {
    $id = $_POST['id'];

    $sql = "UPDATE ramal SET active = 2 WHERE id = {$id}";
    
    if($connect->query($sql) === TRUE) {
        echo "<p>Removido com sucesso!!</p>";
        echo "<a href='../indexRamal.php'><button type='button'>Retorne</button></a>";
    } else {
        echo "Erro, nada removido: " . $connect->error;
    }

    $connect->close();
}

?>