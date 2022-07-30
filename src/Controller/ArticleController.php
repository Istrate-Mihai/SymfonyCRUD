<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
  /**
   *@Route("/")
   *@Method({"GET"})
   *      
   */
  public function index()
  {
    // return new Response('<html><body>Hello</body></html>');

    $articleList = array(
      array('name' => 'Article 1', 'date' => '30.07.2022'),
      array('name' => 'Article 2', 'date' => '31.07.2022'),
    );

    return $this->render('articles/index.html.twig', array(
      'articleList' => $articleList
    ));
  }
}
