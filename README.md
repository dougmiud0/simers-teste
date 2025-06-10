# Sistema de Cadastro de Usuários

Este é um sistema simples de cadastro de usuários desenvolvido em **PHP puro**, utilizando o padrão de arquitetura **MVC**, conexão com banco de dados via **PDO**, e layout estilizado com **Bootstrap 5**.

## Funcionalidades

- ✅ Criar novo usuário
- ✅ Listar usuários cadastrados
- ✅ Editar dados de um usuário
- ✅ Excluir usuário
- ✅ Validações básicas (campos obrigatórios, e-mail válido, etc.)
- ✅ Senha criptografada com `password_hash()`

## Tecnologias Utilizadas

- PHP 7.4 ou superior
- MySQL
- PDO (PHP Data Objects)
- HTML5 e Bootstrap 5
- Arquitetura MVC (Model-View-Controller)

## Estrutura de Pastas

user-app/  
├── controllers/  
│ └── UserController.php  
├── models/  
│ └── User.php  
├── views/  
│ ├── layout.php  
│ ├── list.php  
│ ├── create.php  
│ └── edit.php  
├── database.php  
└── index.php  

## Configuração do Banco de Dados

Crie o banco de dados MySQL com a tabela abaixo:

```sql
CREATE DATABASE user_app CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE user_app;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    birth_date DATE NOT NULL,
    phone VARCHAR(20),
    password VARCHAR(255) NOT NULL
);
```

## Configuração do Projeto

Clone ou extraia o projeto:

```bash
git clone https://github.com/seuusuario/user-app.git
ou extraia o .zip gerado.
```

## Configure as credenciais de acesso ao banco de dados no arquivo database.php:

```php
$pdo = new PDO("mysql:host=localhost;dbname=user_app", "seu_usuario", "sua_senha");
```

## Coloque o projeto em um servidor local como o XAMPP, WAMP, Laragon, ou use o PHP embutido:

```bash
php -S localhost:8000
```

## Acesse o sistema:

```bash
http://localhost:8000/index.php
```

## Segurança:

As senhas são armazenadas de forma segura usando password_hash().

Os dados enviados são validados e escapados com htmlspecialchars() ao serem exibidos.
