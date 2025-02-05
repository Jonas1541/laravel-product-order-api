<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel API Demo

Projeto simples de API RESTful em Laravel com endpoints para Products e Orders.

## Requisitos

- PHP 8+
- Composer
- MySQL rodando em localhost na porta 8080, usuário root, senha root

## Configuração

1. Clone o repositório.
2. Execute `composer install`.
3. Configure o arquivo `.env` conforme necessário (veja a configuração no commit 2).
4. Execute `php artisan migrate` para criar as tabelas.
5. Execute `php artisan serve` para iniciar o servidor (geralmente em http://127.0.0.1:8000).

## Endpoints

- **Products**
  - GET /api/products
  - GET /api/products/{id}
  - POST /api/products
  - PUT/PATCH /api/products/{id}
  - DELETE /api/products/{id}

- **Orders**
  - GET /api/orders
  - GET /api/orders/{id}
  - POST /api/orders
  - PUT/PATCH /api/orders/{id}
  - DELETE /api/orders/{id}
