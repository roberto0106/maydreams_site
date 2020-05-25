<?php


$name = $_POST['name']; 
$email_address = $_POST['email']; 
$mensagem = "O usuario {$name} enviou uma messagem: {$_POST['mensagem']} \n.O email de contato dele: {$email_address}";
$headers = "From: $myemail\n";
$myemail = 'patricia@mdxeventos.com.br';


mail($myemail,"Contato do Site",$mensagem,$headers);


echo 'apple';


?>