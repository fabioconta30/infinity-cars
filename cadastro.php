<?php
$nome = "";
$email = "";
$interesse = isset($_GET["interesse"]) ? trim($_GET["interesse"]) : "";
$mensagem = "";
$enviado = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST["nome"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $interesse = trim($_POST["interesse"] ?? "");

    if ($nome === "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensagem = "Preencha seu nome e informe um e-mail válido.";
    } else {
        $enviado = true;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Infinity Cars</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>
</head>
<body class="form-page">
<header class="topbar">
    <a class="logo" href="index.php"><span class="logo-mark">∞</span><span>INFINITY <b>CARS</b></span></a>
    <nav class="nav"><a href="index.php">Voltar ao início</a></nav>
</header>
<main class="form-wrap">
    <div class="form-intro">
        <p class="eyebrow">FAÇA PARTE DA INFINITY CARS</p>
        <h1>Vamos encontrar<br><span>seu próximo carro.</span></h1>
        <p>Preencha seus dados para demonstrar interesse em um dos veículos.</p>
    </div>
    <section class="form-card">
        <?php if ($enviado): ?>
            <div class="success-message">
                <div class="success-icon">✓</div>
                <h2>Cadastro recebido!</h2>
                <p>Obrigado, <?php echo htmlspecialchars($nome); ?>. Esta é uma confirmação demonstrativa: os dados não foram armazenados em banco de dados.</p>
                <a class="button button-primary" href="index.php">Voltar ao site</a>
            </div>
        <?php else: ?>
            <h2>Seus dados</h2>
            <p class="form-subtitle">Os campos com * são obrigatórios.</p>
            <?php if ($mensagem !== ""): ?>
                <p class="error-message"><?php echo htmlspecialchars($mensagem); ?></p>
            <?php endif; ?>
            <form method="post" action="cadastro.php" id="registration-form">
                <label for="nome">Nome completo *</label>
                <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($nome); ?>" required>
                <label for="email">E-mail *</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                <label for="interesse">Veículo de interesse</label>
                <select id="interesse" name="interesse">
                    <option value="">Ainda não escolhi</option>
                    <?php foreach (["Sport GT", "Urban X", "Prime Sedan"] as $modelo): ?>
                        <option value="<?php echo htmlspecialchars($modelo); ?>" <?php echo $interesse === $modelo ? "selected" : ""; ?>><?php echo htmlspecialchars($modelo); ?></option>
                    <?php endforeach; ?>
                </select>
                <button class="button button-primary form-submit" type="submit">Enviar cadastro <span>→</span></button>
            </form>
            <p class="privacy-note">Demonstração escolar: não informe dados pessoais reais. O formulário não salva nem envia informações.</p>
        <?php endif; ?>
    </section>
</main>
<footer class="footer"><a class="logo" href="index.php"><span class="logo-mark">∞</span><span>INFINITY <b>CARS</b></span></a><p>Projeto escolar demonstrativo · Infinity Cars</p></footer>
</body>
</html>
