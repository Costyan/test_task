<?php
namespace StudyTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{

  public function indexAction($name)
  {
    return $this->render('StudyTestBundle:Hello:hello.html.twig', array('name' => $name));
  }
}

?>
