<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Unisimon\PrincipalBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class InicioController extends Controller
{
    public function indexAction()
    {
        
        
        return $this->render('UnisimonPrincipalBundle:Default:index.html.twig', array());
    }
}

