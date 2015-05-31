<?php

namespace DigixBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use DigixBundle\Entity\TagDB;

class SearchController extends Controller{

     public function searchAction(Request $request){
     	$session=$this->getRequest()->getSession();
        
        if($session->get('username')===null)
            return $this->redirectToRoute('digix_homepage');

        $tagList=$request->request->get('tag_list');
        $option=$request->request->get('selectBox');
        $userId=$session->get('userId');

        $em = $this->getDoctrine()->getManager();
        

        $photosArray=array();
        $videosArray=array();

        if(strcmp($option,'photos')==0){
            $photosArray=$this->getItems($tagList,'photo',$userId);
        }
        
        if(strcmp($option,'videos')==0){
            $videosArray=$this->getItems($tagList,'video',$userId);
        }

        if(strcmp($option,'all')==0){
            $photosArray=$this->getItems($tagList,'photo',$userId);
            $videosArray=$this->getItems($tagList,'video',$userId);
        }

     	return $this->render('DigixBundle:Search:searchpage.html.twig',array('photosArray' => $photosArray,
                                                                             'videosArray' => $videosArray));
                                                                        
     	return new Response();
     }

     public function getItems($tagList,$option,$userId){
        $em = $this->getDoctrine()->getManager();

        $result=$em->getRepository('DigixBundle\Entity\TagDB')->createQueryBuilder('tag')
            ->where("tag.tagList LIKE :tags AND tag.type=:option AND tag.userId=:userId")
            ->setParameter('tags', '%'.$tagList.'%')
            ->setParameter('option',$option)
            ->setParameter('userId',$userId)
            ->getQuery()
            ->getResult();

        $resultArray=array();
        for($i=0;$i<count($result);$i++)
                array_push($resultArray,$result[$i]->getUrl());

        return $resultArray;
     }

     public function getAll($option,$userId){
         $em = $this->getDoctrine()->getManager();

        $result=$em->getRepository('DigixBundle\Entity\TagDB')->createQueryBuilder('tag')
            ->where("tag.type=:option AND tag.userId=:userId")
            ->setParameter('option',$option)
            ->setParameter('userId',$userId)
            ->getQuery()
            ->getResult();

        $resultArray=array();
        for($i=0;$i<count($result);$i++)
                array_push($resultArray,$result[$i]->getUrl());

        return $resultArray;
     }

     public function displaySearchAction(Request $request){
        $session=$request->getSession();

         if($session->get('username')===null)
            return $this->redirectToRoute('digix_homepage');

        return $this->render('DigixBundle:Search:searchpage.html.twig',array('photosArray' => array(),
                                                                             'videosArray' => array()));
     }
}