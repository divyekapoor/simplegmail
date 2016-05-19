<?php

/**
 * A simple class to email via a Gmail account.
 * 
 * Date: May 18, 2016
 *
 * @author Divye Kapoor (divyekapoor@gmail.com)
 * @license MIT
 *
 * Depends on the LGPL PHPMailer class.
 */

require_once "vendor/autoload.php";

class SimpleGmail {
	public $mail;

	public function __construct($sender_name, $sender_email, $sender_password) {
		// Enable this for debugging.
		// $mail->SMTPDebug = 3;                               
                $this->mail = new PHPMailer;
		$this->mail->isSMTP();            
		$this->mail->Host = "smtp.gmail.com";
		$this->mail->SMTPAuth = true;                          
		$this->mail->Username = $sender_email;                 
		$this->mail->Password = $sender_password;                           
		$this->mail->SMTPSecure = "tls";                           
		$this->mail->Port = 587;                                   

		$this->mail->From = $sender_email;
		$this->mail->FromName = $sender_name;
		$this->mail->isHTML(false);
	}

	public function send($name, $address, $subject, $body) {
		$this->mail->addAddress($address, $name);
		$this->mail->Subject = $subject;
		$this->mail->Body = $body;

		if(!$this->mail->send()) {
			echo "Mailer Error: " . $mail->ErrorInfo . "\n";
			return false;
		} else {
			echo "Message Sent.\n";
			return true;
		}
	}
}

/**
 * Use as:
 * $gmailMailer = new SimpleGmail(...args...);
 * $gmailMailer->send(...args...);
 */

?>
