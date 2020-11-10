<?php
// name attributes 
    if(isset($_POST['email'])){
        // Email information
        $admin_email = "gnishita28@gmail.com";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];
        
        // Send email:(email, subject, body: mesg+phone)
        mail($admin_email, "New Form Submission", $message .'-'.$phone, "From:".$email);
        
        header('Location: success.html');
    }
    