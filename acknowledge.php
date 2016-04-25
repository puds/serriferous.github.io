<?php
if (isset($_POST['send'])) {
     $to = 'david@example.com'; // Use your own email address
     $subject = 'Feedback from my site';
     
     $message = 'Name: ' . $_POST['Name'] . "\r\n\r\n";
     
     $message .= 'Email: ' . $_POST['Contact'] . "\r\n\r\n";
    $message .= 'Comments: ' . $_POST['Message'];
    
    echo $message;

}
?>
