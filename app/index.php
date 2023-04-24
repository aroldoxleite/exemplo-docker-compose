<?php

    // Conecta ao banco de dados MySQL
    $servername = "database";
    $dbname = "dbexemplo";
    $username = "root";
    $password = "Senha123";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    // Verifica se a conexão com o banco de dados foi bem-sucedida
    if (!$conn) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }

    // Consulta o banco de dados para obter informações
    $sql = "SELECT * FROM users";
    $users = mysqli_query($conn,$sql);

    // Exibe as informações em uma tabela HTML
    echo "<table>";
    echo "<tr><th>Nome</th><th>Email</th></tr>";
    foreach ($users as $user) {
        echo "<tr><td>".$user['name']."</td><td>".$user['email']."</td></tr>";
    }
    echo "</table>";

    mysqli_close($conn);
?>
