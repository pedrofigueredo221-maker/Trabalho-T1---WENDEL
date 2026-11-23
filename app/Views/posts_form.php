<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Postagem</title>
    <link rel="stylesheet" href="<?= base_url('estilo.css') ?>">
</head>
<body>
    <header>
        <h1><?= isset($post) ? 'Editar postagem' : 'Nova postagem' ?></h1>
    </header>

    <main>
        <?php if (!empty($msg)): ?>
            <p><?= esc($msg) ?></p>
        <?php endif; ?>

        <form method="post">
            <?= csrf_field() ?>

            <label for="titulo">Título</label>
            <input id="titulo" type="text" name="titulo" maxlength="150" required value="<?= esc(old('titulo', $post->titulo ?? '')) ?>">

            <label for="conteudo">Conteúdo</label>
            <textarea id="conteudo" name="conteudo" rows="8" required><?= esc(old('conteudo', $post->conteudo ?? '')) ?></textarea>

            <button type="submit">Salvar</button>
            <a href="<?= site_url('painel/posts') ?>">Cancelar</a>
        </form>
    </main>
</body>
</html>
