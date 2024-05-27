<?php
    session_start();
    
    require 'database.php'

    if (isset($_SESSION['user_IDususario'])) {
        $records = $conn->prepare('SELECT IDususario, email, password FROM users WHERE IDususario = :IDususario');
        $records->bindParam(':IDususario', $_SESSION['user_IDususario']);
        $records->execute();
        $records = $records->fetch(PDO::FETCH_ASSOC);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Iniciaste sesion con exito</h1>
</body>
</html>