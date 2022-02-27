<!DOCTYPE html>
<html>
<head>
    <title>Add Aniversariante</title>

    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }

        table tr th {
            padding-top: 20px;
        }
    </style>

</head>
<body>

<fieldset>
    <legend> Add Aniversariante</legend>

    <form action="php_action/create.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Nome</th>
                <td><input type="text" name="fname" placeholder="First Name" /></td>
            </tr>
            <tr>
                <th>Sobrenome</th>
                <td><input type="text" name="lname" placeholder="Last Name" /></td>
            </tr>
            <tr>
                <th>Dia</th>
                <form method= "get" action="dia.php">

                    <td><input type="number" name="dia"  placeholder="Dia" min="1" max="31"/></td>
            </tr>
            <tr>
                <th>Mes</th>
                <form method= "get" action="mes.php">
                    <td><input type="number" name="mes" placeholder="Mes" min= "1" max="12" /></td>

            </tr>
            <tr>
                <th>Setor</th>
                <form method= "get" action="setor.php">
                    <td><input type="text" name="setor" placeholder="Setor"/></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="text" name="email" placeholder="Email" /></td>
            </tr>
            <tr>
                <th>Admissao</th>
                <td><input type="date" name="admissao" placeholder="Admissao" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" /></td>
            </tr>
            <tr>
                <th>Ramal</th>
                <td><input type="text" name="ramal" placeholder="Ramal" /></td>
            </tr>

            <tr>
                <td><button type="submit">Salve Tudo</button></td>
                <td><a href="index.php"><button type="button">Retorne</button></a></td>
            </tr>
        </table>
    </form>

</fieldset>

</body>
</html>


