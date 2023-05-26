### Students Auth App

Aplicação crud backend de desenvolvimento para gestão de estudantes. Usando o sanctum authentication para validação por meio de token. Usuário conseguirá acessar os endpoints para teste se estiver autenticado como admin, quando faz o registro e estando logado, em suas respectivas rotas.

![Badge em Desenvolvimento](http://img.shields.io/static/v1?label=STATUS&message=EM%20DESENVOLVIMENTO&color=GREEN&style=for-the-badge) 
 <hr>

### Tecnologias e dependências utilizadas 

![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-gray.svg?style=for-the-badge&logo=mysql&logoColor=white)
![JWT](https://img.shields.io/badge/JWT-black?style=for-the-badge&logo=JSON%20web%20tokens) 
![Postman](https://img.shields.io/badge/Postman-FF6C37?style=for-the-badge&logo=postman&logoColor=white)
<hr>

### Pré-requisitos:

  Você precisa ter instalado em sua máquina as seguintes ferramentas:<br>
- Um bom editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)<br>
- Gerenciador de dependências [Composer](https://getcompose.org)
- Um servidor para rodar o PHP e o banco de dados, no caso [Xampp](https://apachefriends.org) 

### Rodar a aplicação

```bash
# development
$ php artisan serve
```
<hr>

### Endpoints

- POST /api/v1/admin/register - registro de usuário admin<br>   
- POST /api/v1/admin/login - login de admin autenticado para acessar as rotas abaixo<br> 
- POST /api/v1/admin/logout - logout de usuario autenticado<br> 
 
- GET /api/v1/students - retorna todos os usuários salvos no banco
- GET /api/v1/students/{id} - retorna usuário do banco a partir do id declarado no params
- POST /api/v1/students - cria um usuário
- PUT /api/v1/students/{id} - atualiza um usuário
- DELETE /api/v1/students/{id} - deleta um usuário

<hr>

- Use o <i>Postman</i> ou <i>Insomnia</i> para testar os endpoints.<br>
- Importante lembrar de configurar o banco de dados na variável de ambiente<i> (.env)</i><br>  

<hr>

### Acesso ao Projeto

 [Acesse o código fonte do projeto](https://github.com/matheushenriquecsb/bookstore-backend) 
      
