<?php

namespace DigixBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ContactPageController extends Controller{

     public function displayContactPageAction(){
        return $this->render('DigixBundle:Contact:contact.html.twig');
     }

}