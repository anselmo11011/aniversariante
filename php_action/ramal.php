<?php

require_once 'db_connect.php';

if($_POST) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $ramal = $_POST['ramal'];
    $setor = $_POST['setor'];
    

    if (($fname == "") || ($lname == "") || ($ramal == "") || ($setor == "")) {
        echo "<p>Atencao! Todos os campos do formulario devem ser preenchidos, clique em voltar</p>";
    }

    $sql = "INSERT INTO ramal (fname, lname, ramal,  setor, active) VALUES ('$fname', '$lname', '$ramal','$setor', 1)";
   
    if($connect->query($sql) === TRUE) {
        echo "<p>Novo registro criado com sucesso</p>";
        echo "<a href='../ramal.php'><button type='button'>Back</button></a>";
        echo "<a href='../indexRamal.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();
}

?>
