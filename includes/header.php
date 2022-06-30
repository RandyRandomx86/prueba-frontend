<!DOCTYPE html>
<html lang="es_Mx">

<head>
    <meta charset="UTF-8">
    <title>PRUEBA TÉCNICA</title>
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="./assets/icon.ico" type="image/x-icon">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">PRUEBA TÉCNICA</a>
            <?php if (isset($_SESSION['id'])) : ?>

            <a class="btn btn-danger btn-lg" href="./logout.php" role="button">Salir</a>
            <?php endif; ?>
        </div>
    </nav>