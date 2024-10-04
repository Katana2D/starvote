<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header & Footer starvote</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css"> <!-- Vincule ao CSS -->
</head>
<body>
    <nav class="navbar navbar-expand-lg">

        <!-- Jumpscare -->
        <div id="jumpscare" class="jumpscare">
            <img src="assets/img/jumpscare1.gif" alt="Jumpscare" class="jumpscare-img" />
        </div>

        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="assets/img/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form class="d-flex ms-auto">
                    <input class="form-control search-bar" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn search-button" type="submit">
                        <i class="bi bi-search"></i> <!-- Ícone de lupa -->
                    </button>
                </form>
            </div>
        </div>
    </nav>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/fundotermo.jpg" class="d-block" alt="Imagem 1">
        </div>
        <div class="carousel-item">
            <img src="assets/img/carousel-one.jpg" class="d-block" alt="Imagem 2">
        </div>
        <div class="carousel-item">
            <img src="assets/img/carousel-three.jpeg" class="d-block" alt="Imagem 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
    </button>
</div>


    <!-- Conteúdo Principal -->
    <div class="container my-5">
        <div class="content">
            <!-- Seu conteúdo vai aqui -->
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <span>&copy; 2024 starvote.com.br - Todos os direitos reservados</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    const jumpscareImages = [
        'assets/jumpscare/androistar01.gif' // Coloque seus GIFs aqui


    ];

    let currentIndex = 0;

    function showJumpscare() {
        const jumpscare = document.getElementById('jumpscare');
        jumpscare.style.display = 'flex'; // Mostra o jumpscare

        // Define a imagem do jumpscare
        const img = jumpscare.querySelector('img');
        img.src = jumpscareImages[currentIndex];

        // Aumenta o índice para o próximo jumpscare
        currentIndex = (currentIndex + 1) % jumpscareImages.length;

        // Efeito de desvanecimento
        jumpscare.classList.add('fade-in');
        setTimeout(() => {
            jumpscare.classList.remove('fade-in');
            jumpscare.style.display = 'none'; // Esconde após a animação
        }, 5000); // 5 segundos antes de esconder
    }

    // Chama o jumpscare a cada 10 segundos
    setInterval(showJumpscare, 300000); // 10000 milissegundos = 10 segundos
    </script>

</body>
</html>
