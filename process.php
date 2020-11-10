<?php
    if(isset($_POST['email'])){
        $admin_email = "nishitaoct26@gmail.com";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];
        
        mail($admin_email, "New Form Submission", $message.'-'.$phone, "From:".$email);
        
        header('Location: http://gni-portfolio.netlify.app/success.html');
    }
    