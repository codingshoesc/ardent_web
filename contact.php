<?php 
if(isset($_POST['submit'])){
    $to = "mamiptso@gmail.com"; 
    $from = $_POST['email']; 
    $full_name = $_POST['full_name'];
    // $last_name = $_POST['last_name'];
    // $subject = "Form submission";
    // $subject2 = "Copy of your form submission";
    $message = $full_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    header("Location: contact.html");

    }
?>