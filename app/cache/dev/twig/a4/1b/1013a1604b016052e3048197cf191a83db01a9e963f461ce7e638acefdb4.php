<?php

/* SdzBlogBundle::layout.html.twig */
class __TwigTemplate_a41b1013a1604b016052e3048197cf191a83db01a9e963f461ce7e638acefdb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'sdzblog_body' => array($this, 'block_sdzblog_body'),
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
        echo " - Blog
";
    }

    // line 9
    public function block_style($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  ";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "  <div class=\"container\">
      <div id=\"header\" class=\"hero-unit\">
        <h1>Mon Projet Symfony2</h1>
        <h2>Blog</h2>
\t\t<p>AUTEUR : Train Baptitse</p>
      </div>

      <div class=\"row\">
        <div id=\"menu\" class=\"span3\">
          <h3>Le blog</h3>
\t\t  
\t\t  ";
        // line 28
        echo "          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("sdzblog_acceuil");
        echo "\">Acceuil du blog</a></li>
            <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("sdzblog_ajouter");
        echo "\">Ajouter un billet</a></li>
          </ul>
           
\t\t  ";
        // line 34
        echo "          ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SdzBlogBundle:Blog:menu", array("nombre" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"span9\">
\t\t
\t\t\t";
        // line 39
        echo "\t\t\t";
        $this->displayBlock('sdzblog_body', $context, $blocks);
        // line 41
        echo "\t\t\t
        </div>
      </div>
    </div>
";
    }

    // line 39
    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 40
        echo "\t\t\t";
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        // line 48
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 49,  118 => 48,  115 => 47,  111 => 40,  108 => 39,  100 => 41,  97 => 39,  89 => 34,  79 => 29,  76 => 28,  63 => 16,  60 => 15,  53 => 11,  46 => 10,  43 => 9,  36 => 6,  33 => 5,  124 => 33,  113 => 30,  106 => 29,  102 => 28,  98 => 26,  94 => 23,  86 => 20,  83 => 30,  69 => 16,  66 => 15,  48 => 14,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
