<?php
/**
 * Requires the "PHP Email Form" library
 * The "PHP Email Form" library is available only in the pro version of the template
 * The library should be uploaded to: vendor/php-email-form/php-email-form.php
 * For more info and help: https://bootstrapmade.com/php-email-form/
 */

// Replace contact@example.com with your real receiving email address
$receiving_email_address = 'ashraful.istiaque@gmail.com';

if (file_exists($php_email_form = '../js/contact.php')) {
    include $php_email_form;
} else {
    die('Unable to load the "PHP Email Form" Library!');
}

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['InputName'];
$contact->from_email = $_POST['InputEmail'];
$contact->subject = $_POST['InputMessage'];

// Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials

/*$contact->smtp = array(
'host' => 'smtp.gmail.com',
'username' => '',
'password' => '',
'port' => '465',
);*/

$contact->add_message($_POST['InputName'], 'From');
$contact->add_message($_POST['InputEmail'], 'Email');
$contact->add_message($_POST['InputMessage'], 'Message', 10);

echo $contact->send();
