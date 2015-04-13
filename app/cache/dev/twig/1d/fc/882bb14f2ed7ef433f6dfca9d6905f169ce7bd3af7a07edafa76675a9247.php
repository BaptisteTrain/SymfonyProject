<?php

/* SdzBlogBundle:Blog:article.html.twig */
class __TwigTemplate_1dfc882bb14f2ed7ef433f6dfca9d6905f169ce7bd3af7a07edafa76675a9247 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $context["acceuil"] = ((array_key_exists("acceuil", $context)) ? (_twig_default_filter((isset($context["acceuil"]) ? $context["acceuil"] : $this->getContext($context, "acceuil")), false)) : (false));
        // line 4
        echo "
<h2>
  ";
        // line 7
        echo "  ";
        if ((isset($context["acceuil"]) ? $context["acceuil"] : $this->getContext($context, "acceuil"))) {
            // line 8
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</a>
  ";
        } else {
            // line 10
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "
  ";
        }
        // line 12
        echo "</h2>

<i>Le ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "dateEdition"), "d/m/Y"), "html", null, true);
        echo ", par ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur"), "html", null, true);
        echo ".</i>

<div class=\"well\">
  ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu"), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  49 => 14,  28 => 7,  24 => 4,  22 => 3,  41 => 10,  30 => 8,  26 => 7,  19 => 2,  72 => 16,  65 => 11,  62 => 10,  56 => 8,  50 => 20,  45 => 12,  38 => 12,  31 => 8,  23 => 2,  121 => 49,  118 => 48,  115 => 47,  111 => 40,  108 => 39,  100 => 41,  97 => 39,  89 => 34,  79 => 19,  76 => 18,  63 => 16,  60 => 15,  53 => 11,  46 => 10,  43 => 15,  36 => 10,  33 => 5,  124 => 33,  113 => 30,  106 => 29,  102 => 28,  98 => 26,  94 => 23,  86 => 20,  83 => 30,  69 => 15,  66 => 15,  48 => 18,  42 => 10,  39 => 10,  32 => 6,  29 => 5,);
    }
}
