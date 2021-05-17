<?php

namespace App\Model;

class Auth extends Model
{
    function checkUser($email, $password) {
        $sql = 'SELECT id FROM users WHERE  email = ? AND password = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $password);
        $stmt->execute();
        return $stmt->fetch();
    }
}