<?php
require_once __DIR__ . '/fonctions.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id > 0) {
    supprimerEtudiant($pdo, $id);
    header('Location: index.php?msg=Étudiant supprimé');
    exit;
}

header('Location: index.php?msg=ID invalide');
exit;
