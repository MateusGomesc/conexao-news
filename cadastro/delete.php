<?php
    $reportId = $_GET['id'];

    include '../includes/connection.php';

    // query to delete
    $sql = 'DELETE FROM noticias WHERE id=' . $reportId;
    $connection->query($sql);

    session_start();
    if($connection->affected_rows > 0){
        $_SESSION['msg'] = 'Notícia excluída com sucesso!';
    }
    else{
        $_SESSION['msg'] = 'Não foi possível excluir a notícia';
    }

    $connection->close();
    header("location: ../home");