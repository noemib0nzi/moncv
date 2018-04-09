<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Formation;

class DefaultController extends Controller
{
    /**
     * @Route("cv/{name}/{firstname}", name="homepage")
     * @Template()
     */
    public function indexAction($name= "Bonzi", $firstname = "Noemi")
    {
        // replace this example code with whatever you need
        //return $this->render('default/index.html.twig', [
        
        //    'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        //]);
        
        $repo = $this->getDoctrine()->getRepository('AppBundle:Formation');
        $formations = $repo->findAll();
        
        $repo = $this->getDoctrine()->getRepository('AppBundle:Loisir');
        $loisirs = $repo->findAll();
        
        $repo = $this->getDoctrine()->getRepository('AppBundle:Competence');
        $competences = $repo->findAll();
        
        $repo = $this->getDoctrine()->getRepository('AppBundle:Experience');
        $experiences = $repo->findAll();
        
        return array(
            'name' => $name,
            'firstname' => $firstname,
            'formations' => $formations
        );
        
        return array(
            'loisirs' => $loisirs
        );
        
        return array(
            'competences' => $competences
        );
        
        return array(
            'experiences' => $experiences
        );
        
    }
      /**
     * @Route("/createformation", name="create_formation")
     * @Template()
     */  
       public function createAction(Request $request)
    {
        $form = new Formation();
        $form->setName("Ma formation");
        $form->setDateDebut(New \DateTime());
        $form->setDateFin(New \DateTime());
        $form->setLieu("Brest, France");
        $eManager = $this->getDoctrine()->getManager();
        $eManager->persist($form);
        $eManager->flush();
        return array();
    }
}

