<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/Main.css">
    <title>Login Recebido - Pizzaria</title>
</head>
<body>
    <header class="header">
        <h1 class="header__title">Pizzas -
            <span class="header__title--blue">Login</span>
        </h1>
    </header>

    <main>
        <div class="form" style="text-align: center;">
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                <h2>Login recebido com sucesso!</h2>
                <p><strong>Email:</strong> <?= htmlspecialchars($_POST['login'] ?? '', ENT_QUOTES, 'UTF-8') ?></p>
                <p><strong>Senha:</strong> <?= htmlspecialchars($_POST['senha'] ?? '', ENT_QUOTES, 'UTF-8') ?></p>
                <br>
                <a href="index.html" style="color: #007bff;">Voltar ao login</a>
            <?php else: ?>
                <p>Acesso inválido.</p>
                <a href="index.html" style="color: #007bff;">Voltar ao login</a>
            <?php endif; ?>
        </div>
    </main>

    <footer class="footer">
        <address class="footer__columns footer__endereço">
            Endereço: <br>
            Rua das Margaridas, 25 - Centro - São Paulo - SP
        </address>

        <section class="footer__columns footer__social">
            <p class="footer__social-text">Siga nos nas redes sociais:</p>
            <div class="footer__social-icon">
                <a href="#"><i class="footer__social-icon fa-brands fa-facebook"></i></a>
                <a href="#"><i class="footer__social-icon fa-brands fa-whatsapp"></i></a>
                <a href="#"><i class="footer__social-icon fa-brands fa-instagram"></i></a>
            </div>
        </section>

        <div class="footer__columns footer__dev">
            <p>Desenvolvido por XYZ - Soluções digitais</p>
        </div>
    </footer>
</body>
</html>
