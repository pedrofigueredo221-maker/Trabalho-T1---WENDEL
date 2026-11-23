<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($post->titulo) ?></title>
    <link rel="stylesheet" href="<?= base_url('estilo.css') ?>">
</head>
<body>
    <header>
        <h1>Meu Blog</h1>
    </header>

    <main>
        <h2><?= esc($post->titulo) ?></h2>
        <p><?= nl2br(esc($post->conteudo)) ?></p>
        <a href="<?= site_url('/') ?>">Voltar para o início</a>
    </main>
</body>
</html>
