<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Funcionario</title>
</head>

<body>
    <form name="form1" method="post">
        <div>
            <h2>Cadastro de Funcionario</h2>
        </div>
        <div>
            <label for="funcionario">Nome funcionario:</label>
            <input type="text" name="txt_nome" id="funcionario">
        </div>
        <div>
            <label for="data">Data de admissão</label>
            <input type="date" name="txt_data" id="data">
        </div>
        <div>
            <label for="salario">Quantidade de salarios minimos</label>
            <input type="number" name="txt_sal" id="salario">
        </div>
        <div>
            <label for="cargo">Cargo</label>
            <select name="txt_cargo" id="cargo">
                <option value="auxiliar administrativo">Auxiliar Administrativo</option>
                <option value="analista de projeto">Analista de Projeto</option>
                <option value="Gerente de projetos">Gerente de Projetos</option>
                <option value="analista de suporte">Analista de Suporte</option>
                <option value="programador jr">Programador jr</option>
                <option value="analista de sistemas">Analista de Sistemas</option>
            </select>
        </div>
        <div><input type="submit" value="cadastrar" onclick="document.form1.action='cadastrar.php'" class="btn"></input></div>

    </form>
</body>

</html>