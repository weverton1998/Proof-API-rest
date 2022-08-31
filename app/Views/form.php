<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link fonte (aboreto) !-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Space+Mono&display=swap" rel="stylesheet">
    <!--link bootstrap !-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <style>
        *{
            font-family: 'Aboreto', sans-serif;
        }

        body{
            background-color: #dbead5;
        }

        .titulo{
            margin-top: 3%;
            margin-bottom: 2%;
        }

        .form-control{
            width: 30%;
            margin-bottom: 2%;
        }   
    </style>
    
    <title>Desafio</title>
</head>

<body>
    <div class="container">
        <form action="/post" method="post" enctype="multipart/form-data" enctype="multipart/form-data">
            <h2 class="titulo">Insira o novo ip</h2> 
            <div class="form-group"> 
                <label for="ip"> ip </label>
                <input type="text" required="required" class="form-control" name="ip" placeholder="111.111.111.111" />
            </div>
            <input type="submit" class="btn btn-success" value="salvar">
        </form>
    </div>
</body>

</html>