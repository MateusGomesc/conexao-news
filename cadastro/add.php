<?php
    include '../includes/connection.php';
    
    // prepare query
    $stmt = $connection->prepare("INSERT INTO noticias(title, `lead`, author, date, category, description, report) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $title, $lead, $author, $date, $category, $description, $report);
    
    // receive data
    $title = $_POST['title'];
    $lead = $_POST['lead'];
    $author = $_POST['author'];
    $date = $_POST['date'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $report = $_POST['report'];
    
    // execute query
    $stmt->execute();

    session_start();

    if ($stmt->affected_rows > 0) {
        $_SESSION['msg'] = 'Notícia cadastrada com sucesso!';
    } else {
        $_SESSION['msg'] = "Erro ao adicionar notícia: " . $stmt->error;
    }

    // close connection
    $stmt->close();
    $connection->close();

    header("location: ../home");