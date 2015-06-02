<?php

namespace DigixBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ProfilePageController extends Controller{

     public function displayProfileEditPageAction(Request $request){
     	$session=$request->getSession();

     	if($session->get('username')===null)
     		return $this->redirectToRoute('digix_homepage');


        $firstName=ucwords($session->get('firstName'));
        $lastName=ucwords($session->get('lastName'));
        
        $accountName=$firstName.' '.$lastName;



        return $this->render('DigixBundle:Profile:EditPage.html.twig',array(
                                                                            'name'=>$accountName,
                                                                            'birthday' => $session->get('birthday'),
        																	'city' => $session->get('city'),
        																	'gender' => $session->get('gender'),
        																	'website' => $session->get('website'),
                                                                            'id' => $session->get('id'),));
    }

    public function saveChangesAction(Request $request){
    	$session=$request->getSession();

        $newWebsite=$request->request->get('website');
        $newBirthday=$request->request->get('birthday');
        $newGender=$request->request->get('gender');
        $newCity=$request->request->get('city');

    	$em = $this->getDoctrine()->getEntityManager();

    	$userId=$session->get('userId');
    	$user=$em->getRepository('DigixBundle\Entity\User')->find($userId);

    	$user->setWebsite($newWebsite);
        $user->setBirthday($newBirthday);
        $user->setGender($newGender);
        $user->setCity($newCity);

        $em->flush();

        $session->set('birthday',$newBirthday);
        $session->set('website',$newWebsite);
        $session->set('gender',$newGender);
        $session->set('city',$newCity);


    	return $this->redirectToRoute('edit_profile_page');
    }
}