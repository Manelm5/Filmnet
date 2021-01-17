<?php

function login($email, $password, $conn)
{

    $sql = "SELECT Nombre, Mail, Password
            FROM `Usuario`
            WHERE Mail = :email
            LIMIT 1";

    $stmt = $conn->prepare($sql);
    $stmt->execute(
        [
            'email' => $email,
        ]
    );

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result === false) {
        return null;
    }


    return password_verify($password,$result['Password']) ? $result : null;

}

function getNombreUsuarioPorMail($mail)
{
    $connection = connectaBD();
    $sql_usuario = "SELECT Nombre,Apellidos FROM `Usuario` WHERE Mail = '$mail'";
    $stm = $connection->prepare($sql_usuario);
    $stm->execute();
    $resultado_usuario = $stm->fetch();
    return $resultado_usuario;
}

?>






