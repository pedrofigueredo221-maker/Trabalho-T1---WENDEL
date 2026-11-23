# Trabalho T1 - Blog

Blog simples desenvolvido com PHP, CodeIgniter 4 e MySQL.

## Funcionalidades
- Página inicial com os títulos das últimas postagens
- Página com o conteúdo completo de cada postagem
- Painel para cadastrar, editar e excluir postagens

## Como executar
1. Instale PHP 8.2 ou superior, Composer e MySQL.
2. Execute `composer install` na pasta do projeto.
3. Importe o arquivo `banco.sql` no phpMyAdmin.
4. Copie `env` para `.env` e configure o banco de dados.
5. Execute `php spark serve`.
6. Acesse http://localhost:8080 e http://localhost:8080/painel/posts.

O painel não tem login e deve ser usado apenas em ambiente local.

A estrutura completa baseada nos arquivos da aula e o PDF de instruções também foram preparados para entrega em ZIP.