<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>



    
    <form action="">
    <div class="form-group">
      <input type="text" name="search" class="form-control" id="formGroupExampleInput" placeholder="Procurar...">
    </div>
    </form>

    <table class="content-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Email</th>
                <th>Setor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($cargos as $cargo)
            <tr>
                <td>{{$cargo->id}}</td>
                <td>{{$cargo->nome}}</td>
                <td>{{$cargo->cargo}}</td>
                <td>{{$cargo->email}}</td>
                <td>{{$cargo->setor}}</td>

                <td>
                    <a href="">[editar]</a>
                    <a href="">[remover]</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>

</html>