<?php

echo 'Teste.';

$msg_nome      = $_POST['nome'];
$msg_email     = $_POST['email'];
$msg_mensagem  = $_POST['mensagem'];

$to      = 'yurigalli@gmail.com';
$subject = 'Mensagem - Casamento (' . $msg_nome . ')';
$message = $msg_nome . 'enviou uma mensagem pelo site\n' . $msg_mensagem;
$message = wordwrap($message,70);
$headers = 'From: Site Casamento - Marco e Laura <yurigalli@gmail.com>';

mail($to, $subject, $message, $headers);

/* $to      = 'lauranfreitas7@gmail.com';
$subject = 'Mensagem - Casamento (' . $msg_nome . ')';
$message = $msg_nome . 'enviou uma mensagem pelo site\n' . $msg_mensagem;
$message = wordwrap($message,70);
$headers = 'From: Site Casamento - Marco e Laura <lauranfreitas7@gmail.com>' . PHP_EOL .
    'Reply-To: Site Casamento - Marco e Laura <lauranfreitas7@gmail.com>' . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

$to      = 'marco.tf2@gmail.com';
$subject = 'Mensagem - Casamento (' . $msg_nome . ')';
$message = $msg_nome . 'enviou uma mensagem pelo site\n' . $msg_mensagem;
$message = wordwrap($message,70);
$headers = 'From: Site Casamento - Marco e Laura <marco.tf2@gmail.com>' . PHP_EOL .
    'Reply-To: Site Casamento - Marco e Laura <marco.tf2@gmail.com>' . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers); */

header("Location: /#");
exit();

?>