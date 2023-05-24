## Requirements

- PHP >= 8.1
- Ctype PHP Extension
- cURL PHP Extension
- DOM PHP Extension
- Fileinfo PHP Extension
- Filter PHP Extension
- Hash PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PCRE PHP Extension
- PDO PHP Extension
- Session PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Installation

- Clone the repo and `cd` into it
- Run `composer install`
- Rename or copy `.env.example` file to `.env`
- Run `php artisan key:generate`
- Create a database named `db_ssm`
- Run the following command in your terminal: `php artisan migrate:fresh --seed`. This command will migrate your database tables and seed them with initial data.
- Log in using a lowercase username and the password provided in the question

| Username     | Password |
|--------------|----------|
| adm-01       | fd261    |
| ferdi        | ecfa2    |
| nouval       | 59d8f    |

