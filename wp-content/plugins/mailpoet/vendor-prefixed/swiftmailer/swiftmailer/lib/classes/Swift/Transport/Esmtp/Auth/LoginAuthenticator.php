<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class Swift_Transport_Esmtp_Auth_LoginAuthenticator implements Swift_Transport_Esmtp_Authenticator
{
 public function getAuthKeyword()
 {
 return 'LOGIN';
 }
 public function authenticate(Swift_Transport_SmtpAgent $agent, $username, $password)
 {
 try {
 $agent->executeCommand("AUTH LOGIN\r\n", [334]);
 $agent->executeCommand(\sprintf("%s\r\n", \base64_encode($username ?? '')), [334]);
 $agent->executeCommand(\sprintf("%s\r\n", \base64_encode($password ?? '')), [235]);
 return \true;
 } catch (Swift_TransportException $e) {
 $agent->executeCommand("RSET\r\n", [250]);
 throw $e;
 }
 }
}
