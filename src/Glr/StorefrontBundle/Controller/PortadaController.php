<?php

namespace Glr\StorefrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortadaController extends Controller
{
    public function homeAction()
    {
        return $this->render('GlrStorefrontBundle:Portada:home.html.twig');
    }
}
