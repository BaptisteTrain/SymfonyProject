<?php

namespace port\portfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use port\portfolioBundle\Entity\Projets;

class DefaultController extends Controller
{
    public function acceuilAction()
    {
        return $this->render('portportfolioBundle:portfolio:acceuil.html.twig');
    }

    public function telechargementCvPdfAction()
    {
     
       $fichier = "CV.pdf";
       $chemin = "bundles/portportfolio/donwload/";

       $response = new Response();
       $response->setContent(file_get_contents($chemin.$fichier));echo $chemin.$fichier;
       $response->headers->set('Content-Type', 'application/force-download');
       $response->headers->set('Content-disposition', 'filename='. $fichier);

       return $response;
    }

    public function projetsAction()
    {
        $projetsFac = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('portportfolioBundle:Projets')
                           ->getProjetsFac();

        $projetsPerso = $this->getDoctrine()
                             ->getManager()
                             ->getRepository('portportfolioBundle:Projets')
                             ->getProjetsPerso();

        return $this->render('portportfolioBundle:portfolio:projets.html.twig', array(
            'fac'           => $projetsFac,
            'tailleFac'     => count($projetsFac),
            'perso'         => $projetsPerso,
            'taillePerso'   => count($projetsPerso)
        ));
    }

    public function IdeeAction()
    {
        $idee = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('portportfolioBundle:Projets')
                           ->getIdee();

        return $this->render('portportfolioBundle:portfolio:idees.html.twig', array(
            'idee'           => $idee,
            'tailleIdee'     => count($idee)
        ));
    }
}
