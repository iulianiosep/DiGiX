<?php

namespace DigixBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ProfilePageController extends Controller{

     public function displayProfileEditPageAction(){
        return $this->render('DigixBundle:Profile:EditPage.html.twig');
    }
}