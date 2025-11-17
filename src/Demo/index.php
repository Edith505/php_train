<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formulaire PHP</title>
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-danger text-white">
                    <h3 class="mb-0 text-center">Formulaire PHP</h3>
                </div>
                <div class="card-body p-4">
                    <form action="traitement.php" method="post">
                        <div class="form-group">
                            <label for="nom" class="font-weight-bold">Nom complet</label>
                            <input type="text" class="form-control form-control-lg" id="nom" name="nom" placeholder="Entrez votre nom">
                        </div>

                        <div class="form-group">
                            <label for="age" class="font-weight-bold">Âge</label>
                            <input type="number" class="form-control form-control-lg" id="age" name="age" placeholder="Entrez votre âge" min="1" max="120">
                        </div>

                        <div class="form-group">
                            <label for="courriel" class="font-weight-bold">Adresse email</label>
                            <input type="email" class="form-control form-control-lg" id="courriel" name="courriel" placeholder="exemple@email.com">
                        </div>

                        <div class="form-group mt-4 mb-0">
                            <button type="submit" class="btn btn-danger btn-lg btn-block">Envoyer le formulaire</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-muted text-center bg-white">
                    <small>Tous les champs sont obligatoires</small>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>