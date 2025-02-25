<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <form method="post">
        <div class="mb-3">
            <label for="n1" class="form-label">Insira a temperatura a ser convertida</label>
            <input type="number" id="tempC" name="tempC" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Converter</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $n1 = $_POST['tempC'];
        $conversao = ($n1 * 1.8) + 32;
        echo "O media calculada é: $conversao";
    }
    ?>
</body>
</html>