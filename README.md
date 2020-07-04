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

16 - Introdução aos Controllers no Laravel 6.x
17 - Controllers com Parâmetros de Rotas no Laravel 6.x
18 - Controllers de CRUD no Laravel 6.x
19 - Controllers Resources no Laravel 6.x
20 - Injeção de Dependências no Laravel 6.x
21 - Middlewares em Controllers no Laravel 6.x

[Voltar ao Índice](#indice)

---


## <a name="parte4">4 - Views</a>



[Voltar ao Índice](#indice)

---


## <a name="parte5">5 - Request</a>



[Voltar ao Índice](#indice)

---


## <a name="parte6">6 - Banco de Dados</a>



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

