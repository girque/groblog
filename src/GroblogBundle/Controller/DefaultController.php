<?php

namespace GroblogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GroblogBundle:Default:index.html.twig');
    }
    public function postAction($id)
    {
        return $this->render('GroblogBundle:Default:post.html.twig', array('id' => $id));
    }
}
