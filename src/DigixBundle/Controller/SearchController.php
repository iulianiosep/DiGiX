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
        $ftime=$request->request->get('ftimeline');
        $fcreatedTime=date("d m Y",strtotime($ftime));
        $ltime=$request->request->get('ltimeline');
        $lcreatedTime=date("d m Y",strtotime($ltime));

        $userId=$session->get('userId');

        $em = $this->getDoctrine()->getManager();
        

        $photosArray=array();
        $videosArray=array();

        if(strcmp($option,'photos')==0){
            $photosArray=$this->getItems($tagList,'photo',$userId,$fcreatedTime,$lcreatedTime);
        }
        
        if(strcmp($option,'videos')==0){
            $videosArray=$this->getItems($tagList,'video',$userId,$fcreatedTime,$lcreatedTime);
        }

        if(strcmp($option,'all')==0){
            $photosArray=$this->getItems($tagList,'photo',$userId,$fcreatedTime,$lcreatedTime);
            $videosArray=$this->getItems($tagList,'video',$userId,$fcreatedTime,$lcreatedTime);
        }

     	return $this->render('DigixBundle:Search:searchpage.html.twig',array('photosArray' => $photosArray,
                                                                             'videosArray' => $videosArray));
                                                                        
     	return new Response();
     }

     public function getItems($tagList,$option,$userId,$startDate,$endDate){
        $em = $this->getDoctrine()->getManager();

        $result=$em->getRepository('DigixBundle\Entity\TagDB')->createQueryBuilder('tag')
            ->where("tag.tagList LIKE :tags AND tag.type=:option AND tag.userId=:userId AND :startDate<=tag.createdTime AND :endDate>=tag.createdTime")
            ->setParameter('tags', '%'.$tagList.'%')
            ->setParameter('option',$option)
            ->setParameter('userId',$userId)
            ->setParameter('startDate',$startDate)
            ->setParameter('endDate',$endDate)
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