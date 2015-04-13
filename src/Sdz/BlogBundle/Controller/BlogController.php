<?php
// src/Sdz/BlogBundle/Controller/BlogController.php

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;
use Sdz\BlogBundle\Entity\Article;
use Sdz\BlogBundle\Form\ArticleType;
use Sdz\BlogBundle\Form\ArticleModifType;

class BlogController extends Controller
{
  public function indexAction($page)
  {
    $articles = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('SdzBlogBundle:Article')
                     ->getArticles(3, $page); // 3 articles par page

    // On ajoute ici les variables page et nb_page � la vue
    return $this->render('SdzBlogBundle:Blog:index.html.twig', array(
      'articles'   => $articles,
      'page'       => $page,
      'nombrePage' => ceil(count($articles)/3)
    ));
  }
  
  
  public function voirAction(Article $article)
  {
    return $this->render('SdzBlogBundle:Blog:voir.html.twig', array(
      'article'			 => $article
    ));
  }
  
  public function ajouterAction()
  {
	// On cr�e un objet Article
	$article = new Article();
	$form = $this->createForm(new ArticleType, $article);	
  
    // On r�cup�re la requ�te
    $request = $this->getRequest();

    // On v�rifie qu'elle est de type POST
    if ($request->getMethod() == 'POST') {
      // On fait le lien Requ�te <-> Formulaire
      $form->bind($request);

      // On v�rifie que les valeurs entr�es sont correctes
      if ($form->isValid()) {
		// On r�cup�re le service
		$antispam = $this->container->get('sdz_blog.antispam');

		// On v�rifie que le contenu ne contient pas un spam d'adresse de page web ou d'adresse e-mail. La limite est 3
		if ($antispam->isSpam($article->getContenu())) {
			throw new \Exception('Votre message a �t� d�tect� comme spam !');
		}
		
        // On l'enregistre notre objet $article dans la base de donn�es
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();

        // On redirige vers la page de visualisation de l'article nouvellement cr��
        return $this->redirect($this->generateUrl('sdzblog_voir', array('id' => $article->getId())));
      }
    }

	//on lance la vue de la page d'ajout
    return $this->render('SdzBlogBundle:Blog:ajouter.html.twig', array(
      'form' => $form->createView(),
    ));
  }
  
  public function modifierAction(Article $article)
  {
    $form = $this->createForm(new ArticleModifType, $article);	
  
    // On r�cup�re la requ�te
    $request = $this->getRequest();

    // On v�rifie qu'elle est de type POST
    if ($request->getMethod() == 'POST') {
      // On fait le lien Requ�te <-> Formulaire
      $form->bind($request);

      // On v�rifie que les valeurs entr�es sont correctes
      if ($form->isValid()) {
		// On r�cup�re le service
		$antispam = $this->container->get('sdz_blog.antispam');

		// On v�rifie que le contenu ne contient pas un spam d'adresse de page web ou d'adresse e-mail. La limite est 3
		if ($antispam->isSpam($article->getContenu())) {
			throw new \Exception('Votre message a �t� d�tect� comme spam !');
		}
		
        // On l'enregistre notre objet $article dans la base de donn�es
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();

        // On redirige vers la page de visualisation de l'article nouvellement cr��
        return $this->redirect($this->generateUrl('sdzblog_voir', array('id' => $article->getId())));
      }
    }

    //on lance la vue de la page de modification
    return $this->render('SdzBlogBundle:Blog:modifier.html.twig', array(
      'article' => $article,
	  'form' => $form->createView()
    ));
  }

  public function supprimerAction(Article $article)
  {
    // On r�cup�re l'EntityManager
    $em = $this->getDoctrine()
               ->getManager();

	// On enl�ve l'article de la base de donn�es
    $em->remove($article);
	$em->flush();
    
    return $this->redirect( $this->generateUrl('sdzblog_acceuil') );
  }
  
  public function menuAction($nombre)
  {
    $liste = $this->getDoctrine()
                  ->getManager()
                  ->getRepository('SdzBlogBundle:Article')
                  ->findBy(
                    array(),
                    array('dateEdition' => 'desc'), // On trie par date d�croissante
                    $nombre,         // On s�lectionne $nombre articles
                    0
                  );

    return $this->render('SdzBlogBundle:Blog:menu.html.twig', array(
      'liste_articles' => $liste
    ));
  }
}