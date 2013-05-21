<?php

namespace Unisimon\PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UnisimonPrincipalBundle:Default:index.html.twig', array());
    }
    
    public function showAction($user)
    {
     if($user=='123456'){
        
         $encuestas = array(
        array('titulo' => 'Encuesta Sobre Mortalidad', 'modificado' =>  '2011-01-01', 'estado' => 'Publicada'),
        array('titulo' => 'Responsabilidad Social', 'modificado' =>  '2011-01-01', 'estado' => 'Cerrada'),
        array('titulo' => 'Encuesta numero 2', 'modificado' =>  '2011-01-01','estado' => 'Sin Publicar'),
         );
        return $this->render('UnisimonPrincipalBundle:Default:show.html.twig', array('usuario'=> $user,'encuestas' => $encuestas));
 
       }
     else{
       return $this->render('UnisimonPrincipalBundle:Default:errorUsuario.html.twig', array());
 
     }  
       
    }        
}
