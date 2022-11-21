<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <style>
        label, input { display: block; }
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Usuário</legend>

        <form method="post" action="/Usuario/form/save">

            <input type="hidden" value="<?= $model->id ?>" name="id" />
            
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

            <label for="email">Email:</label>
            <input id="email" name="email" value="<?= $model->email ?>" type="text" />

            <label for="senha">Senha:</label>
            <input id="senha" value="<?= $model->senha ?>" name="senha" type="password" />
            
            <button type="submit">Salvar</button>
        </form>
    </fieldset>

    
</body>
</html>