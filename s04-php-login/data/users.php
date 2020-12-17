<?php

$users = [
    [
        'email' => 'admin@test.com',
        'password' => '$2y$10$.v/703gYv8aH9EbqATHlRuCzZsDZUDoc1g.DfapYycCCYu3/F4ZI2',   // JaimeLesFrites
    ],

    [
        'email' => 'jeanpierre@test.com',
        'password' => 'BonjourLesGens',
    ],

    [
        'email' => 'gertrude@test.com',
        'password' => 'VivementLaFibre',
    ],
];

function findUserByEmail(string $email): ?array {
    global $users;
    // Pour chaque utilisateur du tableau "users"
    foreach ($users as $user) {
        // Si l'e-mail recherché est le même que l'e-mail de l'utilisateur
        if ($email === $user['email']) {
            // Renvoie l'utilisateur
            return $user;
        }
    }
    // Renvoie null
    return null;
}
