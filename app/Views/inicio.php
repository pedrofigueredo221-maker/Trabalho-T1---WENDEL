<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>Meu Blog</title><link rel="stylesheet" href="<?= base_url('estilo.css') ?>"></head>
<body>
<header><h1>Meu Blog</h1><a href="<?= site_url('painel/posts') ?>">Painel</a></header>
<main>
    <h2>Últimas publicações</h2>
    <?php foreach ($posts as $post): ?>
        <article><a href="<?= site_url('post/'.$post->id) ?>"><?= esc($post->titulo) ?></a></article>
    <?php endforeach; ?>
    <?php if (!$posts): ?><p>Nenhuma publicação cadastrada.</p><?php endif; ?>
</main>
</body>
</html>
