<!DOCTYPE html>
<html>
<head>
    <title>Add Ferias</title>

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
    <legend> Add Ferias</legend>

    <form action="php_action/ferias.php" method="post">
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
                <th>Inicio</th>
                <td><input type="date" name="inicio" placeholder="Inicio" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" /></td>
            </tr>
             <tr>
                <th>Fim</th>
                <td><input type="date" name="fim" placeholder="Fim" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" /></td>
            </tr>
            <tr>
                <th>Setor</th>
                <form method= "get" action="setor.php">
                    <td><input type="text" name="setor" placeholder="Setor"/></td>
            </tr>
            

            <tr>
                <td><button type="submit">Salve Tudo</button></td>
                <td><a href="ferias.php"><button type="button">Retorne</button></a></td>
            </tr>
        </table>
    </form>

</fieldset>

</body>
</html>
