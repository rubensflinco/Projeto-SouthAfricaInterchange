<?php
require '/home/plane132/public_html/setores/API/privadas/includes/enviar_email.php';

$assunto = "S.A.I site - Entrou em contato : ".$_POST['nome'];
$texto = "
O(a) ".$_POST['nome']." Entrou em contato
</br></br><hr>
Nome : ".$_POST['nome']."
<hr>
Email : ".$_POST['email']."
<hr>
Mensagem : ".$_POST['mensagem']."
<hr></br></br>
Enviado via site S.A.I sistema de contato!
";

$EnviandoEmail = EnviarEmail($_POST['email'], "africadosul4sex@gmail.com", $assunto, $texto);
if ($EnviandoEmail == "OK"){
echo '<h3 class="fadeInUp animated" style="color: #5cb85c;">OK : Formulario completo e enviado, vamos te responder pelo seu email obrigado.</h3>';
}else{
echo '<h3 class="fadeInUp animated" style="color: #d9534f;">ERRO : Não conseguimos completar o envio do formulario tente novamente.</h3>';
}

?>