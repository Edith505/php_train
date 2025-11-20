<?php

require_once __DIR__ . "/config.php";

/** @var PDO $pdo */
$stmt = $pdo->query("SHOW TABLES");
$tables = $stmt->fetchAll(PDO::FETCH_COLUMN);
print_r($tables);

