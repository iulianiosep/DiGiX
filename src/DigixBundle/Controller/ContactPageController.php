<?php

namespace DigixBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use \Swift_SmtpTransport,\Swift_Mailer,\Swift_Message;

class ContactPageController extends Controller{

     public function displayContactPageAction(Request $request){
     	$session=$request->getSession();
     	if($session->get('username')===null)
     		return $this->redirectToRoute('digix_homepage');
        return $this->render('DigixBundle:Contact:contact.html.twig');
     }

     public function sendmailAction(Request $request){
     	$session=$request->getSession();
     	if($session->get('username')===null)
     		return $this->redirectToRoute('digix_homepage');

		$pEmailGmail = 'digixdigix10@gmail.com';
		$pPasswordGmail = 'parolameadigix';
		$pFromName = 'DiGiX'; //display name

		$pTo = 'malessandrox@gmail.com'; //destination email
		$pSubjetc = $request->request->get('subject'); //the subjetc
		$pBody = $request->request->get('comments'); //body html

		$transport = Swift_SmtpTransport::newInstance('smtp.googlemail.com', 465, 'ssl')
		->setUsername($pEmailGmail)
		->setPassword($pPasswordGmail);

		$mMailer = Swift_Mailer::newInstance($transport);

		$mEmail = Swift_Message::newInstance();
		$mEmail->setSubject($pSubjetc);
		$mEmail->setTo($pTo);
		$mEmail->setFrom(array($pEmailGmail => $pFromName));
		$mEmail->setBody($pBody, 'text/plain'); //body html

		if($mMailer->send($mEmail) == 1){
			return $this->redirectToRoute('contact_page');
		}
		else {
			echo 'send error';
		}
		
		return new Response();
	}

}