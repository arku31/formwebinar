<?php
$validEmail = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

require "PHPMailer-master/PHPMailerAutoload.php";

//print_r($_FILES);
//move_uploaded_file($_FILES['photo']['tmp_name'], '1.log');

if ($validEmail && $_COOKIE['messagesent'] != 1) {
    $content = "Макет который вы просили: https://yadi.sk/d/BRZN_I423KXDY8 С уважением, фирма вася пупкин";

    $mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'fsdfsdfsdf.05@bk.ru';                 // SMTP username
    $mail->Password = 'yjdbxrb#123';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom('fsdfsdfsdf.05@bk.ru', 'Mailer');
    $mail->addAddress('itvrd2@yandex.ru', 'Дорогому клиенту');     // Add a recipient
    $mail->addReplyTo('fsdfsdfsdf.05@bk.ru', 'Information');
    $mail->addCC('AndreyKonogray@gmail.com');
    $mail->addCC('meshitinec@gmail.com');
//    $mail->addBCC('bcc@example.com');

    $mail->addAttachment($_FILES['photo']['tmp_name'], '123.log');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Заказ №74 оформлен';
    $mail->Body    = $content;
    $mail->AltBody = $content;

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
//        if ($_COOKIE['messagesent'] < 3) {
            setcookie('messagesent', 1, time()+60*24*30, '/');
//        }
        echo $content;
    }
}

