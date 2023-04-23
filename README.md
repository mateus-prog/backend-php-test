## Sobre o projeto
Este é um projeto teste para Rede Ancora onde foi feito uma API Restfull, e neste projeto foi desenvolvido um CRUD de produtos.

## Github
**1 Passo - Clonando projeto**\
    - `git clone https://github.com/mateus-prog/backend-php-test.git`\
## Instalação da API RestFull

**2 Passo - Instalação usando Docker**\
    - `cp .env.example .env`\
    - `docker-compose build app`\
    - `docker-compose up -d`\
    - `docker-compose exec app composer install`\
    - `docker-compose exec app php artisan migrate`\
    - `docker-compose exec app php artisan db:seed`\
    - `docker-compose exec app php artisan test`\
    - Then Access: http://localhost:8000/

**3 Passo - Teste no Postman**\
    - `Importar o arquivo postman.json que se encontra na raiz do projeto no aplicativo postman para fazer os testes do CRUD`
