# WEBSITE: Joab Torres Alencar

Desenvolvi este portfólio com o objetivo de divulgar minhas habilidades técnicas como `Analista de Sistema`, é também para descrever auto bibliografia profissional, com possibilidade de acesso ao meu currículo empresarial é acadêmico. 

### Tecnologias Utilizadas:
`HTML 5` `CSS 3` `JavaScript` `jQuery` `PHP 8.2.^` `MySQL` `MVC`


## Diretórios
  `\shared`

   -- `\fontawesome`
   
   -- `\styles`
   
   -- `\scripts`
   
   -- `\views` views externas da aplicação
   
   --- `\email`
   
 `\source` core da aplicação
   
   -- `\App` controlles
   
   -- `\Boot`  configurações
   
   -- `\Core` core
   
   -- `\Models` models
   
   -- `\Support` bibliotecas externas
   
 `\storage` arquivos feito upload
   
   -- `\media`
   
   -- `\files`
   
   -- `\images`
   
   -- `\cache`
   
`themes` views da aplicação
   
  -- `\joabtorres` view
  
  --- `\_template` template html
  
  --- `\assets`
  
  ---- `\css`
  
  ---- `\js`
  
  ---- `\images`
  
  `\vendor` composer


## SETUP
1º Crie um virtual host com final `.loc`, pois o projeto foi desenvolvido utilizando o servidor devilbox (http://devilbox.org/);

2º Crie um banco de dados MySQL e import o arquivo `joabtorres_banco_de_dados.sql`;

3º Acesse o arquivo Config.php em `source/Boot/Config.php`;

4º Configure as constantes;

/**
DATABASE
 */

define("CONF_DB_HOST", "localhost");

define("CONF_DB_USER", "root");

define("CONF_DB_PASS", "");

define("CONF_DB_NAME", "nome_do_banco");

/**
PROJECT URLs
 */

define("CONF_URL_TEST", "https://joabtorres-portfolio.loc");

/**
  MAIL
  (necessário ter uma conta no sendgrid.net)
 */

define("CONF_MAIL_PASS", "");

define("CONF_MAIL_SENDER", ["name" => "", "address" => ""]);

define("CONF_MAIL_SUPPORT", "");

define("CONF_MAIL_DESTINATARY", "");


