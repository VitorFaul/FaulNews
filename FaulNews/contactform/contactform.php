<?php
  /**
  * Requires the PHP Mail Form library
  * The PHP Mail Form library is available only in the pro version of the template
  * The library should be uploaded to: lib/php-mail-form/php-mail-form.php
  * For more info and help: https://templatemag.com/php-mail-form/
  */

  if( file_exists($php_mail_form_library = '../lib/php-mail-form/php-mail-form.php' )) {
    include( $php_mail_form_library );
  } else {
    die( 'Incapaz de carregar PHP Mail da biblioteca!');
  }

  $contactform = new PHP_Mail_Form;
  $contactform->ajax = true;

  $contactform->to = 'vitorfaul1@gmail.com';
  $contactform->from_name = $_POST['nome'];
  $contactform->from_email = $_POST['email'];
  $contactform->subject = $_POST['usuario'];

  $contactform->add_message( $_POST['nome'], 'From');
  $contactform->add_message( $_POST['email'], 'Email');
  $contactform->add_message( $_POST['mensagem'], 'Message', 10);

  echo $contactform->send();
?>
