![alt text](https://laravel.com/img/logotype.min.svg)
## Descrição 
Este projeto tem como objetivo atender ao desafio da UNITEC, utilizando PHP com Laravel. O sistema contém funcionalidades de backend, como:
- Componentização para reaproveitamento de código.
Integração com APIs externas para fornecimento de dados.
- Gerenciamento de estado utilizando Serviços.
Versão do Laravel
Este projeto utiliza a versão Laravel 10.x.

## Funcionalidades
- Roteamento de requisições HTTP com suporte para GET, POST, PUT, DELETE.
- Autenticação e Autorização de usuários.
- Integração com Banco de Dados utilizando Eloquent ORM.
- Validação de Dados de forma simplificada e segura.
- Envio de E-mails com funcionalidades como reset de senha, notificações, etc.
- Criação de APIs RESTful para comunicação entre o frontend e o backend.
## Instalação
##### Pré-requisitos:
Antes de instalar o Laravel, é necessário garantir que sua máquina tenha os seguintes pré-requisitos:

- PHP - Laravel requer PHP 8.1 ou superior. Para verificar se o PHP está instalado, execute: `php -v`
- Composer - O Composer é o gerenciador de dependências para PHP, necessário para instalar o Laravel.
- Para verificar se o Composer está instalado, execute: `composer --version`
- Banco de Dados - Laravel suporta vários bancos de dados, como MySQL, PostgreSQL, SQLite e SQL Server.

## Como instalar o Laravel?
-  A maneira mais comum de instalar o Laravel é utilizando o Composer -e necessario Baixar o Composer Installer para isso acesse o site oficial do Composer: https://getcomposer.org/

- Após o Composer estar instalado, execute o comando abaixo para instalar o Laravel Installer globalmente:
`composer global require laravel/installer`

- Para verificar a versão do `composer --version`

## Verificando a Instalação
- Após a instalação, entre no diretório do seu projeto e verifique se tudo está funcionando corretamente. 
- add comamdo de verificação da instalçaõa do laravel,

## Configuração do Banco de Dados:
- Foi utilizado o xampp que ja contem a instalação do MySqL que facilita a administração do SGBD. Abaixo segue o comando opara a criação da tabela (Opcional)

  ``CREATE TABLE transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    description VARCHAR(255) NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    type ENUM('income', 'expense') NOT NULL,
    category VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP);``

- Abra o arquivo .env no diretório raiz do seu projeto Laravel.

- Configure as credenciais do seu banco de dados. Exemplo para MySQL: `DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha` 

- Após configurar o banco de dados, você pode rodar as migrations do Laravel para configurar as tabelas padrão:
`php artisan migrate` 

## Executando a Aplicação:
-  Execute o comando abaixo para iniciar o servidor local do Laravel: 
- `php artisan serve`
Isso iniciará um servidor local que ficará disponível em http://localhost:8000.

`php artisan serve --port=8080` comando opcional para escolher uma porta especifica.


## Comandos Comuns:
- Verificar a versão do Laravel:
`php artisan --version`
- php artisan make:
`controller NomeController`
- Criar uma nova Migration:
`php artisan make:migration create_nome_da_tabela_table`
- Rodar os Testes:
`php artisan test`




