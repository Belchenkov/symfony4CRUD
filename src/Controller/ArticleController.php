<?php

    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

    class ArticleController extends Controller
    {
        /**
         * @Route("/")
         * @Method({"GET"})
         */
        public function index()
        {
           // return new Response('<h2>Hello Symfony 4</h2>');

           return $this->render('articles/index.html.twig', [
               'name' => 'Symfony'
           ]);
        }
    }