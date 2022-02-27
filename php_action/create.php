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
   
    
}


    if (($fname == "") || ($lname == "") || ($dia == "") || ($mes == "") || ($setor == "") || ($email == "")|| ($admissao == "") || ($ramal == "") || ($inicio == "") || ($fim == ""))
        echo "<p>Atencao! Todos os campos do formulario devem ser preenchidos, clique em voltar</p>";

    $sql = "INSERT INTO members (fname, lname, dia, mes, setor, email, admissao, ramal, active) VALUES ('$fname', '$lname', '$dia', '$mes', '$setor', '$email', '$admissao', '$ramal',1)";
   
    if($connect->query($sql) === TRUE) {
        echo "<p>Novo registro criado com sucesso</p>";
        echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();


?>

