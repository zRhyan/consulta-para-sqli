comandos termianl
# mv conecta.php /var/www/
# mv sqli.php /var/www/html
# service apache2 start
# sevice mysql start
# mysql
> CREATE USER 'teste'@'localhost' IDENTIFIED BY 'teste';
> GRANT ALL PRIVILEGES ON * . * TO 'teste'@'localhost';
> CREATE DATABASE pentesteweb;
> USE pentestweb;
> CREATE TABLE usuarios (
    -> id INT NULL AUTO_INCREMENT,
    -> nome VARCHAR(200) NOT NULL,
    -> login VARCHAR(200) NOT NULL,
    -> senha VARCHAR(200) NOT NULL,
    -> endereco VARCHAR(200) NOT NULL,
    -> telefone VARCHAR(40) NOT NULL,
    -> PRIMARY KEY(id) );
 
 > INSERT INTO usuarios VALUES(1, "Administrador", "admin", "admin123", "Endereco do Admin", "000-000");
 > INSERT INTO usuarios VALUES(2, "Daniel", "daniel", "d4n13l", "Endereco do Daniel", "111-111");
 > INSERT INTO usuarios VALUES(3, "Rubens", "rubens", "prates", "Endereco do Rubens", "222-222");
 
 > exit
 
 ------------------------------------------
 
 !Depois e so acessar o localhost/sqli.php e fazer o seu sqli :)
