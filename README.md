# Instalar Laravel:
    # Primeiro instalar Laravel na máquina:
        > composer global require "laravel/installer"

    # Conferir se Laravel está global:
    # Se não estiver: https://stackoverflow.com/questions/25373188/laravel-installation-how-to-place-the-composer-vendor-bin-directory-in-your

# Primeiros passos:
    # Instalar as dependências:
        > composer install

    # Copiar o arquivo ".env.example" e chamar a cópia de ".env".

    # Configurar o arquivo .env com as credenciais do seu MySQL:
        DB_DATABASE=nome_do_seu_banco
        DB_USERNAME=seu_user
        DB_PASSWORD=sua_senha

    # Rodar os seguintes comandos em ordem:
        > php artisan key:generate
        > php artisan config:cache 

        > (Sempre que modificar o .env é necessário rodar o config:cache)

    # Dar permissão na pasta storage (evita problemas de permissão de acesso):
        > chmod 777 -R storage/

# Para subir o projeto local:
    > php artisan serve

# Para iniciar o banco:
    > php artisan migrate:fresh --seed
    
    > Usuário para logar: admin@admin.com 
    > Senha para logar: 123456