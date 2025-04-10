<?php
$current_page = $_GET['page'] ?? 'dashboard';
$user_role = $_SESSION['user_role'] ?? 'agent';

function isActive($page) {
    global $current_page;
    return $current_page === $page ? 'active' : '';
}
?>

<div class="sidebar">
    <h2>Menu <?= ucfirst($user_role) ?></h2>
    <ul>
        <li>
            <a href="?page=dashboard" class="<?= isActive('dashboard') ?>">
                <i class="fas fa-home"></i> Accueil
            </a>
        </li>
        <li>
            <a href="?page=create_note" class="<?= isActive('create_note') ?>">
                <i class="fas fa-plus-circle"></i> Créer une note
            </a>
        </li>
        <li>
            <a href="?page=my_notes" class="<?= isActive('my_notes') ?>">
                <i class="fas fa-file-alt"></i> Mes notes
            </a>
        </li>
        <?php if ($user_role === 'admin'): ?>
        <li>
            <a href="?page=manage_users" class="<?= isActive('manage_users') ?>">
                <i class="fas fa-users"></i> Gérer les utilisateurs
            </a>
        </li>
        <li>
            <a href="?page=departments" class="<?= isActive('departments') ?>">
                <i class="fas fa-building"></i> Départements
            </a>
        </li>
        <?php endif; ?>
        <li>
            <a href="?page=profile" class="<?= isActive('profile') ?>">
                <i class="fas fa-user"></i> Mon profil
            </a>
        </li>
        <li>
            <a href="?page=logout">
                <i class="fas fa-sign-out-alt"></i> Déconnexion
            </a>
        </li>
    </ul>
</div>
