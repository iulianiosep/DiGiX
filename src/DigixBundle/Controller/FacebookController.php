<?php

namespace DigixBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Symfony\Component\HttpFoundation\RedirectResponse;
use DigixBundle\Entity\TagDB;

require 'LoginCredentials.php';

class FacebookController extends Controller{

    function indexAction(){
        $loginCredentials=new \LoginCredentials();

        $session=$this->getRequest()->getSession();
        $session->start();

        FacebookSession::setDefaultApplication($loginCredentials->facebookAppId, $loginCredentials->facebookAppSecret);
      
        $helper = new FacebookRedirectLoginHelper('http://localhost/digix/web/app_dev.php/facebook-login');

        try{
            $session=$helper->getSessionFromRedirect();
        }catch(Excetion $e){

        }

        if($session){

            $this->getRequest()->getSession()->set('fbsession',$session);
            $this->getRequest()->getSession()->set('credentials',array('appId'=>$loginCredentials->facebookAppId,'appSecret'=>$loginCredentials->facebookAppSecret));
            
            $request = new FacebookRequest($session, 'GET', '/me/photos');
            $response = $request->execute();
            $photosResponse=$response->getGraphObject();

            $request = new FacebookRequest($session, 'GET', '/me/videos?type=uploaded');
            $response = $request->execute();
            $videosResponse=$response->getGraphObject();

            $request = new FacebookRequest($session, 'GET', '/me');
            $response = $request->execute();
            $idResponse=$response->getGraphObject();

            $em = $this->getDoctrine()->getManager();
            $result=$em->getRepository('DigixBundle\Entity\TagDB')->findAll();
            foreach($result as $item)
                $em->remove($item);
            $em->flush();
            
            $photosArray=$photosResponse->asArray();
            $photos=array();
            foreach($photosArray['data'] as $photoItem){

                $tagList="";
                foreach($photoItem->tags->data as $tagItem)
                    $tagList.=$tagItem->name.",";
                $tagList[strlen($tagList)-1]="";
                
                $createdTime=strtotime($photoItem->created_time);
                $myTime=date("d m Y",$createdTime);

                array_push($photos,$photoItem->images[0]->source);
                
                $tagItem=new TagDB();
                    $tagItem->setUrl($photoItem->images[0]->source);
                    $tagItem->setTagList($tagList);
                    $tagItem->setType('photo');
                    $tagItem->setUserId($this->getRequest()->getSession()->get('userId'));
                    $tagItem->setCreatedTime($myTime);


                $em->persist($tagItem);
                $em->flush();
            }

            $videosArray=$videosResponse->asArray();
            $videos=array();
            foreach($videosArray['data'] as $videoItem){
                $tagList="";
                foreach($videoItem->tags->data as $tagItem)
                    $tagList.=$tagItem->name.",";
                $tagList[strlen($tagList)-1]="";

                array_push($videos,$videoItem->source);

                $tagItem=new TagDB();
                    $tagItem->setUrl($videoItem->source);
                    $tagItem->setTagList($tagList);
                    $tagItem->setType('video');
                    $tagItem->setUserId($this->getRequest()->getSession()->get('userId'));
                    $tagItem->setCreatedTime($myTime);


                $em->persist($tagItem);
                $em->flush();
            }

             $idArray=$idResponse->asArray();
             $id=array();
             $id = $idArray['id'];

            $this->getRequest()->getSession()->set('id',$id);
            $this->getRequest()->getSession()->set('videos',$videos);
            $this->getRequest()->getSession()->set('photos',$photos);
            return $this->redirectToRoute('edit_profile_page');
        }
        else{
            //echo "<a href=".$helper->getLoginUrl().">.Login with fb</a><br>";
            return $this->redirect($helper->getLoginUrl());
            //header("Location: ".$helper->getLoginUrl());
        }

        return new Response();
    }
}