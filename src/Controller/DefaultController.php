<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Blog;
use App\Entity\Pool;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage_show")
     */
    public function index(Request $request)
    {
        $articles = $this->getDoctrine()->getRepository('App\Entity\Blog')->findAll();
        $piscines = $this->getDoctrine()->getRepository('App\Entity\Pool')->findAll();
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'articles' => $articles,
            'piscines' => $piscines
        ]);
    }
}