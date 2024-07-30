<?php
    if(isset($_GET['id'])){
        $reportId = $_GET['id'];
        include '../includes/connection.php';

        // fetching data
        $sql = 'SELECT * FROM noticias WHERE id=' . $reportId;
        $result = $connection->query($sql);
        $report = mysqli_fetch_object($result);

        // select control
        $select = [0, 0, 0, 0];
        $select[$report->category - 1] = 1;
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/head.php'; ?>
    <title>Cadastro</title>
</head>
<body>
    <?php include '../includes/header.php' ?>
    <main>
        <?php  include '../includes/menu.php' ?>
        <div class="data-container">
            <h1 class="title">Formulário</h1>
            <form action=<?php if(isset($reportId)){ echo "edit.php"; }else{ echo "add.php"; } ?> method="POST">
                <input type="hidden" value="<?php if(isset($report)){ echo $reportId; } ?>" name="id"> 
                <div class="input-container">
                    <label for="title">Título:</label>
                    <input type="text" name="title" id="title" value="<?php if(isset($reportId)){ echo $report->title; } ?>">
                </div>
                <div class="input-container">
                    <label for="lead">Lead:</label>
                    <input type="text" name="lead" id="lead" value="<?php if(isset($reportId)){ echo $report->lead; } ?>">
                </div>
                <div class="input-container">
                    <label for="author">Autor:</label>
                    <input type="text" name="author" id="author" value="<?php if(isset($reportId)){ echo $report->author; } ?>">
                </div>
                <div class="input-container">
                    <label for="date">Data da reportagem:</label>
                    <input type="date" name="date" id="date" value="<?php if(isset($reportId)){ echo $report->date; } ?>">
                </div>
                <div class="input-container">
                    <label for="category">Categoria:</label>
                    <select name="category" id="category">
                        <option value="" selected disabled>Selecione a categoria</option>
                        <option value="1" <?php if(isset($select[0])){ echo "selected"; } ?>>Política</option>
                        <option value="2" <?php if(isset($select[1])){ echo "selected"; } ?>>Esportes</option>
                        <option value="3" <?php if(isset($select[2])){ echo "selected"; } ?>>Cultura</option>
                        <option value="4" <?php if(isset($select[3])){ echo "selected"; } ?>>Tecnologia</option>
                    </select>
                </div>
                <div class="input-container">
                    <label for="description">Descrição da reportagem:</label>
                    <textarea name="description" id="description" rows="5"><?php if(isset($reportId)){ echo $report->description; } ?></textarea>
                </div>
                <div class="input-container">
                    <label for="report">Reportagem:</label>
                    <textarea name="report" id="report" rows="8"><?php if(isset($reportId)){ echo $report->report; } ?></textarea>
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