<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Desafio</title>
    <style>
        *{
            font-family: 'Aboreto', sans-serif;
        }

        .titulo {
            padding : 3%;
            text-align: center;
        }

        body{
            background-color: #dbead5;
        }

        .conTabela {
            height: 100%;
        }

        .table {
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 5%;
            text-align: center;
            width: 50%;
            box-shadow: 4px 4px 10px gray;
        }        
    </style>
</head>

<body>
    <div class="container mt-5" style="hight = 50%">
        <h2 class="text-center mb-4">Desafio proof</h2>    
        
        <?php if(!empty($ips) && is_array($ips)) : ?>
            <table class="table table-success table-striped">
                <tr>
                    <th>id</th>
                    <th>ip</th>
                </tr>
                <?php foreach ($ips as $ip) : ?>
                    <tr>
                        <td><?php echo $ip['id'] ?></td>
                        <td><?php echo $ip['ip'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>Nenhum ips cadastrado </p>
        <?php endif; ?>
    </div>
</body>
</html>