<?php

require_once 'db_connect.php';

if($_POST) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $inicio = $_POST['inicio'];
    $fim = $_POST['fim'];
    $setor = $_POST['setor'];
    

    $id = $_POST['id'];

    $sql  = "UPDATE ferias SET fname = '$fname', lname = '$lname', inicio = '$inicio', fim = '$fim',  setor = '$setor' WHERE id = {$id}";
    
    if($connect->query($sql) === TRUE) {
        echo "<p>Atualizado com sucesso</p>";
        echo "<a href='../editFerias.php?id=".$id."'><button type='button'>Back</button></a>";
        echo "<a href='../indexFerias.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erro ao atualizar o registro: ". $connect->error;
    }

    $connect->close();

}

?>


