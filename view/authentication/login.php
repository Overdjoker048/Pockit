<section class="auth">
    <h1 class="reveal">CONNEXION</h1>
    <form class="reveal" action="index.php?page=login" method="POST">
        <?php if (!empty($_SESSION['register_success'])) { ?>
            <div class="message__success">
                <?= htmlspecialchars($_SESSION['register_success']) ?>
                <?php unset($_SESSION['register_success']); ?>
            </div>
        <?php } ?>
        <?php if (!empty($errorsLogin['general'])) { ?>
            <div class="message__error">
                <p><?= htmlspecialchars($errorsLogin['general']) ?></p>
            </div>
        <?php } ?>
        <?php if (!empty($errorsLogin['incorrects'])){ ?>
            <div class="message__error">
                <p><?= htmlspecialchars($errorsLogin['incorrects']) ?></p>
            </div>
        <?php } ?>
        <input name="email" type="email" placeholder="Email">
        <div class="passwordSection">
            <input name="password" class="password" type="password" placeholder="Mot de passe">
            <svg class="viewPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-icon lucide-eye"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/><circle cx="12" cy="12" r="3"/></svg>
        </div>
        <div class="btnSection">
            <button type="submit">SE CONNECTER</button>
            <a href="./index.php?page=register">Vous ne possédez pas de compte ? <span>Inscrivez-vous.</span></a>
        </div>
    </form>
</section>