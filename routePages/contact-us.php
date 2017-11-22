<?php
/*require("PHPMailerAutoload.php"); // path to the PHPMailerAutoload.php file.
require 'class.phpmailer.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'raj.amalw@gmail.com';
$mail->Password = '******';
$mail->SMTPSecure = 'tls';

$mail->From = 'it@sslbd.net';
$mail->FromName = 'SSL IT';
$mail->addAddress('raj.amalw@learn2crack.com', 'Raj Amal W');

$mail->addReplyTo('shibly@sslbd.net', 'Shibly');

$mail->WordWrap = 50;
$mail->isHTML(true);

$mail->Subject = 'Using PHPMailer';
$mail->Body    = 'Hi Iam using PHPMailer library to sent SMTP mail from localhost';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';*/
/*ini_set("SMTP","mail.sslbd.net");
ini_set("smtp_port","25");
$to				="shibly@sslbd.net";
$subject		="Test Mail.";
							
$message		="This is test message";
//$message2		=$_POST['txtacpln'];
//$message		="$message1 \n $message2";
$from = 'it@sslbd.net';							
$headers = "From:" . $from;
							
$em=mail($to,$subject,$message,$headers);
			             
 if(!$em)
	{
		 echo "mail not sent";
	}
 else
		 echo "mail sent";*/
		 
//ini_set("SMTP","mail.sslbd.net");
//ini_set("smtp_port","25");		 
//mail("shibly@sslbd.net",'Test Email','This is a test email.',"From: it@sslbd.com");
/*require_once "vendor/autoload.php";

//PHPMailer Object
$mail = new PHPMailer;

//From email address and name
$mail->From = "from@yourdomain.com";
$mail->FromName = "Full Name";

//To address and name
$mail->addAddress("recepient1@example.com", "Recepient Name");
$mail->addAddress("recepient1@example.com"); //Recipient name is optional

//Address to which recipient will reply
$mail->addReplyTo("reply@yourdomain.com", "Reply");

//CC and BCC
$mail->addCC("cc@example.com");
$mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}
*/
?>


<div class="container-fluid textbannerchat" id="contact-center">
    <div class="row">
        <div class="container">
            <div class="col-md-4">
                <div id="logo_sidebar">			  
                    <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>Service Solutions PVT LTD</strong><hr/>
               BNS Center, Level # 6, Plot # 87 <br>
               Dhaka Mymensingh Road, Sector # 7, Uttara, Dhaka-1230, Bangladesh.<br>
                <abbr title="Phone">
                    P:</abbr>
                +88-01755-677005
            </address>
            <address>
                <strong>Email</strong><br>
                <a href="mailto:#">info@sslbd.net</a>
            </address>
            </form>
                   
                    </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
                </div>
            </div>
            <div class="col-md-8">
                <h2 class="text-centerm" >Feel free to ask. Shortly we will give you a feesdback </h2><hr/>
                <div class="article" id="body_font">

                    <p></p>
                    <form id="contact-form" method="post" action="contact.php" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">First Name *</label>
                                        <input id="form_name" type="text" name="name" class="form-control input_1" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Last Name *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control input_1" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control input_1" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control input_1" placeholder="Please enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Tell us amazing about you..... *" rows="4" required="required" data-error="Tell us amazing about you....."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Send your CV">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong> These fields are required.</p>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
