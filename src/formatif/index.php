<?php
require_once __DIR__ . '/fonctions.php';

$etudiants = getEtudiants($pdo);
$message   = $_GET['msg'] ?? null;
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Gestion des étudiants</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Gestion des étudiants</h1>

<a class="button" href="ajouter.php">+ Ajouter un étudiant</a>

<?php if ($message): ?>
    <div class="msg ok">
        <?= htmlspecialchars($message) ?>
    </div>
<?php endif; ?>

<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Programme</th
        <th>Moyenne</th>
        <th>Actions</th>
    </tr>

    ///////////////////////////////////
    //         code php à ajouter
    ///////////////////////////////////

</table>

</body>
</html>
