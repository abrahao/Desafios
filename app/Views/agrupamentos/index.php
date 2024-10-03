<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <?php
    require_once '../app/Views/parts/header_nav.php';
    ?>

    <div class="container mt-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <h1 class="text-center mb-4">Relatório Contratos Agrupado por Banco e Verba</h1>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Banco</th>
                    <th>Verba</th>
                    <th>Contrato Mais Antigo</th>
                    <th>Contrato Mais Recente</th>
                    <th>Soma dos Contratos</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($agrupamentos as $agrupamento): ?>
                    <tr>
                        <td><?= htmlspecialchars($agrupamento['nome_banco']) ?></td>
                        <td><?= 'R$ ' . number_format($agrupamento['verba'], 2, ',', '.') ?></td>
                        <td><?= date('d/m/Y', strtotime($agrupamento['contrato_mais_antigo'])) ?></td>
                        <td><?= date('d/m/Y', strtotime($agrupamento['contrato_mais_recente'])) ?></td>
                        <td><?= 'R$ ' . number_format($agrupamento['soma_contratos'], 2, ',', '.') ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Relatório Agrupado por Banco e Verba</title>

</body>

</html>