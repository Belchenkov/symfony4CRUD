<?php

    namespace App\Controller;

    use App\Entity\Article;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

    class ArticleController extends Controller
    {
        /**
         * @Route("/", name="article_list")
         * @Method({"GET"})
         */
        public function index()
        {
            $articles = $this->getDoctrine()->getRepository(Article::class)
                ->findAll();
           return $this->render('articles/index.html.twig', [
               'articles' => $articles
           ]);
        }

        /**
         * @Route("/article/{id}", name="article_show")
         */
        public function show($id)
        {
            $article = $this->getDoctrine()->getRepository(Article::class)
                ->find($id);

            return $this->render('articles/show.html.twig', [
                'article' => $article
            ]);
        }

//        /**
//         * @Route("/article/save")
//         */
//        public function save()
//        {
//            $entityManager = $this->getDoctrine()->getManager();
//
//            $article = new Article();
//            $article->setTitle("Article Two");
//            $article->setBody("This is body for Article two");
//
//            $entityManager->persist($article);
//
//            $entityManager->flush();
//
//            return new Response('Saves an article with the id of ' . $article->getId());
//        }
    }