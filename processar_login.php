<?php

    include('dados.php');

    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT user, senha FROM atendentes WHERE user='$usuario' AND senha='$senha'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        header('Location: '.'area_gerencia.php');
    } else {
        header('Location: '.'index.php?erro_senha=true');
    }
    
    $conn->close();
?>