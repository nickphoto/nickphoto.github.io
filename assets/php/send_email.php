<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // 设置电子邮件收件人地址
    $to = "nickcoci1919@gmail.com";
    
    // 设置电子邮件主题
    $subject = "New message from $name";
    
    // 设置电子邮件正文
    $message = "Name: $name\nEmail: $email\nMessage: $message";
    
    // 发送电子邮件
    mail($to, $subject, $message);
    
    // 重定向到成功页面或其他操作
    header("Location: success.html");
    exit;
}
?>
