<?php
class myMailer extends sfMailer
{
  public function myCompose($from = null, $to = null , $subject = null, $body = null , $name = null , $cc = null, $bcc = null , $replayTo = null , $returnPath = null)
  {

    $mail = Swift_Message::newInstance();

    $tmp = explode(",", $from);
    $from = $tmp[0];
    $replayTo = is_null($replayTo)?$from:$replayTo;
    $returnPath = is_null($returnPath)?$replayTo:$returnPath;

    $mail->setFrom($from,$name);
    $mail->setTo($to);

    if($cc){
      $tmp = explode(",", $cc);
      foreach ($tmp as $v) {
        $mail->setCc($v);
      }
    }
    if($bcc){
      $tmp = explode(",", $bcc);
      foreach ($tmp as $v) {
        $mail->setBcc($v);
      }
    }
    $mail->setReplyTo($replayTo);
    $mail->setReturnPath($returnPath);
    $mail->setSubject($subject);
    $mail->setBody($body);

    return $mail;

  }

/*
  public function myComposeAndSend($from, $to, $subject, $body , $name , $cc , $bcc , $replayTo , $returnPath)
  {
    return $this->send($this->compose($from, $to, $subject, $body , $name , $cc , $bcc , $replayTo , $returnPath));
  }

  public function getMailBody($tName = null, $path = null, $replace = array())
  {
    if(is_null($tName) || is_null($path) || !file_exists($path)){
      return "";
    }

    $loader = new sfTemplateLoaderFilesystem($path);
    $engine = new sfTemplateEngine($loader, array('php'=>new sfTemplateRendererPhp()));
    $helperSet = new sfTemplateHelperSet(array(new i18nTemplateHelper()));
    $engine->setHelperSet($helperSet);

    return $engine->render($tName, $replace);
  }

  public function myHtmlMailSend($from, $to, $subject, $body, $name, $cc, $bcc, $replayTo, $returnPath) {
    // Make Instance
    $mail = Swift_Message::newInstance();

    return $this->send($this->myHtmlCompose($from, $to, $subject, $body, $name, $cc, $bcc, $replayTo, $returnPath, $mail));
  }

  private function myHtmlCompose($from, $to, $subject, $body, $name, $cc, $bcc, $replayTo, $returnPath, $mail = null) {
    // Make Instance
    if(empty($mail)) {
      $mail = Swift_Message::newInstance();
    }
    $mail->setContentType("text/html");

    // Set Send Data
    $tmp = explode(",", $from);
    $from = $tmp[0];

    $mail->setFrom($from, $name);

    $mail->setTo($to);

    if(!is_null($replayTo)) {
      $mail->setReplyTo($replayTo);
    }

    if(!is_null($returnPath)) {
      $mail->setReturnPath($returnPath);
    }

    if($cc) {
      $tmp = explode(",", $cc);
      foreach($tmp as $v) {
        $mail->setCc($v);
      }
    }
    if($bcc) {
      $tmp = explode(",", $bcc);
      foreach($tmp as $v) {
        $mail->setBcc($v);
      }
    }

    $mail->setSubject($subject);

    $mail->setBody($body);

    return $mail;
  }
*/

}
