<?php

class User {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAll(): mixed {
        $query = "SELECT * FROM user";
        $statement = $this->db->query($query);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserByLogin($login): mixed {
        $query = "SELECT * FROM user WHERE user_login = :login";
        $statement = $this->db->prepare($query);
        $statement->execute([':login' => $login]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserById($id): mixed {
        $query = "SELECT * FROM user WHERE user_id = :id";
        $statement = $this->db->prepare($query);
        $statement->execute([':id' => $id]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function registerUser($login, $password, $account_id, $email): bool {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO user (user_login, user_password, user_compte_id, user_mail)
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

    public function delete($id): void {
        $query = "DELETE FROM user WHERE user_id = :user_id";
        $statement = $this->db->prepare($query);
        $statement->execute([':user_id' => $id]);
    }
}
