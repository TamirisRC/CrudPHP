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
                <form  method="POST" action="/atualizar?client=<?php echo $client->getId(); ?>">
                    <label for="name"> Nome: </label>
                    <input type="text" id="name" name="name" value="<?php echo $client->getName(); ?>">
                    <label for="email"> Email: </label>
                    <input type="email" id="email" name="email" value="<?php echo $client->getEmail(); ?>">
                    <label for="data"> Data de Nascimento: </label>
                    <input type="date" id="born" name="born" value="<?php echo $client->bornCodigo(); ?>">
                    <div class="buttons" style="text-align: center;">
                        <button type="submit" value="button" class="btn">Editar</button>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>