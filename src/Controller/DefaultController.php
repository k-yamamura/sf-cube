<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/default", name="default")
     * @Template("default.html.twig")
     */
    public function index()
    {
        // replace this line with your own code!
        return [ 'message' => 'hello world!' ];

//        return $this->render('default.html.twig',
//            [ 'message' => 'hello world!' ]
//        );
//        return $this->render('@Maker/demoPage.html.twig', ['path' => str_replace($this->getParameter('kernel.project_dir') . '/', '', __FILE__)]);
    }
}
