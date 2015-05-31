<?php

namespace DigixBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use DigixBundle\Entity\User;

class LoginController extends Controller{

     public function checkLoginAction(Request $request){

          $repository=$this->getDoctrine()->getRepository('DigixBundle\Entity\User');
          $username=$request->request->get('login');
          $password=$request->request->get('password');
          $user = $repository->findOneBy(array('username' => $username, 'password' => $password));              

          if($user!=null){
                    $personalData=explode(".",$user->getUsername());
                    $session=$request->getSession();
                    $session->start();
                    $session->set('firstName',$personalData[0]);
                    $session->set('lastName',$personalData[1]);
                    $session->set('username',$user->getUsername());
                    $session->set('website',$user->getWebsite());
                    $session->set('birthday',$user->getBirthday());
                    $session->set('gender',$user->getGender());
                    $session->set('city',$user->getCity());
                    $session->set('userId',$user->getId());

                    return $this->redirectToRoute('digix_wall');
          }
          else
               return $this->redirectToRoute('digix_homepage');
     }

     public function logoutAction(Request $request){
          $session=$request->getSession();
          $session->clear();

          return $this->redirectToRoute('digix_homepage');
     }
}