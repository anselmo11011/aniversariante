<?php

require_once 'db_connect.php';

if($_POST) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dia = $_POST['dia'];
    $setor = $_POST['setor'];
    

    if (($fname == "") || ($lname == "") || ($dia == "") || ($setor == "")) {
        echo "<p>Atencao! Todos os campos do formulario devem ser preenchidos, clique em voltar</p>";
    }

    $sql = "INSERT INTO folga (fname, lname, dia,  setor, active) VALUES ('$fname', '$lname', '$dia','$setor', 1)";
   
    if($connect->query($sql) === TRUE) {
        echo "<p>Novo registro criado com sucesso</p>";
        echo "<a href='../folga.php'><button type='button'>Back</button></a>";
        echo "<a href='../indexFolga.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();
}

?>



