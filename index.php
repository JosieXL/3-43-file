<?php
echo "<html></html>";

    $email = $_POST['email'];
    $from = 'From: TangledDemo'; 
    $to = 'demo@tangledindesign.com'; 
    $subject = 'Hello';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

   if ($_POST['send']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
?>
<script>location.replace('') </script>