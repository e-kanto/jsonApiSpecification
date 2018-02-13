<?php

namespace Ekanto\JsonApiSpecificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JsonApiSpecificationBundle:Default:index.html.twig');
    }
}
