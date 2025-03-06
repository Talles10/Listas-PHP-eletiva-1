<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 19</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <form method="post">
        <div class="mb-3">
            <label for="n1" class="form-label">Insira um numero em dias</label>
            <input type="number" id="dia" name="dia" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $n1 = $_POST['dia'];
        $n2 = $n1 * 24;
        echo "O valor informado em Horas é : $n2.<br>";
        $n3 = $n2 * 60;
        echo "O valor informado em minutos é : $n3.<br>";
        $n4 = $n3 * 60;
        echo "O valor informado em segundos é : $n4.<br> ";
    }
    ?>
</body>
</html>