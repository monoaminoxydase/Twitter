<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CodersLabBundle\Entity\Tweet;
use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class TweetController extends Controller
{


    public function getForm(Tweet $tweet){
        $form = $this->createFormBuilder( $tweet )
            ->add('name', 'text')
            ->add('text', 'text')
            ->add('Zapisz', 'submit')
            ->getForm();

        return $form;
    }

    /**
     * @Route("/newTweet")
     * @Method("GET")
     * @Template("CodersLabBundle::zadanieA2.html.twig")
     */
    public function newFormAction(){
        $form = $this->getForm(new Tweet);

        return [
            'form' => $form->createView()
        ];
    }


    /**
     * @Route("/newTweet")
     * @Method("POST")
     * @Template("CodersLabBundle::zadanieA2.html.twig")
     */
    public function newTweetAction(Request $req){
        $form = $this->getForm(new Tweet());

        $form->handleRequest( $req );

        if ( $form->isSubmitted() ){
            $tweet = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($tweet);

            $em->flush();
        }

        return $this->redirectToRoute("showTweet", array(
            'id' => $tweet->getId()
        ));
    }


    /**
     * @Route("/editTweet/{id}")
     * @Method("GET")
     * @Template("CodersLabBundle::zadanieA2.html.twig")
     */
    public function editTweetAction($id){
        $repository = $this->getDoctrine()->getRepository('CodersLabBundle:Tweet');
        $tweet = $repository->find($id);

        if ( !$tweet ){
            return new Response('Nie ma takiego tweeta!');
        }

        $form = $this->getForm( $tweet );

        return [
            'form' => $form->createView()
        ];
    }

    /**
     * @Route("/editTweet/{id}")
     * @Method("POST")
     */
    public function editSaveAction(Request $req, $id){
        $repository = $this->getDoctrine()->getRepository('CodersLabBundle:Tweet');
        $tweet = $repository->find($id);

        $form = $this->getForm( $tweet );

        $form->handleRequest( $req );

        if ( $form->isSubmitted() ){
            $tweet = $form->getData();

            $em = $this->getDoctrine()->getManager();

            $em->flush();
        }

        return $this->redirectToRoute("showTweet", array(
            'id' => $tweet->getId()
        ));
    }

    /**
     * @Route("/showTweet/{id}", name="showTweet")
     * @Template("CodersLabBundle::tweet.html.twig")
     */
    public function showTweetAction($id) {
        $repository = $this->getDoctrine()->getRepository('CodersLabBundle:Tweet');

        $tweet = $repository->find($id);

        return [
            'tweet' => $tweet
        ];
    }

    /**
     * @Route("/showAllTweets")
     * @Template("CodersLabBundle::zadanieA3.html.twig")
     */
    public function showAllTweetsAction()
    {
        $repository = $this->getDoctrine()->getRepository('CodersLabBundle:Tweet');

        $tweets = $repository->findAll();

        return [
            'tweets' => $tweets
        ];
    }

}
