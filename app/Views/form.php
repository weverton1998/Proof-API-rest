<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>cadastro</title>
</head>

<body>
    <div class="container mt-5">
        <form action="/post" method="post" enctype="multipart/form-data" enctype="multipart/form-data">
            <h2 class="mb-4">Insira o novo ip</h2> 
            <div class="form-group mt-2"> 
                <label for="ip"> ip </label>
                <input type="text" required="required" class="form-control" name="ip" />
            </div>
            <input type="submit" class="btn btn-success mt-2" value="salvar">
        </form>
    </div>
</body>

</html>