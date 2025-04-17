<h1>Gestión de Roles</h1>
<?php if (!empty($roles)): ?>
    <ul>
        <?php foreach ($roles as $role): ?>
            <li><?= $role['role']; ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No hay roles disponibles.</p>
<?php endif; ?>
