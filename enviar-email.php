<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_POST) {
    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor
        $mail->isSMTP();
        $mail->Host       = $_ENV['SMTP_HOST'] ?? 'mail.pincelatomico.com.br';
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['SMTP_USERNAME'] ?? 'contato@pincelatomico.com.br';
        $mail->Password   = $_ENV['SMTP_PASSWORD'] ?? '&OvYm9@tQ@%zLLyZ';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        $mail->CharSet    = 'UTF-8';

        // Remetente e destinatário
        $mail->setFrom('contato@pincelatomico.com.br', 'Pincel Atômico');
        $mail->addReplyTo($_POST['email'], $_POST['nome']);
        $mail->addAddress('contato@pincelatomico.com.br');

        // Conteúdo do email
        $mail->isHTML(true);
        $mail->Subject = 'Nova solicitação de demonstração - Pincel Atômico';

        // Sanitizar dados de entrada
        $nome = htmlspecialchars($_POST['nome'] ?? '', ENT_QUOTES, 'UTF-8');
        $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
        $telefone = htmlspecialchars($_POST['telefone'] ?? '', ENT_QUOTES, 'UTF-8');
        $instituicao = htmlspecialchars($_POST['instituicao'] ?? '', ENT_QUOTES, 'UTF-8');
        $qtdAlunos = htmlspecialchars($_POST['qtd-alunos'] ?? '', ENT_QUOTES, 'UTF-8');
        $mensagem = htmlspecialchars($_POST['mensagem'] ?? '', ENT_QUOTES, 'UTF-8');

        $corpo = "
        <h2>Nova Solicitação de Demonstração</h2>
        <p><strong>Nome:</strong> {$nome}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Telefone:</strong> {$telefone}</p>
        <p><strong>Instituição:</strong> {$instituicao}</p>
        <p><strong>Quantidade de Alunos:</strong> {$qtdAlunos}</p>
        <p><strong>Mensagem:</strong><br>{$mensagem}</p>
        ";

        $mail->Body = $corpo;

        $mail->send();
        header('Location: obrigado');
        exit;
    } catch (Exception $e) {
        echo "Erro ao enviar email: {$mail->ErrorInfo}";
    }
}
?>