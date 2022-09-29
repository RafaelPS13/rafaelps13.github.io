<?php

    include('dados.php');

    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT username, senha, cargo FROM atendentes WHERE username='$usuario' AND senha='$senha'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
            $cargo = $row["cargo"];
        }

        if ($cargo == 1) {
            header('Location: '.'area_gerencia.php');
        } else if ($cargo == 0) {
            header('Location: '.'area_atendimento.php');
        } else {
            header('Location: '.'index.php?erro_senha=true');
        }

    } else {
        header('Location: '.'index.php?erro_senha=true');
    }
    
    $conn->close();
?>