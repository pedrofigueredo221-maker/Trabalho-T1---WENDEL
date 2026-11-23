<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel de posts</title>
    <link rel="stylesheet" href="<?= base_url('estilo.css') ?>">
</head>
<body>
    <header>
        <h1>Painel de posts</h1>
    </header>

    <main>
        <p><a href="<?= site_url('/') ?>">Ver blog</a></p>
        <p><a href="<?= site_url('painel/posts/inserir') ?>">Adicionar postagem</a></p>

        <table>
            <tr>
                <th>Postagem</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($posts as $post): ?>
                <tr>
                    <td><?= esc($post->titulo) ?></td>
                    <td>
                        <a href="<?= site_url('painel/posts/editar/' . $post->id) ?>">Editar</a>
                        <form class="excluir" method="post" action="<?= site_url('painel/posts/excluir/' . $post->id) ?>" onsubmit="return confirm('Excluir esta postagem?')">
                            <?= csrf_field() ?>
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <?php if (empty($posts)): ?>
            <p>Nenhuma postagem cadastrada.</p>
        <?php endif; ?>
    </main>
</body>
</html>
