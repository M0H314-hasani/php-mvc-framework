<?php
/**
 * User: TheCodeholic
 * Date: 7/10/2020
 * Time: 8:21 AM
 */

use Phpmvc\Core\Application;

require_once __DIR__.'/vendor/autoload.php';
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = [
    'userClass' => \App\Models\User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(__DIR__, $config);

$app->db->applyMigrations();