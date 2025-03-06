<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 16</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <form method="post">
        <div class="mb-3">
            <label for="n1" class="form-label">Informe o preço</label>
            <input type="number" id="preco" name="preco" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="n2" class="form-label">Informe o percentual de desconto</label>
            <input type="number" id="desc" name="desc" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $n1 = $_POST['preco'];
        $n2 = $_POST['desc'];
        $desconto = $n2 /100;
        $calc = $n1 * $desconto;
        $valorcomdesc = $n1 - $calc;
        echo "O valor total com desconto é : $valorcomdesc ";
    }
    ?>
</body>
</html>