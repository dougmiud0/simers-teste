<?php ob_start(); ?>
<h2>Editar Usuário</h2>
<form method="POST" class="row g-3">
    <div class="col-md-6">
        <label class="form-label">Nome</label>
        <input type="text" name="name" value="<?= $user['name'] ?>" class="form-control" required>
    </div>
    <div class="col-md-6">
        <label class="form-label">Email</label>
        <input type="email" name="email" value="<?= $user['email'] ?>" class="form-control" required>
    </div>
    <div class="col-md-6">
        <label class="form-label">Data de Nascimento</label>
        <input type="date" name="birth_date" value="<?= $user['birth_date'] ?>" class="form-control" required>
    </div>
    <div class="col-md-6">
        <label class="form-label">Telefone</label>
        <input type="text" name="phone" value="<?= $user['phone'] ?>" class="form-control">
    </div>
    <div class="col-md-6">
        <label class="form-label">Senha</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="index.php" class="btn btn-secondary">Voltar</a>
    </div>
</form>
<?php
$content = ob_get_clean();
$title = 'Editar Usuário';
include 'layout.php';
?>