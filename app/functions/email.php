<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// function send($data){
//    $to = "felipecardoso1508@gmail.com";
//    $subject = $data->subject;
//    $message = $data->message;
//    $headers = "From: {$data->email}" . "\r\n" .  
//    'Reply-To: contato@devclass.com.br' . "\r\n" . 
//    'X-Mailer: PHP/' . phpversion();
   
//    return mail($to, $subject, $message, $headers);
   

// }
function send($data) {
    // Criando uma instância do PHPMailer
    $email = new PHPMailer(true);
    try {
        // Configurações do servidor SMTP
        $email->CharSet = 'UTF-8';
        $email->SMTPSecure ='plain';
        $email->isSMTP();
        $email->Host = 'smtp.mailtrap.io';  // Defina o host SMTP (exemplo: Gmail)
        $email->Port = 465;              // A porta SMTP
        $email->SMTPAuth = true;
        $email->Username = '685f482d2f7aef';  // Seu e-mail
        $email->Password = '667946b59b5763';  // Sua senha (ou senha de app para Gmail)
        
        // Configurações do remetente
        $email->setFrom('felipecardoso1508@gmail.com', 'Seu Nome');
        $email->addAddress($data['quem']);  // Destinatário

        // Corpo do e-mail
        $email->isHTML(true);
        $email->Subject = $data['assunto'];
        $email->Body    = $data['mensagem'];
        $email->AltBody = 'Para visualizar este e-mail, utilize um cliente que suporte HTML.';

        // Envia o e-mail
        return $email->send();
    } catch (Exception $e) {
        echo "Mensagem não pode ser enviada. Erro: {$email->ErrorInfo}";
        return false;
    }
}