<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
    /**
     * @Route("/articles/{slug}", name="article_show")
     */
    public function showArticleAction(Request $request, $slug)
    {
        $article = $this->getDoctrine()->getRepository('App\Entity\Blog')->findOneBySlug($slug);

        if($article == null ) {
            throw $this->createNotFoundException();
        }

        // replace this example code with whatever you need
        return $this->render('blog/show.html.twig', [
            'article' => $article
        ]);
    }
    /**
     * @Route("/articles/", name="articles_show")
     */
    public function showArticlesAction()
    {
        $articles = $this->getDoctrine()->getRepository('App\Entity\Blog')->findAll();

        return $this->render('blog/showList.html.twig', array(
            'articles' => $articles
        ));

    }

    }