<header>
    <nav>
        <div class="headerBuger">
            <svg class="burger" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu-icon lucide-menu"><path d="M4 5h16"/><path d="M4 12h16"/><path d="M4 19h16"/></svg>
            <a href="./index.php?page=home" class="logo">POCKIT</a>
        </div>
        <ul class="sidebar">
            <li><a class="<?= ($_GET['page'] ?? 'home') === 'home' ? 'pageActive' : '' ?>" href="./index.php?page=home">ACCUEIL</a></li>
            <li><a class="<?= ($_GET['page'] ?? 'home') === 'contact' ? 'pageActive' : '' ?>" href="./index.php?page=contact">CONTACT</a></li>
            <?php if (isset($_SESSION['email'])) : ?>
                <p><?= htmlspecialchars($_SESSION['name']) ?></p>
                <a href="./index.php?page=logout">Déconnexion</a>
            <?php else : ?>
                <li><a class="btn" href="./index.php?page=login">SE CONNECTER</a></li>
            <?php endif ?>
        </ul>
    </nav>
</header>