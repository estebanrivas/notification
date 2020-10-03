<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de teste", "<p>Esse é um e-mail para <b>Teste</b></p>p>", "gustavo@gustavoweb.me", "Gustavo Web", "esteban_sistemas@yuahoo.com.br", "teste da aula");

var_dump($novoEmail);