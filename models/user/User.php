<?php

class User {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getUserByLogin($login): mixed {
        $query = "SELECT * FROM users WHERE login = :login";
        $statement = $this->db->prepare($query);
        $statement->execute([':login' => $login]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserById($id): mixed {
        $query = "SELECT * FROM users WHERE id = :id";
        $statement = $this->db->prepare($query);
        $statement->execute([':id' => $id]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function registerUser($login, $password, $account_id, $email): bool {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO users (login, password, account_id, email)
                  VALUES (:login, :password, :account_id, :email)";
        $statement = $this->db->prepare($query);

        $statement->execute([
            ':login' => $login,
            ':password' => $hashedPassword,
            ':account_id' => $account_id,
            ':email' => $email
        ]);

        return $statement->rowCount() > 0;
    }

}
