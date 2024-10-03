<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Sistema de Contratos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/" id="home-link">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contratos" id="contratos-link">Lista de Contratos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/bancos" id="bancos-link">Lista de Bancos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/convenios" id="convenios-link">Lista de Convênios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/servicos" id="servicos-link">Lista de Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/agrupamentos" id="agrupamentos-link">Relatório Agrupado</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .nav-link[aria-current="page"] {
        font-weight: bold;
        color: white;
    }
</style>

<script>
    // Obter a URL atual
    const currentUrl = window.location.pathname;

    // Mapear URLs para IDs de links
    const links = {
        '/': 'home-link',
        '/contratos': 'contratos-link',
        '/bancos': 'bancos-link',
        '/convenios': 'convenios-link',
        '/servicos': 'servicos-link',
        '/agrupamentos': 'agrupamentos-link'
    };

    // Definir aria-current para o link correspondente
    if (links[currentUrl]) {
        document.getElementById(links[currentUrl]).setAttribute('aria-current', 'page');
    }
</script>