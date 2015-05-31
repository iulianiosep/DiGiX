<?php

namespace DigixBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use DigixBundle\Entity\User;
use Symfony\Component\HttpFoundation\FileBag;

class RegisterController extends Controller{

     public function registerAction(Request $request){
          $user=new User();

          $firstName=$request->request->get('fname');
          $lastName=$request->request->get('lname');
          $username=$firstName.".".$lastName;
          $password=$request->request->get('password');
          $website=$request->request->get('website');
          $birthday=$request->request->get('birthday');
          $city=$request->request->get('city');
          $gender=$request->request->get('gender');

          $user->setPassword($password);
          $user->setUsername($username);
          $user->setWebsite($website);
          $user->setBirthday($birthday);
          $user->setCity($city);
          $user->setGender($gender);

          $em = $this->getDoctrine()->getManager();

          $em->persist($user);
          $em->flush();

          return $this->redirectToRoute('digix_homepage');
     }
}