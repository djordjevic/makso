<?php


namespace App\Service;



use Doctrine\DBAL\Driver\Connection;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;

class MailService {

  private $mailer;
  private $params;
  private $entityManager;
  private $db;

  public function __construct(MailerInterface $mailer, ParameterBagInterface $params, EntityManagerInterface $entityManager, Connection $db) {
    $this->mailer = $mailer;
    $this->params = $params;
    $this->entityManager = $entityManager;
    $this->db = $db;
  }


  public function mailer($from, $to, $subject, $body, \SplFileInfo $FileInfo = null) {
      $email = (new Email())
            ->from($from)
            ->to($to)
            ->subject($subject)
            ->html($body);
            $dsn = 'smtp://127.0.0.1:1025';
            $transport = Transport::fromDsn($dsn);
            $mailer = new Mailer($transport);
            $mailer->send($email);


//    $message = (new Swift_Message($subject))
//      ->setFrom($from)
//      ->setTo($_ENV['OIDL_MAIL'])
//      ->setBody($body, 'text/html')
//    ;
//
//    if (!empty($FileInfo)) {
//      $message->attach(\Swift_Attachment::fromPath($FileInfo->getRealPath()));
//    }
//
//    $result = $this->mailer->send($message);

//    $backtrace = debug_backtrace();
//
//    $line = $backtrace[0]['line'];
//    $function = $backtrace[1]['function'];
//    $file = $backtrace[0]['file'];
//
//    $mail = PoslatiMail::create($to, $subject, $body, $file, $function, $line);
//    $this->save($mail);
  }


//  private function save(PoslatiMail $mail) {
//    $sql = "INSERT INTO poslati_mailovi (to_email, subject, body, `file`, `function`, `line`, created) VALUES (:to_email, :subject, :body, :file, :function, :line, NOW());";
//    $query = $this->db->prepare($sql);
//    $query->bindValue(':to_email', $mail->getToEmail());
//    $query->bindValue(':subject', $mail->getSubject());
//    $query->bindValue(':body', $mail->getBody());
//    $query->bindValue(':file', $mail->getFile());
//    $query->bindValue(':function', $mail->getFunction());
//    $query->bindValue(':line', $mail->getLine());
//
//    $query->execute();

//  }


}
