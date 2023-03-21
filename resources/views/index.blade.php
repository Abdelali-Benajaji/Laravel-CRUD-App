<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Base</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
    <div class="container mt-5 pt-5" >
        <a href="/add" style="float:right">Ajouter Un Nouveau Module</a>
    @if(count($elements)>0)
   <table class="table table-striped" >
        <thead class="table-dark">
            <td>codeModule</td><td>Titre</td><td>MasseHoraire</td><td>Action</td>
        </thead>
        <tbody>
            @foreach($elements as $elem)
                <tr>
                    <td>{{$elem->codeModule}}</td>
                    <td>{{$elem->Titre}}</td>
                    <td>{{$elem->MasseH}}</td>
                    <td><a href="/edit/{{$elem->codeModule}}">Modifier</a>|
                    <a href="/delete/{{$elem->codeModule}}">Supprimer</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>Pas de modules dans la base de Donnee</p>
    @endif
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>