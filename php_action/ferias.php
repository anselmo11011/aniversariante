<?php

require_once 'db_connect.php';

if($_POST) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $inicio = $_POST['inicio'];
    $fim = $_POST['fim'];
    $setor = $_POST['setor'];
    
    
    



    if (($fname == "") || ($lname == "") || ($inicio == "") || ($fim == "") || ($setor == "") )
        echo "<p>Atencao! Todos os campos do formulario devem ser preenchidos, clique em voltar</p>";

    $sql = "INSERT INTO ferias (fname, lname, inicio, fim, setor, active) VALUES ('$fname', '$lname', '$inicio', '$fim', '$setor', 1)";
   
    if($connect->query($sql) === TRUE) {
        echo "<p>Novo registro criado com sucesso</p>";
        echo "<a href='../ferias.php'><button type='button'>Back</button></a>";
        echo "<a href='../indexFerias.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();
}

?>



