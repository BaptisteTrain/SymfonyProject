<?php

/* portportfolioBundle:portfolio:acceuil.html.twig */
class __TwigTemplate_da90dde4ae85e5b2f3f9b60c2100043745c34118945bc31b7a4a5ec78e37394f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("portportfolioBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'information' => array($this, 'block_information'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "portportfolioBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Acceuil
";
    }

    // line 9
    public function block_information($context, array $blocks = array())
    {
        // line 10
        echo "\t<div id=\"acceuil\">
\t\t\t<div class=\"row\">
\t\t    \t<div id=\"data\" class=\"span12\">
\t\t\t\t\t\t\t<img id=\"img\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portportfolio/images/moi.jpeg"), "html", null, true);
        echo "\" alt=\"Error\" class=\"informationBlock\"/>
\t\t\t\t\t\t\t<div id=\"information\" class=\"informationBlock\">
\t\t\t\t\t\t\t\t\t<p> Train Baptiste </p>
\t\t\t\t\t\t\t\t\t<p> 91 Impasse Villehardouin </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"contact\" class=\"informationBlock\">
\t\t\t\t\t\t\t\t\t<p> 06 71 16 44 03</p>
\t\t\t\t\t\t\t\t\t<p> baptiste.train@gmail.com</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"other\" class=\"informationBlock\">
\t\t\t\t\t\t\t\t\t<a href=\"https://fr.linkedin.com/\"> <img id=\"in\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portportfolio/images/in.png"), "html", null, true);
        echo "\" alt=\"Error\"/> </a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t\t<div id=\"presentation\" class=\"span9 presentBlock\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tActuellement étudiant en seconde année de master informatique à l'universitée des sciences de Montpellier, et titulaire d'une licence informatique, j'ai choisi la spécialité \"Architectture et ingénierie du logiciel et du web\".
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tCe portfolio à pour vocation de vous présenter mon travail et mes futurs projets.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"download\" class=\"span2 presentBlock\">
\t\t\t\t\t\t\t<p id=\"downloadText\" class=\"downloadBlock\">
\t\t\t\t\t\t\t\t\tVous pouvez télécharger mon cv ici:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("portportfolio_telechargementCvPdf");
        echo "\">cv.pdf</a>
\t\t\t\t\t</div>
\t\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "portportfolioBundle:portfolio:acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 40,  60 => 23,  47 => 13,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
