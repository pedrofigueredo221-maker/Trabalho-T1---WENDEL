<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title><?= esc($post->titulo) ?></title><link rel="stylesheet" href="<?= base_url('estilo.css') ?>"></head>
<body>
<header><h1>Meu Blog</h1><a href="<?= site_url('/') ?>">Início</a></header>
<main>
    <h2><?= esc($post->titulo) ?></h2>
    <p><?= nl2br(esc($post->conteudo)) ?></p>
    <a href="<?= site_url('/') ?>">Voltar</a>
</main>
</body>
</html>
