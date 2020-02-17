<?php
class Config{
 //informaçoes basicas do Site
    const SITE_URL      = "http://localhost";
    const SITE_PASTA    = "LojaVirtual";
    const SITE_NOME     = "LojaVirtual - PHP";
    const SITE_EMAIL_ADM= "junior.pro07@gmail.com";
//informaçoes pessoais
    const DESENVOLVEDOR = "Edivaldo Bezerra da Silva Junior";
    const LINKEDIN      = "in/edivaldo-bs-junior";
    const TELEFONE      = "(61) 9 8531-2497";
//informaçoes Banco de dados
    const BD_HOST       = "localhost";
    const BD_USER       = "root";
    const BD_SENHA      = "";
    const BD_NOME       = "lojavirtual"; 
    const BD_PREFIX     = "";     
//informaçoes para PHP Mailler
    const EMAIL_HOST     = "smtp.gmail.com";
    const EMAIL_USER     = "junior.pro07@hotmail.com";
    const EMAIL_NOME     = "Contato Loja Virtual";
    const EMAIL_SENHA    = "";
    const EMAIL_PORTA    = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTSECURE= "tls";
    const EMAIL_COPIA    = "junior.pro07@gmail.com";
}
?>