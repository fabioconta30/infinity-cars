<?php
$veiculos = [
    [
        "nome" => "Sport GT",
        "ano" => "2024",
        "preco" => "R$ 189.900",
        "categoria" => "Esportivo",
        "descricao" => "Design marcante e desempenho para quem gosta de dirigir.",
        "destaque" => "Mais procurado"
    ],
    [
        "nome" => "Urban X",
        "ano" => "2023",
        "preco" => "R$ 124.900",
        "categoria" => "SUV",
        "descricao" => "Conforto e espaço para acompanhar sua rotina.",
        "destaque" => "Ótimo custo-benefício"
    ],
    [
        "nome" => "Prime Sedan",
        "ano" => "2024",
        "preco" => "R$ 149.900",
        "categoria" => "Sedã",
        "descricao" => "Elegância, tecnologia e conforto em cada viagem.",
        "destaque" => "Novidade"
    ],
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Infinity Cars - encontre seu próximo carro.">
    <title>Infinity Cars | Encontre seu próximo carro</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>
</head>
<body>
<header class="topbar">
    <a class="logo" href="index.php" aria-label="Infinity Cars - início">
        <span class="logo-mark">∞</span><span>INFINITY <b>CARS</b></span>
    </a>
    <nav class="nav">
        <a href="#inicio">Início</a>
        <a href="#estoque">Veículos</a>
        <a href="#sobre">Sobre</a>
        <a class="nav-cta" href="cadastro.php">Cadastre-se</a>
    </nav>
</header>

<main>
    <section class="hero" id="inicio">
        <div class="hero-content">
            <p class="eyebrow">SEU PRÓXIMO CAPÍTULO COMEÇA AQUI</p>
            <h1>Encontre o carro<br><span>que combina com você.</span></h1>
            <p class="hero-copy">Uma seleção especial de veículos para transformar sua maneira de ir mais longe.</p>
            <a class="button button-primary" href="#estoque">Explorar veículos <span aria-hidden="true">→</span></a>
        </div>
        <div class="hero-art" aria-label="Ilustração estilizada de um carro">
            <div class="orbit orbit-one"></div>
            <div class="orbit orbit-two"></div>
            <div class="car-illustration">
                <div class="car-roof"></div>
                <div class="car-body"></div>
                <div class="car-window"></div>
                <div class="wheel wheel-left"></div>
                <div class="wheel wheel-right"></div>
                <div class="light"></div>
            </div>
            <span class="art-label">DRIVE YOUR FUTURE</span>
        </div>
    </section>

    <section class="stats" aria-label="Diferenciais">
        <div><strong>Seleção especial</strong><span>Veículos escolhidos</span></div>
        <div><strong>Atendimento</strong><span>Feito para você</span></div>
        <div><strong>Seu próximo destino</strong><span>Começa na Infinity Cars</span></div>
    </section>

    <section class="section inventory" id="estoque">
        <div class="section-heading">
            <div>
                <p class="eyebrow">NOSSO ESTOQUE</p>
                <h2>Modelos em destaque</h2>
            </div>
            <span class="heading-note">Seleção demonstrativa</span>
        </div>
        <div class="car-grid">
            <?php foreach ($veiculos as $indice => $veiculo): ?>
                <article class="car-card">
                    <div class="car-visual car-visual-<?php echo $indice + 1; ?>">
                        <span class="car-tag"><?php echo htmlspecialchars($veiculo["destaque"]); ?></span>
                        <div class="mini-car"><span></span><i></i><i></i></div>
                        <span class="car-number">0<?php echo $indice + 1; ?></span>
                    </div>
                    <div class="car-info">
                        <div class="car-meta"><span><?php echo htmlspecialchars($veiculo["categoria"]); ?></span><span><?php echo htmlspecialchars($veiculo["ano"]); ?></span></div>
                        <h3><?php echo htmlspecialchars($veiculo["nome"]); ?></h3>
                        <p><?php echo htmlspecialchars($veiculo["descricao"]); ?></p>
                        <div class="car-bottom">
                            <strong><?php echo htmlspecialchars($veiculo["preco"]); ?></strong>
                            <a href="cadastro.php?interesse=<?php echo urlencode($veiculo["nome"]); ?>">Tenho interesse <span>→</span></a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
        <p class="disclaimer">* Os veículos e valores desta página são fictícios e utilizados somente para fins escolares.</p>
    </section>

    <section class="about" id="sobre">
        <div>
            <p class="eyebrow">SOBRE A INFINITY CARS</p>
            <h2>Mais do que encontrar um carro. É encontrar seu caminho.</h2>
        </div>
        <p>A Infinity Cars é um projeto demonstrativo de loja virtual de veículos. A proposta é apresentar um site organizado, acessível e simples de navegar, aplicando conceitos de desenvolvimento web e trabalho em equipe.</p>
    </section>

    <section class="contact-strip">
        <div><p class="eyebrow">VAMOS CONVERSAR?</p><h2>Seu próximo carro pode estar aqui.</h2></div>
        <a class="button button-light" href="cadastro.php">Fazer cadastro <span>→</span></a>
    </section>
</main>

<footer class="footer">
    <a class="logo" href="index.php"><span class="logo-mark">∞</span><span>INFINITY <b>CARS</b></span></a>
    <p>Projeto escolar demonstrativo · Infinity Cars</p>
    <p>© <?php echo date("Y"); ?> Infinity Cars</p>
</footer>
</body>
</html>
