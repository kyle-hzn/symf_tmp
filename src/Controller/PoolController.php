<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PoolController extends Controller
{
    /**
     * @Route("/piscines/{slug}", name="piscine_show")
     */
    public function showPiscineAction(Request $request, $slug)
    {
        $piscine = $this->getDoctrine()->getRepository('App\Entity\Pool')->findOneBySlug($slug);

        if($piscine == null ) {
            throw $this->createNotFoundException();
        }

        // replace this example code with whatever you need
        return $this->render('pool/show.html.twig', [
            'piscine' => $piscine
        ]);
    }
    /**
     * @Route("/piscines/", name="piscines_show")
     */
    public function showPiscinesAction()
    {
        $piscines = $this->getDoctrine()->getRepository('App\Entity\Pool')->findAll();

        return $this->render('pool/showList.html.twig', array(
            'piscines' => $piscines
        ));

    }

}