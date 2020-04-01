<?php
//Variáveis

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$data_envio = date('d/m/y');

//campo email
$arquivo = "
  	<html>
        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
            <tr>
              <td>
  				<tr>
                <td width='500'>nome:<b>$nome</b></td>
                </tr>
                <tr>
                <td width='500'>email:<b>$email</b></td>
     			</tr>
      			<tr>
                <td width='500'>assunto:<b>$assunto</b></td>
                </tr>
                <tr>
                <td width='500'>mensagem:<b>$mensagem</b></td>
                </tr>
            </td>
          </tr>  
          <tr>
            <td>Este e-mail foi enviado em <b>$data_envio</b></td>
          </tr>
        </table>
    </html>";?>
    <?php
//enviar

    // emails para quem será enviado o formulário
  $emailenviar = "infor@pwtechsolucoes.com";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site";
 
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $headers .= 'From: $nome <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";
   
  
if($nome == ""){
	$resp = "Preencha todos os dados.";
echo '<script type="text/javascript">alert("'.$resp.'");
window.location="https://pwtechsolucoes.com/#Contato"</script>';
}elseif ($email == "") {
	$resp = "Preencha todos os dados.";
echo '<script type="text/javascript">alert("'.$resp.'");
window.location="https://pwtechsolucoes.com/#Contato"</script>';
}elseif ($assunto == "") {
	$resp = "Preencha todos os dados.";
echo '<script type="text/javascript">alert("'.$resp.'");
window.location="https://pwtechsolucoes.com/#Contato"</script>';
}elseif ($mensagem == "") {
	$resp = "Preencha todos os dados.";
echo '<script type="text/javascript">alert("'.$resp.'");
window.location="https://pwtechsolucoes.com/#Contato"</script>';
}else{
	$enviaremail = mail($destino, $assunto, $arquivo, $headers);

	$resp = "Sua mensagem foi eviada com sucesso, em breve retornaremos suas dúvidas.";
echo '<script type="text/javascript">alert("'.$resp.'");
window.location="https://pwtechsolucoes.com/#Contato"</script>';
exit;
}
?>