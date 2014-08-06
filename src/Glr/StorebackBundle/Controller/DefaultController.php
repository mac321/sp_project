<?php

namespace Glr\StorebackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GlrStorebackBundle:Default:index.html.twig', array('name' => $name));
    }
}
