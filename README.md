# Álbum de figurinhas digital
### Laravel
- Aplicação CRUD
- É possível adicionar, remover, editar e listar informações e imagens sobre jogadores da NBA<br>

<a href="https://www.youtube.com/watch?v=Mcgfb09kvHw" target="_blank" rel="noopener noreferrer">Vídeo demonstrativo</a><br>
### Como usar
**É preciso rodar os seguintes comandos na raíz do projeto, após clonar o repositório**

    npm i
    composer install
    mv .env.example .env 
    php artisan cache:clear 
    composer dump-autoload 
    php artisan key:generate

**OBS: Para o funcionamento da aplicação, as configurações da sua conexão com o banco de dados, devem ser definidas no arquivo .env, nas constantes que iniciam com DB**

**Criar o banco de dados e tabelas**

    php artisan migrate

**Subir o servidor**

    php artisan serve
