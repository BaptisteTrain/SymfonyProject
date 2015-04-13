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

    // On ajoute ici les variables page et nb_page à la vue
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
	// On crée un objet Article
	$article = new Article();
	$form = $this->createForm(new ArticleType, $article);	
  
    // On récupère la requête
    $request = $this->getRequest();

    // On vérifie qu'elle est de type POST
    if ($request->getMethod() == 'POST') {
      // On fait le lien Requête <-> Formulaire
      $form->bind($request);

      // On vérifie que les valeurs entrées sont correctes
      if ($form->isValid()) {
		// On récupère le service
		$antispam = $this->container->get('sdz_blog.antispam');

		// On vérifie que le contenu ne contient pas un spam d'adresse de page web ou d'adresse e-mail. La limite est 3
		if ($antispam->isSpam($article->getContenu())) {
			throw new \Exception('Votre message a été détecté comme spam !');
		}
		
        // On l'enregistre notre objet $article dans la base de données
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();

        // On redirige vers la page de visualisation de l'article nouvellement créé
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
  
    // On récupère la requête
    $request = $this->getRequest();

    // On vérifie qu'elle est de type POST
    if ($request->getMethod() == 'POST') {
      // On fait le lien Requête <-> Formulaire
      $form->bind($request);

      // On vérifie que les valeurs entrées sont correctes
      if ($form->isValid()) {
		// On récupère le service
		$antispam = $this->container->get('sdz_blog.antispam');

		// On vérifie que le contenu ne contient pas un spam d'adresse de page web ou d'adresse e-mail. La limite est 3
		if ($antispam->isSpam($article->getContenu())) {
			throw new \Exception('Votre message a été détecté comme spam !');
		}
		
        // On l'enregistre notre objet $article dans la base de données
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();

        // On redirige vers la page de visualisation de l'article nouvellement créé
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
    // On récupère l'EntityManager
    $em = $this->getDoctrine()
               ->getManager();

	// On enlève l'article de la base de données
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
                    array('dateEdition' => 'desc'), // On trie par date décroissante
                    $nombre,         // On sélectionne $nombre articles
                    0
                  );

    return $this->render('SdzBlogBundle:Blog:menu.html.twig', array(
      'liste_articles' => $liste
    ));
  }
}