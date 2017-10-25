# Quiz Pedagogia


Um projeto desenvolvido em conjunto com a turma de pedagogia da instituição UNISAL Lorena, para acompanhar a aprendizagem de crianças entre 8 e 10 anos, um Quiz com questões de diversas matérias, com um painel intuitivo para o professor acompanhar o histórico dos alunos, sabendo assim se ele teve alguma evolução na aprendizagem.

### Versionamento Semântico

Padrão do versionamento

```
x.y.z - X é a versão Maior, Y é a versão Menor, e Z é a versão de Correção. 
```

### Estrutura de arquivos

```
  Quiz/
  |--assets/
  |  |--css/
  |     |--icons/
  |  |--fonts/
  |  |--img/
  |  |--js/
  |
  |--controllers/
  |  |--all controllers
  |
  |--lib/
  |  |--autoloader.php
  |
  |--models/
  |  |--all models
  |
  |--views/
  |  |--all views
  |
  |--index.php
  |
  |--.htaccess
  |
```

### Executando

Criar um arquivo na raiz do projeto chamado

```
.htaccess
```

Cole o código abaixo

```
# Liga a possibilidade de redirecionar
RewriteEngine On

# Alguns servidores usam isso
# RewriteBase /

# Condições se não for um arquivo ou diretorio
RewriteCond %(REQUEST_FILENAME) !-f
RewriteCond %(REQUEST_FILENAME) !-d

# Se não for alguma dessas extensões para download, sera redirecionado para o index.php
RewriteRule !\.(css|js|icon|zip|rar|png|jpg|gif|pdf|eot|woff|woff2|ttf)$ index.php [L]

# Adiciona o .phtml para diferenciar arquivos puramente php, para arquivos mistos php/html
AddType application/x-httpd-php .php .phtml
```

## Autor

* **Vinnicius Gomes**
* **Felipe Novais**

Veja também a lista de [contributors](https://github.com/VinniciusGomes/Pedagogia/contributors) que participaram deste projeto.

## Licença


Este projeto está licenciado sob o MIT License - consulte o arquivo [LICENSE.md](LICENSE.md) para obter detalhes.
