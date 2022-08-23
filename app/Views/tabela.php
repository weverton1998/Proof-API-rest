<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Desafio</title>
</head>

<body>
    <div class="container mt-5" style="hight = 50%">
        <h2 class="text-center mb-4">Desafio proof</h2>    
        
        <?php if(!empty($ips) && is_array($ips)) : ?>
            <table class="table mb-5">
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