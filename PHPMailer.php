<?php
namespace PHPMailer\PHPMailer;
class PHPMailer {
  use PHPMailerStrict;
  public function isSMTP(){$this->Mailer='smtp';}
  public function __construct($exceptions=null){}
  public function addAddress($a,$b=''){}
  public function setFrom($a,$b=''){}
  public function isHTML($a=true){}
  public function send(){}
}
trait PHPMailerStrict{}
