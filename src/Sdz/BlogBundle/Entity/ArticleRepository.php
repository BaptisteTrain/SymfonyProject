<?php

namespace Sdz\BlogBundle\Entity;

use Doctrine\ORM\EntityRepository; 
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
 
class ArticleRepository extends EntityRepository
{
	public function getArticles($nombreParPage, $page)
    {
	
    if ($page < 1) {
      throw new \InvalidArgumentException('L\'argument $page ne peut être inférieur à 1 (valeur : "'.$page.'").');
    }
	
    $query = $this->createQueryBuilder('a')
                  ->orderBy('a.dateEdition', 'DESC')
                  ->getQuery();

    // On définit l'article à partir duquel commencer la liste
    $query->setFirstResult(($page-1) * $nombreParPage)
    // Ainsi que le nombre d'articles à afficher
          ->setMaxResults($nombreParPage);

    // Enfin, on retourne l'objet Paginator correspondant à la requête construite
    return new Paginator($query);
    }
}
