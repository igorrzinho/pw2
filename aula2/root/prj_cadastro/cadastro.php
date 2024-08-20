<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de contas</title>
</head>

<body>
    <form name="form1" method="post">
        <div>
            <h2>Cadastro de usuario</h2>
        </div>
        <div>
            <label for="usuario">Usuário</label>
            <input type="text" name="txt_usuario" id="usuario">
        </div>
        <div>
            <label for="email">email</label>
            <input type="text" name="txt_email" id="email">
        </div>
        <div>
            <label for="senha">senha</label>
            <input type="text" name="txt_senha" id="senha">
        </div>
        <div><input type="submit" value="cadastrar" onclick="document.form1.action='cadastrar.php'" class="btn"></input></div>
        <div><input type="submit" value="logar" onclick="document.form1.action='login.php'" class="btn"></input></div>
    </form>
</body>

</html>