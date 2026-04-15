<section class="auth">
    <h1 class="reveal">INSCRIPTION</h1>
    <form class="reveal" action="index.php?page=register" method="POST">
        <?php if (!empty($errors['general'])) { ?>
            <div class="message__error">
                <p><?= htmlspecialchars($errors['general']) ?></p>
            </div>
        <?php } ?>
        <div class="inputSection">
            <input name="name" type="text" placeholder="Nom">
            <input name="surname" type="text" placeholder="Prenom">
        </div>
        <input name="email" type="email" placeholder="Email">
        <?php if (!empty($errors['email'])) { ?>
            <div class="message__error">
                <p><?= htmlspecialchars($errors['email']) ?></p>
            </div>
        <?php } ?>
        <div class="passwordSection">
            <input name="password" class="password" type="password" placeholder="Mot de passe">
            <svg class="viewPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-icon lucide-eye"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/><circle cx="12" cy="12" r="3"/></svg>
        </div>
        <?php if (!empty($errors['password'])) { ?>
            <div class="message__error">
                <?php foreach ($errors['password'] as $passError) {?>
                    <p><?= htmlspecialchars($passError) ?></p>
                <?php } ?>
            </div>
        <?php } ?>
        <div class="btnSection">
            <button type="submit">S'INSCRIRE</button>
            <a href="./index.php?page=login">Vous possédez déjà un compte ? <span>Connectez-vous.</span></a>
        </div>
    </form>
</section>