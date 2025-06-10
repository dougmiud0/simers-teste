<!DOCTYPE html>
<html>
    <!-- Arquivo layout do projeto -->
<head>
    <title><?= $title ?? 'Sistema de Usuários' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="index.php">Cadastro de Usuários</a>
        </div>
    </nav>
    <main class="container">
        <?= $content ?>
    </main>
</body>
</html>
