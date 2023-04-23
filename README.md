## Sobre
Este é um projeto teste para Rede Ancora onde foi feito uma API Restfull, e neste projeto foi desenvolvido um CRUD de produtos.

## Github
**Clonando projeto**\
    - `git clone https://github.com/mateus-prog/backend-php-test.git`\
## Instalação da API RestFull

**Usando docker**\
    - `cp .env.example .env`\
    - `docker-compose build app`\
    - `docker-compose up -d`\
    - `docker-compose exec app composer install`\
    - `docker-compose exec app php artisan migrate`\
    - `docker-compose exec app php artisan db:seed`\
    - Then Access: http://localhost:8000/
    
**Sem Docker**\
    - `cp .env.example .env`\
    - `composer install`\
    - `php artisan migrate`\
    - `php artisan db:seed`\
    - `php artisan serve`\
    - Then Access: http://localhost:8000/

**Postman**\
    - `Importar o arquivo postman.json que se encontra na raiz do projeto no aplicativo postman para fazer os testes do CRUD`
