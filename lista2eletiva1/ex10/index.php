<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 08</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form method="post">
        <div class="mb-3">
            <label for="n1" class="form-label">Insira o valor da altura</label>
            <input type="number" id="altura" name="altura" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="n2" class="form-label">Insira o valor da largura</label>
            <input type="number" id="largura" name="largura" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $n1 = $_POST['altura'];
        $n2 = $_POST['largura'];
        $perimetro = ($n1 * 2) + ($n2 * 2);
        echo "O perimetro do retangulo é : $perimetro ";
    }
    ?>
</body>
</html>