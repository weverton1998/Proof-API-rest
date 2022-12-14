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
    <title>Desafio</title>

    <style>
        *{
            font-family: 'Aboreto', sans-serif;
        }

        ul.pagination li {
            display: inline;
        }

        ul.pagination li a {
            color: black;
            float: left;
            padding: 8px 16px;
        }

        .active {
            background-color: #b7d5ac;
            color: white;
        }

        ul.pagination li a:hover:not(.active) {
            background-color: #ddd;
        }

        .pagination {
            margin-bottom: -1%;
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

        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <div class="conTabela container-fluid">
        <h2 class="titulo"><?php echo $titulo?></h2>    
        
        <?php if(!empty($ips) && is_array($ips)) : ?>
            <table class="table table-success table-striped ">
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
        <?php echo $pager->links(); ?>
    </div>
</body>
</html>