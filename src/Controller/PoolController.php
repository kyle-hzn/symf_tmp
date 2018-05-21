<?php

namespace App\Controller;

use App\Entity\Pool;
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

    /**
     * Creates a new pool entity.
     *
     */
    /**
     * @Route("/ajouter-piscine", name="addpool_show")
     */
    public function newAction(Request $request)
    {
        $piscine = new Pool();
        $poolForm = $this->createForm('App\Form\PoolType', $piscine);
        $poolForm->handleRequest($request);

        if ($poolForm->isSubmitted() && $poolForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($piscine);
            $em->flush();

            return $this->redirectToRoute('piscines_show', array('id' => $piscine->getId()));
        }

        return $this->render('pool/new.html.twig', array(
            'piscine' => $piscine,
            'form' => $poolForm->createView(),
        ));
    }

}