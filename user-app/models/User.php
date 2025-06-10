<?php
# Arquivo de criação, edição e exclusão dentro do banco de dados
require_once __DIR__ . '/../config/db.php';

class User {
    public static function all() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO users (name, cpf, email, birth_date, phone, password) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            $data['name'],
            $data['cpf'],
            $data['email'],
            $data['birth_date'],
            $data['phone'],
            password_hash($data['password'], PASSWORD_DEFAULT)
        ]);
    }

    public static function update($id, $data) {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE users SET name=?, email=?, birth_date=?, phone=?, password=? WHERE id=?");
        $stmt->execute([
            $data['name'],
            $data['email'],
            $data['birth_date'],
            $data['phone'],
            password_hash($data['password'], PASSWORD_DEFAULT),
            $id
        ]);
    }

    public static function delete($id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$id]);
    }
}
?>
