<?php ob_start(); ?>
<!-- Arquivo form para criação de usuário -->
<h2>Novo Usuário</h2>
<form method="POST" class="row g-3">
    <div class="col-md-6">
        <label class="form-label">Nome</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="col-md-6">
        <label class="form-label">CPF</label>
        <input type="text" name="cpf" class="form-control" required>
    </div>
    <div class="col-md-6">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="col-md-6">
        <label class="form-label">Data de Nascimento</label>
        <input type="date" name="birth_date" class="form-control" required>
    </div>
    <div class="col-md-6">
        <label class="form-label">Telefone</label>
        <input type="text" name="phone" class="form-control">
    </div>
    <div class="col-md-6">
        <label class="form-label">Senha</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="index.php" class="btn btn-secondary">Voltar</a>
    </div>
</form>
<?php
$content = ob_get_clean();
$title = 'Novo Usuário';
include 'layout.php';
?>
