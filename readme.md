# SGLAB (Sistema de Gerenciamento de Laboratórios)

## Instalação Testada no Ubuntu 14.04 i386

## 1 - Instalação de Dependências

* sudo apt-get install git
* sudo add-apt-repository ppa:ondrej/php
* sudo apt-get update
* sudo apt-get install python-software-properties
* sudo apt-get install lamp-server
* sudo apt-get update

## 2 - Instalar Dependências PHP < 5.6

* sudo apt-get install php5 php5-mysqlnd php5.6-mysql php5.6-mbstring php5.6-ext-dom php-curl php5.6-xml

* cd /var/www/html/
* git clone https://github.com/7miguelsilva7/sglab.git

## 3 - Criar base de dados "sglab"
## 4 - Restaurar o banco que se encontra na pasta database do projeto

## 5 - Atualizar composer

* composer update

## 6 - Para rodar a aplicação executar

* php artisan serve

## 7 - No navegador usar o endereço:

* http://localhost:8000/



