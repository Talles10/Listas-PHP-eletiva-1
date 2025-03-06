<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 18</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <form method="post">
        <div class="mb-3">
            <label for="n1" class="form-label">Informe o valor do capital</label>
            <input type="number" id="capital" name="capital" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="n2" class="form-label">Informe o valor da taxa</label>
            <input type="number" id="taxa" name="taxa" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="n3" class="form-label">Informe o período em meses</label>
            <input type="number" id="per" name="per" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $n1 = $_POST['capital'];
        $n2 = $_POST['taxa'];
        $porc = $n2 / 100;
        $n3 = $_POST['per'];
        $calc = ($n1 *(1 + $porc)** $n3);
        echo "O valor do juros compostos é : $calc ";
    }
    ?>
</body>
</html>