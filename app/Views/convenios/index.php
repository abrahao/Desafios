<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Convênios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php
    require_once '../app/Views/parts/header_nav.php';
    ?>

    <div class="container mt-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">

        <h1 class="text-center mb-4">Lista de Convênios</h1>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Convênio</th>
                    <th>Verba</th>
                    <th>Banco</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($convenios as $convenio): ?>
                    <tr>
                        <td><?= htmlspecialchars($convenio['codigo']) ?></td>
                        <td><?= htmlspecialchars($convenio['convenio']) ?></td>
                        <td>R$ <?= number_format($convenio['verba'], 2, ',', '.') ?></td>
                        <td><?= htmlspecialchars($convenio['nome_banco']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>