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

    public function registerUser($login, $password, $email): bool {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO user (user_login, user_password, user_mail)
                  VALUES (:login, :password, :email)";
        $statement = $this->db->prepare($query);

        $statement->execute([
            ':login' => $login,
            ':password' => $hashedPassword,
            ':email' => $email
        ]);

        return $statement->rowCount() > 0;
    }

    public function delete($id): void {
        $query = "DELETE FROM user WHERE user_id = :user_id";
        $statement = $this->db->prepare($query);
        $statement->execute([':user_id' => $id]);
    }

    // update()
    public function update($id, $userData): void {
        $fields = [];
        $params = [':user_id' => $id];

        if (isset($userData['user_login'])) {
            $fields[] = 'user_login = :user_login';
            $params[':user_login'] = $userData['user_login'];
        }
        if (isset($userData['user_password'])) {
            $fields[] = 'user_password = :user_password';
            $params[':user_password'] = password_hash($userData['user_password'], PASSWORD_BCRYPT);
        }
        if (isset($userData['user_mail'])) {
            $fields[] = 'user_mail = :user_mail';
            $params[':user_mail'] = $userData['user_mail'];
        }

        if (empty($fields)) {
            return; // Nothing to update
        }

        $query = "UPDATE user SET " . implode(', ', $fields) . " WHERE user_id = :user_id";
        $statement = $this->db->prepare($query);
        $statement->execute($params);
    }
}
