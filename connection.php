<?php
try {
    $base = new PDO('mysql:host=localhost; dbname=', 'root', '');
} catch (exception $e) {
    die('Erreur ' . $e->getMessage());
}
