<?php

require "../../../bootstrap.php";

if(isEmpty()){
    flash('message', 'preencha todos os campos');

    return redirect("contato");
}

    


$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's'


]);

$data = [
    'quem' => $validate['email'],      // Acessando os dados sanitizados
    'para' => 'felipecardoso1508@gmail.com',
    'mensagem' => $validate['message'],
    'assunto' => $validate['subject']
];

if(send($data)) {
    flash ('message', 'email enviado com sucesso');

    return redirect("contato");
}