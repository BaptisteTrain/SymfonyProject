<?php
// src/Sdz/BlogBundle/Form/ArticleEditType.php

namespace Sdz\BlogBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleModifType extends ArticleType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    // On fait appel � la m�thode buildForm du parent, qui va ajouter tous les champs � $builder
    parent::buildForm($builder, $options);

    // On supprime celui qu'on ne veut pas dans le formulaire de modification
    $builder->remove('auteur');
  }

  // On modifie cette m�thode car les deux formulaires doivent avoir un nom diff�rent
  public function getName()
  {
    return 'sdz_blogbundle_articleedittype';
  }
}