<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Serviços</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once '../app/Views/parts/header_nav.php';
    ?>

    <div class="container mt-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">

        <h1 class=" text-center mb-4">Lista de Serviços</h1>

        <table class="table table-striped table-hover">

            <thead>
                <tr>
                    <th>Código</th>
                    <th>Serviço</th>
                    <th>Convênio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($servicos as $servico): ?>
                    <tr>
                        <td><?= htmlspecialchars($servico['codigo']) ?></td>
                        <td><?= htmlspecialchars($servico['servico']) ?></td>
                        <td><?= htmlspecialchars($servico['convenio']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>