<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['comment'];

//send email
    mail("rohitsinghshan@mailinator.com", "This is an email from:" .$email, $message);
}
?>