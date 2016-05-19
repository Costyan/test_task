<?php

namespace StudyTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('StudyTestBundle:Default:index.html.twig');
    }
}
