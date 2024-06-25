<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "lixinhai8888@gmail.com";
    $subject = "新的客户咨询 - TeleBot Pro";
    
    $body = "姓名: $name\n";
    $body .= "邮箱: $email\n\n";
    $body .= "消息:\n$message";
    
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "邮件发送成功，我们会尽快回复您。";
    } else {
        echo "邮件发送失败，请稍后再试。";
    }
} else {
    echo "无效的请求方法";
}
?>
