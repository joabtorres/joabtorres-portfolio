<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <?= $head ?>
    <title>Joab Torres | Analista de Sistema</title>
    <link rel="icon" type="image/gif" href="<?= theme("assets/images/icon.png"); ?>" sizes="32x32">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= theme("assets/styles_minify.css"); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <div class="ajax_load">
        <div class="ajax_load_box">
            <div class="ajax_load_box_circle"></div>
            <p class="ajax_load_box_title">Aguarde, carregando...</p>
        </div>
    </div>
    <?= $this->section('content'); ?>
    <footer>
        <section>
            © 2023 - Joab Torres | Todos os direitos reservados
        </section>
    </footer>
    <script src="<?= theme("assets/scripts_minify.js"); ?>"></script>
</body>

</html>