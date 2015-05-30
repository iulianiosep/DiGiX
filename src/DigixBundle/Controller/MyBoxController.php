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

class MyBoxController extends Controller{

     public function displayMyBoxAction(){

        $videosArray=array();
        $picturesArray=array();

        $videosArray=$this->getItems('video');
        $picturesArray=$this->getItems('photo');


     	return $this->render('DigixBundle:MyBox:MyBox.html.twig',array("videosArray" => $videosArray,
                                                                        "picturesArray" => $picturesArray));
     }

     public function getItems($option){
        $em = $this->getDoctrine()->getManager();

        $result=$em->getRepository('DigixBundle\Entity\TagDB')->createQueryBuilder('tag')
            ->where("tag.type=:option")
            ->setParameter('option',$option)
            ->getQuery()
            ->getResult();

        $resultArray=array();
        for($i=0;$i<count($result);$i++)
                $resultArray[$result[$i]->getTagList()]=$result[$i]->getUrl();
        return $resultArray;
     }
}