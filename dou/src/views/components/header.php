<?php
// Ensure user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ?page=login');
    exit;
}
?>
<header class="header">
    <div class="header-content">
        <div class="header-left">
            <button class="mobile-menu-toggle" id="menuToggle">
                <i class="fas fa-bars"></i>
            </button>
            <h1>Notes App</h1>
        </div>
        <div class="header-right">
            <span>
                <?= htmlspecialchars($_SESSION['username']) ?> 
                (<?= ucfirst($_SESSION['user_role']) ?>)
            </span>
            <a href="?page=profile" class="btn btn-secondary">
                <i class="fas fa-user"></i>
            </a>
        </div>
    </div>
</header>

<script>
document.getElementById('menuToggle').addEventListener('click', function() {
    document.querySelector('.sidebar').classList.toggle('active');
});
</script>
