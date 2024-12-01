<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud In laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
  <div class="row">
    <div class="col s12">
    <h1>Ajouter un etudiant</h1>
<hr>
<form>
  <div class="form-group">
    <label for="Nom" class="form-label" >Nom</label>
    <input type="text" class="form-control" id="Nom" name="Nom">
  </div>

  <div class="form-group">
    <label for="Prenom" class="form-label" >Prenom</label>
    <input type="text" class="form-control" id="Prenom" name="Prenom">
  </div>

  <div class="form-group">
    <label for="Classe" class="form-label" >Classe</label>
    <input type="text" class="form-control" id="Classe" name="Classe">
  </div>

  <button type="submit" class="btn btn-primary">Ajouter Un Etudiant</button>
  <a href="/etudiant" class="btn btn-danger">Revenir a la liste des etudiants</a>
</form>



    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
