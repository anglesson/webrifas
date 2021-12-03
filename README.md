# WebRifas 1.0
<p align="center">
  <img src="http://img.shields.io/static/v1?label=License&message=MIT&color=green&style=for-the-badge"/>
   <img src="http://img.shields.io/static/v1?label=STATUS&message=CONCLUIDO&color=GREEN&style=for-the-badge"/>
</p>

> Status do Projeto: Concluido :heavy_check_mark:

### Tópicos

:small_blue_diamond: [Descrição do projeto](#descrição-do-projeto)

:small_blue_diamond: [Funcionalidades](#funcionalidades)

:small_blue_diamond: [Pré-requisitos](#pré-requisitos)

:small_blue_diamond: [Como rodar a aplicação](#como-rodar-a-aplicação)

### Descrição do Projeto

<p align="justify">
  WebRifas é uma aplicação web para o cadastro de rifas.
</p>

### Funcionalidades

- [x] Cadastro de Rifas - Esta funcionalidade permite que o usuário realize o cadastro de Rifas.
- [x] Editar Rifas - Esta funcionalidade permite que o usuário realize alterações no cadastro da Rifa.
- [x] Excluir Rifas - Esta funcionalidade permite que o usuário exclua rifas cadastradas do site.
- [x] Listar Rifas - Esta funcionalidade permite que o usuário visualize todas as Rifas cadastradas.

### Pré Requisitos

* Git 2.33.1
* Composer 2.1.11 ou superior
* PHP 7.3 ou superior
* Mysql Server 8.0 ou superior

### Como rodar a aplicação

No terminal de seu computador, clone o repositório projeto:
```
git clone https://github.com/anglesson/webrifas.git
```

Entre na pasta do projeto:
```
cd webrifas
```

Instale as dependências do projeto:
```
composer install
```

No Mysql crie um banco de dados com o nome **webrifas**.

Na raiz da pasta do projeto, renomeie o arquivo **.env.example** para **.env**. <br>
Preencha as variáveis de ambiente do arquivo recém renomedo **.env**.

```
DB_DATABASE=webrifas
DB_USERNAME=nome_do_usuario_do_banco_de_dados
DB_PASSWORD=senha_do_usuario_do_banco_de_dados
```
Gere uma chave para aplicação utilizando o comando **artisan**.

```
php artisan key:generate
```

Crie a estrutura de banco de dados utilizando o comando abaixo.

```
php artisan migrate
```

Execute a aplicação:
```
php aritsan serve
```
Pronto! Sua aplicação estará disponível em http://localhost:8000

## Licença 

The [MIT License]() (MIT)

Copyright :copyright: 2021 - WebRifas 1.0