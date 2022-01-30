<!DOCTYPE html>
<html lang="pl">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <link rel="Stylesheet" type="text/css" href="../css/style.css">
    <title>Nyggaware</title>
</head>
<body>
<?php
include 'elementy/gora.php' ;
?>
    <div id='content'>
    <form id="fs-frm" name="simple-contact-form" accept-charset="utf-8" action="form.php" method="post">
      <fieldset id="fs-frm-inputs">
        <label for="full-name">Imie i nazwisko</label>
        <input type="text" name="name" id="full-name" placeholder="First and Last" required="">
        <label for="email-address">Email</label>
        <input type="email" name="_replyto" id="email-address" placeholder="email@domain.tld" required="">
        <label for="message">Twoje pytanie</label>
        <textarea rows="5" name="message" id="message" placeholder="Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla nullam quis risus." required=""></textarea>
        <input type="hidden" name="_subject" id="email-subject" value="Contact Form Submission">
      </fieldset>
      <input type="submit" value="Wyślij">
    </form>
    </div>
    </body>
    </html>