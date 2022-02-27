<?php

require_once 'db_connect.php';

if($_POST) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $setor = $_POST['setor'];
    $email = $_POST['email'];
    $admissao = $_POST['admissao'];
    $ramal = $_POST['ramal'];

    $id = $_POST['id'];

    $sql  = "UPDATE members SET fname = '$fname', lname = '$lname', dia = '$dia', mes = '$mes',  setor = '$setor', email = '$email', admissao = '$admissao' , ramal = '$ramal' WHERE id = {$id}";
    
    if($connect->query($sql) === TRUE) {
        echo "<p>Atualizado com sucesso</p>";
        echo "<a href='../editFerias.php?id=".$id."'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erro ao atualizar o registro: ". $connect->error;
    }

    $connect->close();

}

?>
