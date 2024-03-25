# Laravel Reverb Test Project

## How to Start the Project

Follow these commands in order to set up the project:

1. **Copy the `.env.example` file to `.env`**

    ```bash
    cp .env.example .env
    ```

2. **Generate a key for your project**

    ```bash
    php artisan key:generate
    ```

3. **Install all PHP dependencies**

    ```bash
    composer install
    ```

4. **Install all JavaScript dependencies**

    ```bash
    npm install
    ```

5. **Run migrations (using SQLite by default)**

    ```bash
    php artisan migrate
    ```

6. **Run all seeders**

    ```bash
    php artisan db:seed
    ```

## Notice

Make sure you log in as the user with ID 1:

```plaintext
login: test@example.com
password: password

``` 
This is because the channel will check if this user can listen to the channel. Once logged in, return to the main page.

***Run queue***

```
php artisan queue:listen
```
**Starting Reverb with a debugging**

```
php artisan reverb:start --debug
```



