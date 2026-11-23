# Trabalho T1 - Blog

Blog simples feito com PHP e CodeIgniter 4.

## Como executar

1. Crie o projeto base com `composer create-project codeigniter4/appstarter blog`.
2. Copie as pastas `app` e `public` deste repositório para a pasta do projeto. Mantenha os demais arquivos originais do CodeIgniter.
3. Importe o arquivo `banco.sql` no MySQL.
4. Renomeie o arquivo `env` do CodeIgniter para `.env` e configure os dados de acesso ao banco `blog`. Use o driver `MySQLi`.
5. Na pasta do projeto, execute `php spark serve`.

## Páginas

- `/` - mostra as últimas postagens.
- `/post/1` - mostra uma postagem.
- `/painel/posts` - lista, adiciona, edita e exclui postagens.

O painel não possui login. Ele foi feito para demonstrar o funcionamento do CRUD em ambiente local.
