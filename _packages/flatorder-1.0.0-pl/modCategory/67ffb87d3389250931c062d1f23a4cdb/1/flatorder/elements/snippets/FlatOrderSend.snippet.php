<?php
$modx->getService('mail', 'mail.modPHPMailer');
$modx->mail->set(modMail::MAIL_BODY,$_POST['order']);
$modx->mail->set(modMail::MAIL_FROM, $modx->getOption('emailsender'));
$modx->mail->set(modMail::MAIL_FROM_NAME, $modx->getOption('flatorder.sending_name'));
$modx->mail->set(modMail::MAIL_SUBJECT, $modx->getOption('flatorder.sending_subject'));
$modx->mail->address('to', $modx->getOption('flatorder.sending_to'));

$modx->mail->setHTML(true);
if (!$modx->mail->send()) {
    $modx->log(modX::LOG_LEVEL_ERROR,'An error occurred while trying to send the email: '.$modx->mail->mailer->ErrorInfo);
    return $modx->mail->mailer->ErrorInfo;
} else {
    return "Order sent!";
}
$modx->mail->reset();
