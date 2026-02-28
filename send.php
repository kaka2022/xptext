<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer.php';
require 'SMTP.php';

$to = '1425306558@qq.com';
$d = $_POST['d'] ?? '';
$domain = 'https://你的域名.com';
$url = $domain . '/result.html?d=' . urlencode($d);

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.qq.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'pinkliuzhihao@foxmail.com';
    $mail->Password = 'kdesybgrjsemjejb';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('pinkliuzhihao@foxmail.com', '小瓶子系统');
    $mail->addAddress($to);

    $mail->isHTML(false);
    $mail->Subject = '有人完成了心动小瓶子';
    $mail->Body    = "用户结果链接：\n$url";

    $mail->send();
    echo 'ok';
} catch (Exception $e) {
    echo 'error';
}
?>
