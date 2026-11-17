<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>Publicação</title><link rel="stylesheet" href="<?= base_url('estilo.css') ?>"></head>
<body>
<header><h1><?= $post ? 'Editar publicação' : 'Nova publicação' ?></h1></header>
<main>
    <p><?= esc($msg) ?></p>
    <form method="post">
        <?= csrf_field() ?>
        <label>Título</label>
        <input name="titulo" maxlength="150" required value="<?= esc($post->titulo ?? '') ?>">
        <label>Conteúdo</label>
        <textarea name="conteudo" rows="10" required><?= esc($post->conteudo ?? '') ?></textarea>
        <button type="submit">Salvar</button>
        <a href="<?= site_url('painel/posts') ?>">Cancelar</a>
    </form>
</main>
</body>
</html>
