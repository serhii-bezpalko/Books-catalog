
# 📚 Books catalog

A web application for managing a library of books and authors with support for CRUD operations, AJAX modal forms, sorting, searching, pagination, and image uploads.
## Installing / Getting started
1. Clone the repo
    ```shell
    git clone https://github.com/serhii-bezpalko/Books-catalog.git
    cd Books-catalog
    ```
2. Create `.env`
    ```shell
    cp .env.example .env
    ```
    Update .env with correct database credentials:
    ```shell
    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=books
    DB_USERNAME=root
    DB_PASSWORD=root
    ```
3. Start the containers
    ```shell
    docker compose up --build -d
    ```
4. Run migrations
   Once containers are up:
    ```shell
    docker exec -it php-fpm php artisan migrate
    ```
5. Build CSS & JS File
    ```shell
    npm install
    npm run build
    ```
6. Go to address http://127.0.0.1:8080 
