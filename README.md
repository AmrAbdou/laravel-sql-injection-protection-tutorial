# laravel-sql-injection-protection-tutorial

An application created to illustrate SQL injection vulnerabilities in Laravel applications and how to use Snyk IDE extensions to scan your code for vulnerabilities.

1- Duplicate the `.env.example` file and rename the new one to `.env`. Find the database environment variables in the newly creat `.env` file and edit them as follows:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={{your-database-name}}
DB_USERNAME={{your-database-username}}
DB_PASSWORD={{your-database-user-password}}

```

Remember to replace {{your-database-name}} with your databse name, {{your-database-username}} with the username, and {{your-database-password}} with the password.

2- Run the following command to populate the database:

```bash
php artisan migrate
```

3- Finally, run the application it using the following command:

```bash
php artisan serve
```
Then visit the `http://localhost:8000/contacts/create` page in your browser to see a very simple contact form.
