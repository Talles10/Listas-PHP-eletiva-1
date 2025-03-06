<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 20</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <form method="post">
        <div class="mb-3">
            <label for="n1" class="form-label">Insira um valor de tempo em horas</label>
            <input type="number" id="temp" name="temp" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="n2" class="form-label">Insira uma distancia em kilometros</label>
            <input type="number" id="dist" name="dist" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $n1 = $_POST['temp'];
        $n2 = $_POST['dist'];
        $vm = $n2 / $n1;
        echo "A velocidade média é de : $vm kilometros por hora ";
    }
    ?>
</body>
</html>