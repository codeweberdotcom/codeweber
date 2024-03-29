<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// require_once('../../../../../wp-load.php');

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php';
/*
*  CONFIGURATION
*/

// Recipients
if (have_rows('recipients', 'option')) :
  while (have_rows('recipients', 'option')) : the_row();
    $fromEmail = get_sub_field('from_email');
    $fromName = get_sub_field('from_name');
    $sendToEmail = get_sub_field('send_to_email');
    $sendToName = get_sub_field('send_to_name');
  endwhile;
endif;

// Recipients
// $fromEmail = 'info@codeweber.com'; // Email address that will be in the from field of the message.
// $fromName = 'Codeweber'; // Name that will be in the from field of the message.
// $sendToEmail = 'gigamarket24@yandex.ru'; // Email address that will receive the message with the output of the form
// $sendToName = 'Вася'; // Name that will receive the message with the output of the form


if (have_rows('settings', 'option')) :
  while (have_rows('settings', 'option')) : the_row();
    $subject = get_sub_field('subject');
    $okMessage = get_sub_field('ok_message');
    $errorMessage = get_sub_field('error_message');
  endwhile;
endif;


// Subject
// $subject = 'Message from Sandbox contact form';

// Fields - Value of attribute name => Text to appear in the email
$fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message', 'department' => 'Department');

// Success and error alerts
// $okMessage = 'We have received your inquiry. Stay tuned, we’ll get back to you very soon.';
// $errorMessage = 'There was an error while submitting the form. Please try again later';


// SMTP settings
if (have_rows('smtp', 'option')) :
  while (have_rows('smtp', 'option')) : the_row();
    $smtpUse = get_sub_field('smtp_use');
    $smtpHost = get_sub_field('smtp_host');
    $smtpUsername = get_sub_field('smtp_username');
    $smtpPassword = get_sub_field('smtp_password');
    $smtpSecure = get_sub_field('smtp_secure');
    $smtpAutoTLS = get_sub_field('smtp_autotls');
    $smtpPort = get_sub_field('smtp_port');
  endwhile;
endif;


// SMTP settings
// $smtpUse = false; // Set to true to enable SMTP authentication
// $smtpHost = 'smtp@yandex.ru'; // Enter SMTP host ie. smtp.gmail.com
// $smtpUsername = 'info@codeweber.com'; // SMTP username ie. gmail address
// $smtpPassword = 'yGLX9gly!'; // SMTP password ie gmail password
// $smtpSecure = 'tls'; // Enable TLS or SSL encryption
// $smtpAutoTLS = true; // Enable Auto TLS
// $smtpPort = 587; // TCP port to connect to


// reCAPTCHA settings
if (have_rows('recaptcha', 'option')) :
  while (have_rows('recaptcha', 'option')) : the_row();
    $recaptchaUse = get_sub_field('recaptcha_use');
    $recaptchaSecret = get_sub_field('recaptcha_secret');
  endwhile;
endif;


// reCAPTCHA settings
// $recaptchaUse = false; // Set to true to enable reCAPTHCA
// $recaptchaSecret = 'YOUR_SECRET_KEY'; // enter your secret key from https://www.google.com/recaptcha/admin


/*
*  LET'S DO THE SENDING
*/

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);
try {
  if (count($_POST) == 0) throw new \Exception('Form is empty');
  if ($recaptchaUse == true) {
    require('recaptcha/src/autoload.php');
    if (!isset($_POST['g-recaptcha-response'])) {
      throw new \Exception('ReCaptcha is not set.');
    }
    $recaptcha = new \ReCaptcha\ReCaptcha($recaptchaSecret, new \ReCaptcha\RequestMethod\CurlPost());
    // we validate the ReCaptcha field together with the user's IP address
    $response = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
    if (!$response->isSuccess()) {
      throw new \Exception('ReCaptcha was not validated.');
    }
  }
  $emailTextHtml = '';
  $emailTextHtml .= "<table>";
  foreach ($_POST as $key => $value) {
    // If the field exists in the $fields array, include it in the email
    if (isset($fields[$key])) {
      $emailTextHtml .= "<tr><th><b>$fields[$key]</b></th><td>$value</td></tr>";
    }
  }
  $from = $fromEmail;

  $emailTextHtml .= "</table>";
  $mail = new PHPMailer;
  $mail->setFrom($fromEmail, $fromName);
  $mail->addAddress($sendToEmail, $sendToName);
  $mail->addReplyTo($from);
  $mail->isHTML(true);
  $mail->CharSet = 'UTF-8';
  $mail->Subject = $subject;
  $mail->Body    = $emailTextHtml;
  $mail->msgHTML($emailTextHtml);
  if ($smtpUse == true) {
    // Tell PHPMailer to use SMTP
    $mail->isSMTP();
    // Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->Debugoutput = function ($str, $level) use (&$mailerErrors) {
      $mailerErrors[] = ['str' => $str, 'level' => $level];
    };
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = $smtpSecure;
    $mail->SMTPAutoTLS = $smtpAutoTLS;
    $mail->Host = $smtpHost;
    $mail->Port = $smtpPort;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
  }
  if (!$mail->send()) {
    throw new \Exception('I could not send the email.' . $mail->ErrorInfo);
  }
  $responseArray = array('type' => 'success', 'message' => $okMessage);
} catch (\Exception $e) {
  $responseArray = array('type' => 'danger', 'message' => $e->getMessage());
}
// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
  $encoded = json_encode($responseArray);
  header('Content-Type: application/json');
  echo $encoded;
}
// else just display the message
else {
  echo $responseArray['message'];
}
