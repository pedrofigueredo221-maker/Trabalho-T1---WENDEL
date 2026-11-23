<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meu Blog</title>
    <link rel="stylesheet" href="<?= base_url('estilo.css') ?>">
</head>
<body>
    <header>
        <h1>Meu Blog</h1>
        <a href="<?= site_url('painel/posts') ?>">Painel de posts</a>
    </header>

    <main>
        <h2>Últimas postagens</h2>

        <?php foreach ($posts as $post): ?>
            <p>
                <a href="<?= site_url('post/' . $post->id) ?>">
                    <?= esc($post->titulo) ?>
                </a>
            </p>
        <?php endforeach; ?>

        <?php if (empty($posts)): ?>
            <p>Nenhuma postagem cadastrada.</p>
        <?php endif; ?>
    </main>
</body>
</html>
