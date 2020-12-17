<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <?php if (isset($_SESSION['currentUser'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="/profile.php">Profil</a>
                </li>
            <?php endif; ?>
        </ul>
        <!-- Si l'utilisateur est connecté -->
        <?php if (isset($_SESSION['currentUser'])): ?>
            <!-- Afficher un bouton "se déconnecter" -->
            <span>Bienvenue, <?= $_SESSION['currentUser'] ?></span>
            <form method="post" action="process-logout.php">
                <button type="submit" class="btn btn-secondary">
                    Se déconnecter
                </button>
            </form>
        <!-- Sinon -->
        <?php else: ?>
            <!-- Afficher un bouton "se connecter" -->
            <a href="/login.php">
                <button type="submit" class="btn btn-primary">
                    Se connecter
                </button>
            </a>
        <?php endif; ?>
    </div>
</nav>