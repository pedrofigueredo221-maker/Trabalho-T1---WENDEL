<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>Painel de posts</title><link rel="stylesheet" href="<?= base_url('estilo.css') ?>"></head>
<body>
<header><h1>Painel de posts</h1><a href="<?= site_url('/') ?>">Início</a></header>
<main>
    <a class="botao" href="<?= site_url('painel/posts/inserir') ?>">Nova publicação</a>
    <table>
        <tr><th>Título</th><th>Ações</th></tr>
        <?php foreach ($posts as $post): ?>
        <tr>
            <td><?= esc($post->titulo) ?></td>
            <td>
                <a href="<?= site_url('painel/posts/editar/'.$post->id) ?>">Editar</a>
                <form class="excluir" method="post" action="<?= site_url('painel/posts/excluir/'.$post->id) ?>" onsubmit="return confirm('Excluir publicação?')">
                    <?= csrf_field() ?>
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</main>
</body>
</html>
