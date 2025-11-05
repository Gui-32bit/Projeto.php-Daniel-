Tema escolhido: Pizzaria (Foco em Serviços/Vendas)

Resumo das atividades implementadas:
- Criação do módulo CRUD 'Pizzas' integrado ao módulo de Clientes existente.
- Implementadas as páginas: pizza-admin.php, pizza-cadastro-form.php, pizza-cadastro.php, pizza-altera-form.php, pizza-altera.php, pizza-excluir.php.
- Integração com MySQLi através do arquivo admin/config.inc.php.
- Export do banco de dados (.sql) incluído para facilitar a execução local.
- Atualização do menu para incluir link de acesso ao novo CRUD.

Instruções rápidas para rodar o projeto:
1. Importar o arquivo 'projeto1.sql' no seu MySQL ou executar via phpMyAdmin (ou usar o comando mysql < projeto1.sql).
2. Colocar a pasta do projeto (ATIVIDADES/projeto1) dentro da pasta www/htdocs do seu servidor local (XAMPP/Laragon).
3. Acessar o painel administrativo: http://localhost/.../ATIVIDADES/projeto1/admin/index.php
4. Navegar até 'Pizzas' no menu do admin e testar as funções de C, R, U, D.

Resumo da entrega:
- Projeto atualizado com CRUD de Pizzaria.
- Arquivos adicionados na pasta admin/.
- Arquivo SQL exportado: pizza.sql
