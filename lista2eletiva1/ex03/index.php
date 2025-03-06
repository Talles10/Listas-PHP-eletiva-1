<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <form method="post">
        <div class="mb-3">
            <label for="n1" class="form-label">Insira o primeiro valor</label>
            <input type="number" id="num1" name="num1" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="n2" class="form-label">Insira o segundo valor</label>
            <input type="number" id="num2" name="num2" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Multiplicar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        $multiplicacao = $n1 * $n2;
        echo "O resultado da multiplicacao é: $multiplicacao";
}
    ?>
</body>
</html>