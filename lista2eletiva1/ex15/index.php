<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 15</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <form method="post">
        <div class="mb-3">
            <label for="n1" class="form-label">Informe seu peso</label>
            <input type="number" id="peso" name="peso" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="n1" class="form-label">Informe sua altura</label>
            <input type="number" id="altura" name="altura" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $n1 = $_POST['peso'];
        $n2 = $_POST['altura'];
        $calc = $n1 / ($n2 ** 2);
        number_format($calc , 2);
        echo "O seu Indice de massa corporal  é : $calc ";
    }
    ?>
</body>
</html>