<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css" />
    <link rel="icon" type="image/png" href="../public/img/system.png">
    <title>Scheduling System</title>
</head>

<body>
    <div class="navbar">
        <div class="container">
            <div class="logo">
                <img src="../public/img/system.png" alt="Logo" class="medium-logo">
            </div>
            <div class="site-name"><h4>Scheduling System</h4></div>
            <div class="nav-links">
                <a href="/" class="btn">Cadastro</a>
                <a href="/consulta" class="btn">Consulta</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="form">
            <form action="/salvar" method="POST">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <label for="data">Data de Nascimento:</label>
                <input type="date" id="born" name="born">
                <div class="buttons">
                    <button type="submit" class="btn btn-submit">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>