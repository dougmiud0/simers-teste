<?php ob_start(); ?>
<!-- Arquivo  para lista de usuário -->
<h2 class="mb-4">Lista de Usuários</h2>
<a href="index.php?action=create" class="btn btn-primary mb-3">Novo Usuário</a>
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Nascimento</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= htmlspecialchars($user['name']) ?></td>
            <td><?= htmlspecialchars($user['cpf']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td><?= htmlspecialchars($user['birth_date']) ?></td>
            <td><?= htmlspecialchars($user['phone']) ?></td>
            <td>
                <a href="index.php?action=edit&id=<?= $user['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                <a href="index.php?action=delete&id=<?= $user['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Excluir este usuário?')">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php
$content = ob_get_clean();
$title = 'Lista de Usuários';
include 'layout.php';
?>
