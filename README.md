# Blog

Projeto PHP com CodeIgniter 4.

Instale a base com `composer create-project codeigniter4/appstarter blog`. Copie os arquivos app e public deste repositório para a pasta blog, substituindo Routes.php. Importe banco.sql no MySQL. Copie env para .env e configure database.default.hostname, database.default.database (blog), database.default.username, database.default.password e database.default.DBDriver (MySQLi). Execute `php spark serve`.

Página inicial: http://localhost:8080/
Painel: http://localhost:8080/painel/posts

Painel sem autenticação, destinado a uso local.
