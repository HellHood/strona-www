<?php
if(isset($_POST['submit'])){
    $to = "szymek0107@gmail.com" ;
    $subject = $_POST[name] ;
    $message = $_POST[message] ;
    $from = $_POST[_replyto] ;
    mail($to,$subject,$message,$from);
    echo "Mail Sent. Thank you " .", we will contact you shortly.";
}
?>