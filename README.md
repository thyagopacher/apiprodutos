## API Produtos em Laravel

Será necessário ajustar o arquivo .env para usuário e senha do banco de dados, além de criar uma base de dados em um nome qualquer e definir o nome na variável DB_DATABASE

Não esquecer de rodar o comando:

```
composer install

```

-   na raiz do projeto e caso esteja usando Linux ou WSL use o usuário padrão do sistema e não o root

*   também foi anexado ao projeto o arquivo de Insomnia para debugar as rotas e caso necessário o .sql para gerar o banco de dados, porém caso queira após criar o banco a tabela pode ser criada com migration através do comando na raiz do projeto:

`php artisan migrate`
