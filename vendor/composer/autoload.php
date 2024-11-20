<?php

// Vérifie que le fichier principal d'autoload existe
if (!file_exists(__DIR__ . '/composer/autoload_real.php')) {
    throw new \Exception('Composer autoloader not found. Did you run "composer install"?');
}

// Inclut les fichiers définis dans "files" du composer.json
require_once __DIR__ . '/composer/autoload_files.php';