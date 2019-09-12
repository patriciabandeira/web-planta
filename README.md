# WebPlanta

Repositório do Projeto "web-planta" - Trabalho de Conclusão de Curso - IFMS TEC INFO CB.

1. [Requisitos](#1-requisitos)
2. [Instalação](#2-instalação)
3. [Acesso](#3-acesso)

## 1. Requisitos

- PHP >= 7.1.3
- Composer >= 1.7.0
- BCMath PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- MariaDB >= 10.4.0 ou MySQL >= 5.6.0


## 2. Instalação

**2.1.** Instalação das dependências do projeto com composer:

    composer install


**2.2.** Faça uma cópia do arquivo `.env.example` e renomeie para `.env`:


**2.3.** Criação de nova chave de criptografia:

    composer new-install


**2.4.** Crie um banco de dados no MariaDB ou MySQL.

> Sugestão de definição de collation: **utf8mb4_general_ci**


**2.4.** Configure a conexão com os dados do banco de dados no arquivo `.env`:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=NOMEDOBANCO
    DB_USERNAME=USUARIO
    DB_PASSWORD=SENHA


**2.5.** Geração do cache das configurações da aplicação:

    composer build


**2.6.** Criação das tabelas e inserção dos dados no banco de dados:

    composer database

## 3. Acesso

> Caso a instalação tenha sido realizada em um host local, troque o domínio por **localhost** ou **127.0.0.1**.

**3.1.** Acesso à área pública da aplicação:

> **URL:** http://dominio/web-planta/


**3.1.** Acesso à área privada da aplicação:

> **URL:** http://dominio/web-planta/admin <br/> **Usuário:** admin@gmail.com <br/> **Senha:** 12345678