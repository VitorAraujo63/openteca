<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="" method="get">
        <table>
            <tr>
                <td><label for="nome">Nome</label></td>
                <td><input type="text" name="nome" id="nome" required></td>
            </tr>

            <tr>
                <td><label for="sobrenome">Sobre</label></td>
                <td><input type="text" name="sobrenome" id="sobrenome" required></td>
            </tr>

            <tr>
                <td><label for="email">E-mail</label></td>
                <td><input type="email" name="email" id="email" required></td>
            </tr>

            <tr>
                <td><label for="senha">Senha</label></td>
                <td><input type="password" name="senha" id="senha" required></td>
            </tr>

            <tr>
                <td><label for="senhaconfirm">Confirme a Senha</label></td>
                <td><input type="password" name="senhaconfirm" id="senhaconfirm" required></td>
            </tr>

            <tr>
                <td><input type="submit" value="Cadastrar"></td>
            </tr>
        </table>
    </form>
</body>
</html>