<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <?php include '../includes/header.php' ?>
    <main>
        <?php  include '../includes/menu.php' ?>
        <div class="data-container">
            <h1 class="title">Formulário</h1>
            <form action="add.php" method="POST">
                <div class="input-container">
                    <label for="title">Título:</label>
                    <input type="text" name="title" id="title">
                </div>
                <div class="input-container">
                    <label for="lead">Lead:</label>
                    <input type="text" name="lead" id="lead">
                </div>
                <div class="input-container">
                    <label for="author">Autor:</label>
                    <input type="text" name="author" id="author">
                </div>
                <div class="input-container">
                    <label for="date">Data da reportagem:</label>
                    <input type="date" name="date" id="date">
                </div>
                <div class="input-container">
                    <label for="category">Categoria:</label>
                    <select name="category" id="category">
                        <option value="" selected disabled>Selecione a categoria</option>
                        <option value="1">Política</option>
                        <option value="2">Esportes</option>
                        <option value="3">Cultura</option>
                        <option value="4">Tecnologia</option>
                    </select>
                </div>
                <div class="input-container">
                    <label for="description">Descrição da reportagem:</label>
                    <textarea name="description" id="description" rows="5"></textarea>
                </div>
                <div class="input-container">
                    <label for="report">Reportagem:</label>
                    <textarea name="report" id="report" rows="8"></textarea>
                </div>
                <div class="btn-container">
                    <button type="submit" class="btn-blue">Enviar</button>
                    <a class="btn-red" href="../home">Voltar</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>