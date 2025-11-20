<?php

require_once __DIR__ . '/config.php';

function creerTableEtudiants(PDO $pdo): void
{
    $sql = "
        CREATE TABLE IF NOT EXISTS etudiants (
            id ,                    //entier, autoincrement et clé primaire
            nom ,                   //chaine de caractère de 50 non nulle
            programme ,             //chaine de caractère de 100 non nulle
            moyenne                 //décimal 
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
    ";
    $pdo->exec($sql);
}

function getEtudiants(PDO $pdo): array
{
    creerTableEtudiants($pdo);
    $stmt = $pdo->query("SELECT * FROM etudiants ORDER BY id DESC");
    return $stmt->fetchAll();
}

function getEtudiant(PDO $pdo, int $id): ?array
{
    creerTableEtudiants($pdo);
    $stmt = $pdo->prepare("SELECT * FROM etudiants WHERE id = ?");
    $stmt->execute([$id]);
    $row = $stmt->fetch();
    return $row ?: null;
}

function ajouterEtudiant(PDO $pdo, string $nom, string $programme, ?float $moyenne): void
{
    creerTableEtudiants($pdo);
    $stmt = $pdo->prepare(
        "INSERT INTO etudiants (nom, programme, moyenne) VALUES (?, ?, ?)"
    );
    $stmt->execute([$nom, $programme, $moyenne]);
}

function modifierEtudiant(PDO $pdo, int $id, string $nom, string $programme, ?float $moyenne): void
{
    
}

function supprimerEtudiant(PDO $pdo, int $id): void
{


}

function validerEtudiant(?string $nom, ?string $programme, ?string $moyenneStr): array
{
    $erreurs = [];

    if ($nom === null || trim($nom) === '') {
        $erreurs[] = "Le nom est obligatoire.";
    }
    if ($programme === null || trim($programme) === '') {
        $erreurs[] = "Le programme est obligatoire.";
    }

    $moyenne = null;
    if ($moyenneStr !== null && $moyenneStr !== '') {
        if (!is_numeric($moyenneStr)) {
            $erreurs[] = "La moyenne doit être un nombre.";
        } else {
            $moyenne = (float)$moyenneStr;
        }
    }

    return [$erreurs, $moyenne];
}
