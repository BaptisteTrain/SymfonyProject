<?php

/* portportfolioBundle::layout.html.twig */
class __TwigTemplate_36ba89fcd5b4a1002ca7bac0757e3778866662849246fd022c62f28caec5b90a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'body' => array($this, 'block_body'),
            'information' => array($this, 'block_information'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
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
        echo " - Portfolio
";
    }

    // line 9
    public function block_style($context, array $blocks = array())
    {
        // line 10
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portportfolio/css/myCSS.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "  <div class=\"container\">
    <div id=\"header\" class=\"label fix\">
      <h2 id=\"sujet\">Portfolio</h2>
    </div>
    <!-- Barre de navigation -->
      <div class=\"navbar navbar-inverse fix\">
        <div class=\"navbar-inner\">
          <!-- Bouton apparaissant sur les rÃ©solutions mobiles afin de faire apparaÃ®tre le menu de navigation -->
          <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </a>
          <!-- Structure du menu -->
          <div class=\"nav-collapse collapse\">
            <ul class=\"nav\">
              <li class=\"active\"><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("portportfolio_homepage");
        echo "\">Accueil</a></li>
              <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("portportfolio_projets");
        echo "\">Projets</a></li>
              <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("portportfolio_idées");
        echo "\">Idées</a></li>
            </ul>
          </div>
        </div>
      </div>

\t\t
    ";
        // line 42
        $this->displayBlock('information', $context, $blocks);
        // line 44
        echo "\t
  </div>
";
    }

    // line 42
    public function block_information($context, array $blocks = array())
    {
        // line 43
        echo "    ";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "  <script src=\"bootstrap/js/jquery-1.8.3.min.js\"></script>
    <!-- IntÃ©gration de la libraire de composants du Bootstrap -->
    <script src=\"bootstrap/js/bootstrap.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "portportfolioBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 49,  116 => 48,  112 => 43,  109 => 42,  103 => 44,  101 => 42,  91 => 35,  87 => 34,  83 => 33,  65 => 17,  62 => 16,  56 => 13,  52 => 12,  48 => 11,  45 => 10,  35 => 6,  80 => 40,  60 => 23,  47 => 13,  42 => 9,  39 => 9,  32 => 5,  29 => 5,);
    }
}
