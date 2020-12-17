<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<?php include './templates/navbar.tpl.php'; ?>
    
    <div class="container">
        <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger" role="alert">
            <?php

                switch ($_GET['error']) {
                    case 1:
                        echo 'L\'utilisateur n\'existe pas.';
                        break;
                    
                    case 2:
                        echo 'Mot de passe incorrect.';
                        break;
                    
                    case 3:
                        echo 'Vous devez être connecté pour voir cette page.';
                        break;
                    
                    default:
                        echo 'Erreur inconnue.';
                }

            ?>
        </div>
        <?php endif; ?>
        <form method="post" action="process-login.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Identifiant</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre adresse e-mail.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
                <input name="remember" type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>

</body>
</html>