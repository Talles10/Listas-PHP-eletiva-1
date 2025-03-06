<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 13</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <form method="post">
        <div class="mb-3">
            <label for="n1" class="form-label">Insira o valor em metro</label>
            <input type="number" id="metro" name="metro" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $n1 = $_POST['metro'];
        $calc = $n1 * 100;
        echo "O valor em centimetros é : $calc ";
    }
    ?>
</body>
</html>