<?php
// Front controller: semua permintaan website dimulai dari file ini.

declare(strict_types=1);

$basePath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
$basePath = rtrim($basePath, '/');
if ($basePath === '.' || $basePath === '/') {
    $basePath = '';
}
define('BASE_URL', $basePath);

require_once __DIR__ . '/core/Controller.php';
require_once __DIR__ . '/core/Database.php';
require_once __DIR__ . '/core/Model.php';
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/controllers/HomeController.php';

$controller = new HomeController();
$controller->index();
