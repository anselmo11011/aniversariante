    <?php

    require_once 'db_connect.php';

    if($_POST) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $dia = $_POST['dia'];
        $setor = $_POST['setor'];


        $id = $_POST['id'];

        $sql  = "UPDATE folga SET fname = '$fname', lname = '$lname', dia = '$dia', setor = '$setor' WHERE id = {$id}";

        if($connect->query($sql) === TRUE) {
            echo "<p>Atualizado com sucesso</p>";
            echo "<a href='../editFolga.php?id=".$id."'><button type='button'>Back</button></a>";
            echo "<a href='../indexFolga.php'><button type='button'>Home</button></a>";
        } else {
            echo "Erro ao atualizar o registro: ". $connect->error;
        }

        $connect->close();

    }

    ?>




