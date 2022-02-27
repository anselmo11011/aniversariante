<?php

require_once 'db_connect.php';

if($_POST) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $ramal = $_POST['ramal'];
    $setor = $_POST['setor'];
    

    $id = $_POST['id'];
}
    $sql  = "UPDATE ramal SET fname = '$fname', lname = '$lname', ramal = '$ramal', setor = '$setor";
    
    $sql = "UPDATE ramal SET active = 2 WHERE id = {$id}";

    if($connect->query($sql) === TRUE) {
        echo "<p>Atualizado com sucesso</p>";
        echo "<a href='../editRamal.php?id=".$id."'><button type='button'>Back</button></a>";
        echo "<a href='../indexRamal.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erro ao atualizar o registro: ". $connect->error;
    }

    $connect->close();



?>
