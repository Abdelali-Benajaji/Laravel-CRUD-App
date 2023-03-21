<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
 
    <div class="container mt-5 pt-5">
    <form method="POST" action="/saveAjout">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="codeModule" class="form-label">Code Du Module</label>
            <input type="text" class="form-control" name="codeM" required>     
        </div>
        <div class="mb-3">
            <label for="Titre" class="form-label">Titre Du Module</label>
            <input type="text" class="form-control" name="Titre" required>     
        </div>
        <div class="mb-3">
            <label for="MasseHoraire" class="form-label">La Masse Horaire</label>
            <input type="text" class="form-control" name="MasseH" required>     
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>