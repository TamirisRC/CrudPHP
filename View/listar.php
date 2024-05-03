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
        <div>
            <table>
                <thead>
                    <tr>
                        <th class=>Nome</th>
                        <th class=>Email</th>
                        <th class=>Data de Nascimento</th>
                        <th class=>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if($clients)
                        {
                            foreach($clients as $client)
                            {
                    ?>    
                            <tr>
                                <td class=><?php echo $client->getName(); ?></td>
                                <td class=><?php echo $client->getEmail(); ?></td>
                                <td class=><?php echo $client->getBorn(); ?></td>
                                <td>
                                    <div class="form-buttons">
                                        <form method="POST" action="/editar?client=<?php echo $client->getId() ?>">
                                            <button class="btn-edit" type="submit" >Editar</button>
                                        </form>
                                    </div>
                                    <div class="form-buttons">
                                        <form method="POST" onsubmit="return confirmDelete();" action="/deletar?client=<?php echo $client->getId() ?>">
                                            <button class="btn-delete" type="submit">Excluir</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                    <?php
                            }
                        }
                        else
                        {
                            echo "<tr><td colspan='4'>Nenhum Registro</td></tr>";
                        }
                    ?>   
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="../public/js/script.js"></script>
</html>