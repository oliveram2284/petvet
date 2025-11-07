# petvet
laravel and Filament

# Pasos para levantar el proyecto:
    1 - Instalar Docker (linux) or DockerDesktop  para windows 
        - https://learn.microsoft.com/es-es/windows/wsl/tutorials/wsl-containers

    2 - Iniciar Docker    
    3 - Desde la terminal ingresar al directorio del proyecto y ejecutar
        - docker compose build 
        - docker compose up -d
     
    4 - intentar acceder al localhost desde web
        
    5 - desde la consola al container php - laravel
        - docker exec -it petvet_app /bin/bash
        - Ejectuar: php artisan migrate
        - db acccess:
            DB_CONNECTION=pgsql
            DB_HOST=db
            DB_PORT=5432
            DB_DATABASE=petvet_db
            DB_USERNAME=root
            DB_PASSWORD=123456

        - Ejecutar : php artisan make:filament-user
            - user: admin
            - email: admin@email.com
            - password: 123456
