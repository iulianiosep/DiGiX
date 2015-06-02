<?php

namespace DigixBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;

class WallController extends Controller{

     public function displayWallAction(){
     	$session=$this->getRequest()->getSession();

        if($session->get('username')===null)
            return $this->redirectToRoute('digix_homepage');

     	$firstName=ucwords($session->get('firstName'));
     	$lastName=ucwords($session->get('lastName'));
     	
     	$accountName=$firstName.' '.$lastName;

        $fbses=$session->get('fbsession');
        //FacebookSession::setDefaultApplication($session->get('credentials')['appId'], $session->get('credentials')['appSecret']);

        return $this->render('DigixBundle:Wall:wall.html.twig',array('name'=>$accountName,
        															 'website' => $session->get('sesiune'),
        															 'age' => $session->get('age'),
                                                                     'city' => $session->get('city'),
                                                                     'birthday' => $session->get('birthday'),
                                                                     'gender' => $session->get('gender'),
                                                                     'website' => $session->get('website'),
                                                                     'id' => $session->get('id'),
                                                                     'picturesArray' => $session->get('photos'),
                                                                     'videosArray' => $session->get('videos')));
     	//return $this->redirectToRoute('digix_wall');
     }

     public function displayModalAction(){
        return $this->render('DigixBundle:Modal:modal.html.twig');
     }
}