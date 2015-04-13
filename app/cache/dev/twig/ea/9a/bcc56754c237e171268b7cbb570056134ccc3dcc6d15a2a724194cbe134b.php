<?php

/* ::layout.html.twig */
class __TwigTemplate_ea9abcc56754c237e171268b7cbb570056134ccc3dcc6d15a2a724194cbe134b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('style', $context, $blocks);
        // line 12
        echo "  </head>

  <body>
  ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "\t
  ";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "
  </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Train Baptiste";
    }

    // line 10
    public function block_style($context, array $blocks = array())
    {
        // line 11
        echo "    ";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "\t";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  65 => 11,  62 => 10,  56 => 8,  50 => 20,  45 => 17,  38 => 12,  31 => 8,  23 => 2,  121 => 49,  118 => 48,  115 => 47,  111 => 40,  108 => 39,  100 => 41,  97 => 39,  89 => 34,  79 => 19,  76 => 18,  63 => 16,  60 => 15,  53 => 11,  46 => 10,  43 => 15,  36 => 10,  33 => 5,  124 => 33,  113 => 30,  106 => 29,  102 => 28,  98 => 26,  94 => 23,  86 => 20,  83 => 30,  69 => 15,  66 => 15,  48 => 18,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
