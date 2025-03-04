<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 09</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <form method="post">
        <div class="mb-3">
            <label for="n1" class="form-label">Insira o valor da base</label>
            <input type="number" id="base" name="base" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="n1" class="form-label">Insira o valor do expoente</label>
            <input type="number" id="exp" name="exp" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $n1 = $_POST['base'];
        $n2 = $_POST['exp'];
        $calc = $n1 ** $n2;
        echo "O resultado do calculo é : $calc ";
    }
    ?>
</body>
</html>