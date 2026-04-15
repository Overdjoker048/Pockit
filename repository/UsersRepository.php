<?php

class UsersRepository {

    public function emailExists($email) {
        $sql = "SELECT COUNT(*) as cntEmail FROM users WHERE email = :email";
        $stmt = Database::getConnection()->prepare($sql);
        $stmt->execute(['email' => $email]);
        $count = $stmt->fetch(PDO::FETCH_ASSOC);
        return $count['cntEmail'] > 0;
    }

    public function createUser($name, $surname, $email, $password) {
        $sql = "INSERT INTO users (
                    name,
                    surname,
                    email,
                    password
                ) VALUES (
                    :name,
                    :surname,
                    :email,
                    :password
                )";
        
        $stmt = Database::getConnection()->prepare($sql);
        $stmt->execute([
            'name' => $name,
            'surname' => $surname,
            'email' => $email,
            'password' => $password
        ]);
    }

    public function findByEmail($email) {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = Database::getConnection()->prepare($sql);
        $stmt->execute(['email' => $email]);
        $count = $stmt->fetch(PDO::FETCH_ASSOC);
        return $count;
    }

}