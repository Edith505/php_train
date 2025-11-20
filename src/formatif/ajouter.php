<?php
require_once __DIR__ . '/fonctions.php';

$erreurs   = [];
$nom       = $_POST['nom']       ?? '';
$programme = $_POST['programme'] ?? '';
$moyenneStr = $_POST['moyenne']  ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    [$erreurs, $moyenne] = validerEtudiant($nom, $programme, $moyenneStr);

    if (!$erreurs) {
        ajouterEtudiant($pdo, $nom, $programme, $moyenne);
        header('Location: index.php?msg=Étudiant ajouté');
        exit;
    }
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Ajouter un étudiant</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Ajouter un étudiant</h1>

<?php if ($erreurs): ?>
    <div class="msg err">
        <?php foreach ($erreurs as $e): ?>
            <div><?= htmlspecialchars($e) ?></div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form method="post">
    <p>
        Nom :<br>
        <input type="text" name="nom" value="<?= htmlspecialchars($nom) ?>">
    </p>
    <p>
        Programme :<br>
        <input type="text" name="programme" value="<?= htmlspecialchars($programme) ?>">
    </p>
    <p>
        Moyenne (optionnelle) :<br>
        <input type="number" step="0.01" name="moyenne"
               value="<?= htmlspecialchars($moyenneStr) ?>">
    </p>
    <p>
        <input type="submit" value="Enregistrer">
        <a href="index.php">Annuler</a>
    </p>
</form>

</body>
</html>
