<?php

namespace DigixBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ProfilePageController extends Controller{

     public function displayProfileEditPageAction(Request $request){
     	$session=$request->getSession();


        return $this->render('DigixBundle:Profile:EditPage.html.twig',array('birthday' => $session->get('birthday'),
        																	'city' => $session->get('city'),
        																	'gender' => $session->get('gender'),
        																	'website' => $session->get('website')));
    }
}