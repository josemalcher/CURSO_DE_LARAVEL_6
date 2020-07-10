# CURSO DE LARAVEL 6

https://academy.especializati.com.br/curso/curso-laravel-6

APRENDA DE UMA VEZ POR TODAS O MELHOR E MAIS COMPLETO FRAMEWORK PHP DO MERCADO. APRENDA COM QUEM FAZ, E ENSINA O QUE FEZ!

## <a name="indice">Índice</a>

1. [Introdução e Organização Laravel 6.x](#parte1)     
2. [Rotas](#parte2)     
3. [Controllers](#parte3)     
4. [Views](#parte4)     
5. [Request](#parte5)     
6. [Banco de Dados](#parte6)     
7. [Eloquent ORM](#parte7)     
8. [Autenticação](#parte8)     
9. [Middlewares](#parte9)     
---


## <a name="parte1">1 - Introdução e Organização Laravel 6.x</a>



[Voltar ao Índice](#indice)

---


## <a name="parte2">2 - Rotas</a>

- 09 - Introdução a Rotas no Laravel 6.x 
- 10 - Rotas any e match no Laravel 
- 11 - Rotas com parâmetros no Laravel 
- 12 - Rotas no Laravel - redirect e view 
- 13 - Rotas nomeadas no Laravel 
- 14 - Grupo de Rotas no Laravel 
- 15 - Comandos do Artisan para Rotas no Laravel 

```
> php artisan route:list
+--------+----------------------------------------+------------------------+----------+---------------------------------------+--------------+
| Domain | Method                                 | URI                    | Name     | Action                                | Middleware   |
+--------+----------------------------------------+------------------------+----------+---------------------------------------+--------------+
|        | GET|HEAD                               | /                      |          | Closure                               | web          |
|        | GET|HEAD|POST|PUT|PATCH|DELETE|OPTIONS | any                    |          | Closure                               | web          |
|        | GET|HEAD                               | api/user               |          | Closure                               | api,auth:api |
|        | GET|HEAD                               | categoria/{flag}       |          | Closure                               | web          |
|        | GET|HEAD                               | categoria/{flag}/posts |          | Closure                               | web          |
|        | GET|HEAD                               | contato                |          | Closure                               | web          |
|        | GET|HEAD                               | empresa                |          | Closure                               | web          |
|        | GET|HEAD                               | login                  | login    | Closure                               | web          |
|        | GET|POST|HEAD                          | match                  |          | Closure                               | web          |
|        | GET|HEAD                               | nome-url               | url.name | Closure                               | web          |
|        | GET|HEAD                               | produtos/{idProdutos?} |          | Closure                               | web          |
|        | GET|HEAD|POST|PUT|PATCH|DELETE|OPTIONS | redirect1              |          | Illuminate\Routing\RedirectController | web          |
|        | GET|HEAD                               | redirect2              |          | Closure                               | web          |
|        | GET|HEAD                               | redirect3              |          | Closure                               | web          |
|        | POST                                   | register               |          | Closure                               | web          |
|        | GET|HEAD                               | view                   |          | Illuminate\Routing\ViewController     | web          |
+--------+----------------------------------------+------------------------+----------+---------------------------------------+--------------+

> php artisan route:cache

Route cache cleared!

```

[Voltar ao Índice](#indice)

---


## <a name="parte3">3 - Controllers</a>

- 16 - Introdução aos Controllers no Laravel 6.x
- 17 - Controllers com Parâmetros de Rotas no Laravel 6.x
- 18 - Controllers de CRUD no Laravel 6.x
- 19 - Controllers Resources no Laravel 6.x
- 20 - Injeção de Dependências no Laravel 6.x
- 21 - Middlewares em Controllers no Laravel 6.x

[Voltar ao Índice](#indice)

---


## <a name="parte4">4 - Views</a>

- 22 - Introdução a Views no Laravel 6.x
- 23 - Impressões no Blade Laravel {{ vs {!!
- 24 - Templates Blade Laravel
- 25 - Estruturas de Controle Blade Laravel
- 26 - Estruturas de Repetição Blade Laravel
- 27 - Includes, Components e Slots no Blade Laravel
- 28 - Stacks Blade Laravel
- 29 - Formulários no Laravel (csrf)
- 30 - Formulários com Métodos de Envio no Laravel (verbo http)
- 31 - Outros recursos de views no Laravel

```
php artisan view:clear

```

[Voltar ao Índice](#indice)

---


## <a name="parte5">5 - Request</a>

- 32 - Pegar dados do formulário com o Laravel
- 33 - Upload de Arquivos no Laravel, com Request
- 34 - Upload de Arquivos Publicos no Laravel 

```
php artisan storage:link
The [public/storage] directory has been linked.

// link = http://cursolaravel6.devlocal/storage/products/testePublico.jpeg
```

- 35 - Validações no Laravel 6
- 36 - Validações no Laravel 6 com Form Request

```
php artisan make:request StoreUpdateProductRequest

```



[Voltar ao Índice](#indice)

---


## <a name="parte6">6 - Banco de Dados</a>

- 37 - Conectar o Laravel 6.x ao Banco de Dados
- 38 - Migrations no Laravel 6.x 

```
> php artisan migrate
Migration table created successfully.
Migrating: 2014_10_12_000000_create_users_table
Migrated:  2014_10_12_000000_create_users_table (0.07 seconds)
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table (0.04 seconds)
Migrating: 2019_08_19_000000_create_failed_jobs_table
Migrated:  2019_08_19_000000_create_failed_jobs_table (0.02 seconds)

> php artisan migrate
Nothing to migrate.

```

- 39 - Seeders no Laravel 6.x

```
> php artisan make:seeder UsersTableSeeder
Seeder created successfully.

```

```php
<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([ // laravel-repositories/app/User.php
            'name'      => 'José Malcher jr',
            'email'     => 'contato@josemalcher.net',
            'password' => bcrypt('123456'),
        ]);
    }
}

```

```php
<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
    }
}

```

```
php artisan db:seed
Seeding: UsersTableSeeder
Seeded:  UsersTableSeeder (0.1 seconds)
Database seeding completed successfully.
 
```

- Rodar somente outro Seeder

```
php artisan db:seeder --class=ProductTableSeeder
```



- 40 - Factory no Laravel 6.x

```
php artisan db:seed --class=UsersTableSeeder
Database seeding completed successfully.

```


[Voltar ao Índice](#indice)

---


## <a name="parte7">7 - Eloquent ORM</a>



[Voltar ao Índice](#indice)

---


## <a name="parte8">8 - Autenticação</a>



[Voltar ao Índice](#indice)

---


## <a name="parte9">9 - Middlewares</a>



[Voltar ao Índice](#indice)

---

